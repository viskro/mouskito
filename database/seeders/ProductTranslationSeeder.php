<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $englishTranslations = [
            'sound-tag-orgasme-1' => [
                'name_en' => 'Sound Tag Orgasm 1',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'Sound tag for your moments of surprise and entertainment.',
                'meta_title_en' => 'Sound Tag Orgasm 1 - NFC Sound Tags',
                'meta_description_en' => 'Sound tag for your moments of surprise and entertainment.',
            ],
            'sound-tag-orgasme-2' => [
                'name_en' => 'Sound Tag Orgasm 2',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'Variant of the sound tag to diversify your pranks.',
                'meta_title_en' => 'Sound Tag Orgasm 2 - NFC Sound Tags',
                'meta_description_en' => 'Variant of the sound tag to diversify your pranks.',
            ],
            'sound-tag-alarme' => [
                'name_en' => 'Sound Tag Alarm',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'The perfect alarm sound to wake up or alert with style.',
                'meta_title_en' => 'Sound Tag Alarm - NFC Sound Tags',
                'meta_description_en' => 'The perfect alarm sound to wake up or alert with style.',
            ],
            'sound-tag-brainrot-1' => [
                'name_en' => 'Sound Tag Brainrot 1',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'The viral Brainrot sound that\'s trending on social media.',
                'meta_title_en' => 'Sound Tag Brainrot 1 - NFC Sound Tags',
                'meta_description_en' => 'The viral Brainrot sound that\'s trending on social media.',
            ],
            'sound-tag-brainrot-2' => [
                'name_en' => 'Sound Tag Brainrot 2',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'Second version of the viral Brainrot to vary the pleasures.',
                'meta_title_en' => 'Sound Tag Brainrot 2 - NFC Sound Tags',
                'meta_description_en' => 'Second version of the viral Brainrot to vary the pleasures.',
            ],
            'sound-tag-erika' => [
                'name_en' => 'Sound Tag Erika',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'The famous Erika song that became a meme on the internet.',
                'meta_title_en' => 'Sound Tag Erika - NFC Sound Tags',
                'meta_description_en' => 'The famous Erika song that became a meme on the internet.',
            ],
            'sound-tag-explosion' => [
                'name_en' => 'Sound Tag Explosion',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'The perfect explosion sound to dramatize your epic moments.',
                'meta_title_en' => 'Sound Tag Explosion - NFC Sound Tags',
                'meta_description_en' => 'The perfect explosion sound to dramatize your epic moments.',
            ],
            'sound-tag-goofy' => [
                'name_en' => 'Sound Tag Goofy',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'Goofy\'s iconic laugh for moments of pure Disney nostalgia.',
                'meta_title_en' => 'Sound Tag Goofy - NFC Sound Tags',
                'meta_description_en' => 'Goofy\'s iconic laugh for moments of pure Disney nostalgia.',
            ],
            'sound-tag-just-sleep' => [
                'name_en' => 'Sound Tag Just Sleep',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'The perfect sound to tell someone to go to sleep with humor.',
                'meta_title_en' => 'Sound Tag Just Sleep - NFC Sound Tags',
                'meta_description_en' => 'The perfect sound to tell someone to go to sleep with humor.',
            ],
            'sound-tag-china' => [
                'name_en' => 'Sound Tag China',
                'description_en' => 'Premium quality NFC Sound Tag. Simply bring your phone close to the tag to instantly trigger the sound!',
                'short_description_en' => 'The China meme that went viral on social media.',
                'meta_title_en' => 'Sound Tag China - NFC Sound Tags',
                'meta_description_en' => 'The China meme that went viral on social media.',
            ],
        ];

        foreach ($englishTranslations as $slug => $translations) {
            $product = Product::where('slug', $slug)->first();
            if ($product) {
                $product->update($translations);
            }
        }

        echo "✅ English translations added to " . count($englishTranslations) . " products!";
    }
}
