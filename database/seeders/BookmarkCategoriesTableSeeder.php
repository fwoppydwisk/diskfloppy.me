<?php

namespace Database\Seeders;

use App\Models\BookmarkCategory;
use App\Models\BookmarkSite;
use Illuminate\Database\Seeder;

class BookmarkCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
//        BookmarkCategory::factory()->count(5)->create()->each(function ($category) {
//            $category->sites()->saveMany(BookmarkSite::factory()->count(3)->make());
//        });
        $category = new BookmarkCategory([
            'name' => 'cool people',
        ]);
        $category->save();
        $site = new BookmarkSite([
            'name' => 'campos',
            'description' => 'Cool brazilian dude, does programming and stuff',
            'url' => 'https://campos02.me/',
            'category' => 1,
        ]);
        $site->save();
    }
}
