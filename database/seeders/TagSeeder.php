<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    public function run()
    {
        $fakerEn = Faker::create('en_US');
        $fakerAr = Faker::create('ar_SA');

        $tags = [
            'ar' => ['name' => $fakerAr->word],
            'en' => ['name' => $fakerEn->word]
        ];

        for ($i = 0; $i < 10; $i++) {
            Tag::create($tags);
        }
    }
}
