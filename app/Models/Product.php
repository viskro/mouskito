<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'name_en',
        'slug',
        'description',
        'description_en',
        'short_description',
        'short_description_en',
        'price',
        'original_price',
        'sku',
        'audio_file',
        'audio_duration',
        'image',
        'gallery',
        // 'stock_quantity' supprimé (stock illimité)
        'is_active',
        'meta_title',
        'meta_title_en',
        'meta_description',
        'meta_description_en',
        'category',
        'tags',
        'sort_order',
        // Nouvelles colonnes pour les packs
        'product_type',
        'pack_size',
        'selected_tags',
        'is_configurable',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'original_price' => 'decimal:2',
        'gallery' => 'array',
        'tags' => 'array',
        'selected_tags' => 'array', // Nouvelle colonne
        'is_active' => 'boolean',
        'is_configurable' => 'boolean', // Nouvelle colonne
        'audio_duration' => 'integer',
        'pack_size' => 'integer', // Nouvelle colonne
    ];

    protected $appends = [
        'formatted_price',
        'discount_percentage',
        'is_on_sale',
        'audio_url',
        'image_url',
        'localized_name',
        'localized_description',
        'localized_short_description',
        'localized_meta_title',
        'localized_meta_description',
    ];

    // Accessors
    public function getFormattedPriceAttribute(): string
    {
        return number_format($this->price, 2) . ' €';
    }

    public function getDiscountPercentageAttribute(): ?int
    {
        if (!$this->original_price || $this->original_price <= $this->price) {
            return null;
        }

        return round((($this->original_price - $this->price) / $this->original_price) * 100);
    }

    public function getIsOnSaleAttribute(): bool
    {
        return $this->original_price && $this->original_price > $this->price;
    }

    public function getAudioUrlAttribute(): ?string
    {
        return $this->audio_file ? asset('storage/audio/' . $this->audio_file) : null;
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('storage/images/products/' . $this->image) : null;
    }

    // Accessors for localized content
    public function getLocalizedNameAttribute(): string
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->name_en)) {
            return $this->name_en;
        }
        return $this->name;
    }

    public function getLocalizedDescriptionAttribute(): string
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->description_en)) {
            return $this->description_en;
        }
        return $this->description;
    }

    public function getLocalizedShortDescriptionAttribute(): string
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->short_description_en)) {
            return $this->short_description_en;
        }
        return $this->short_description;
    }

    public function getLocalizedMetaTitleAttribute(): string
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->meta_title_en)) {
            return $this->meta_title_en;
        }
        return $this->meta_title;
    }

    public function getLocalizedMetaDescriptionAttribute(): string
    {
        $locale = app()->getLocale();
        if ($locale === 'en' && !empty($this->meta_description_en)) {
            return $this->meta_description_en;
        }
        return $this->meta_description;
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeInStock($query)
    {
        // Stock illimité: ne pas filtrer par stock
        return $query;
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeByProductType($query, $type)
    {
        return $query->where('product_type', $type);
    }

    // Methods
    public function isInStock(): bool
    {
        // Stock illimité
        return true;
    }

    public function canBePurchased(): bool
    {
        // Actif suffit, le stock est illimité
        return (bool) $this->is_active;
    }

    public function isPack(): bool
    {
        return $this->product_type === 'pack';
    }

    public function isSoundTag(): bool
    {
        return $this->product_type === 'sound-tag';
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
