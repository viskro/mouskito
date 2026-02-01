<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name_en')->nullable()->after('name');
            $table->text('description_en')->nullable()->after('description');
            $table->string('short_description_en', 500)->nullable()->after('short_description');
            $table->string('meta_title_en')->nullable()->after('meta_title');
            $table->text('meta_description_en')->nullable()->after('meta_description');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'name_en',
                'description_en',
                'short_description_en',
                'meta_title_en',
                'meta_description_en'
            ]);
        });
    }
};
