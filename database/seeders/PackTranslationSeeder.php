<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class PackTranslationSeeder extends Seeder
{
    public function run(): void
    {
        $englishTranslations = [
            'pack-decouverte-3-sound-tags' => [
                'name_en' => 'Discovery Pack - 3 Sound Tags',
                'description_en' => "Discover the universe of Sound Tags with this pack of 3 customizable tags!\n\n🎯 **This pack contains:**\n• 3 Sound Tags NFC of your choice\n• Free delivery\n• User guide included\n• Technical support\n\n✨ **Pack advantages:**\n• Save 15% compared to individual purchase\n• Choose from all our available sound tags\n• Perfect for beginners or as a gift\n• Guaranteed variety for all tastes\n\n🚀 **How it works:**\n1. Add this pack to your cart\n2. Select your 3 favorite sound tags\n3. Receive your personalized pack within 48h\n\nAn excellent way to discover our most popular sound tags at a reduced price!",
                'short_description_en' => 'Choose 3 sound tags from our entire collection and save 15%! Perfect for discovering or gifting.',
                'meta_title_en' => 'Discovery Pack 3 Sound Tags - Save 15%',
                'meta_description_en' => 'Pack of 3 NFC sound tags to choose from our entire collection. Free delivery and guaranteed savings!',
            ],
            'pack-famille-6-sound-tags' => [
                'name_en' => 'Family Pack - 6 Sound Tags',
                'description_en' => "The perfect pack for the whole family! 6 Sound Tags to choose according to your desires.\n\n🎯 **This pack contains:**\n• 6 Sound Tags NFC of your choice\n• Free delivery offered\n• Family user guide\n• Priority technical support\n• Storage case included\n\n✨ **Pack advantages:**\n• Save 25% compared to individual purchase\n• Free selection from all our sound tags\n• Ideal for sharing with family or friends\n• Varied assortment for all ages\n\n🎁 **Included bonus:**\n• Premium transport case\n• Free decorative stickers\n• Access to VIP Facebook group\n• New releases in preview\n\n🚀 **Simple process:**\n1. Order your family pack\n2. Choose your 6 favorite sound tags\n3. Enjoy your personalized collection\n\nThe smart choice to equip the whole family!",
                'short_description_en' => 'The ultimate family pack! Choose 6 sound tags and save 25%.',
                'meta_title_en' => 'Family Pack 6 Sound Tags - Save 25%',
                'meta_description_en' => 'Family pack of 6 NFC sound tags of your choice. Case included, free delivery, maximum savings!',
            ],
            'pack-collectionneur-10-sound-tags' => [
                'name_en' => 'Collector Pack - 10 Sound Tags',
                'description_en' => "The ultimate collection for true enthusiasts! 10 premium Sound Tags to customize.\n\n🎯 **This pack contains:**\n• 10 premium Sound Tags NFC of your choice\n• Free express delivery\n• Luxury collector box\n• VIP technical support\n• Numbered collection certificate\n\n✨ **Pack advantages:**\n• Save 35% compared to individual purchase\n• Access to ALL our sound tags, even exclusives\n• Collector box in limited edition\n• Priority customer service\n• 30-day satisfaction guarantee\n\n🏆 **Collector exclusives:**\n• Premium real wood box\n• Access to sound tags in preview\n• Lifetime VIP membership\n• Numbered collector badge\n• Exclusive monthly newsletter\n\n🚀 **Premium experience:**\n1. Order processed in priority\n2. Selection assisted by our experts\n3. Careful collector packaging\n4. Premium tracking until receipt\n\nFor connoisseurs who don't compromise on quality!",
                'short_description_en' => 'The ultimate collection! 10 premium sound tags of your choice. Save 35%!',
                'meta_title_en' => 'Collector Pack 10 Premium Sound Tags - Save 35%',
                'meta_description_en' => 'Premium collection of 10 NFC sound tags of your choice. Collector box, express delivery, VIP exclusives!',
            ],
        ];

        foreach ($englishTranslations as $slug => $translations) {
            $product = Product::where('slug', $slug)->first();
            if ($product) {
                $product->update($translations);
            }
        }

        echo "✅ English translations added to " . count($englishTranslations) . " packs!";
    }
}
