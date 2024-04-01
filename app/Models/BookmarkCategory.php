<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarkCategory extends Model
{
    use HasFactory;
    protected $table = "bookmark__categories";
    protected $fillable = ['name'];

    public function sites() {
        return $this->hasMany(BookmarkSite::class, 'category');
    }

    public static function insertBookmarkCategory(string $name) {
        $newBookmarkCategory = new BookmarkCategory;
        $newBookmarkCategory->name = $name;
        $newBookmarkCategory->save();
    }
    public static function selectBookmarks(int $id) {
        $bookmarks = BookmarkSite::where('category', '=', $id)->firstOrFail();
        return $bookmarks;
    }

    public static function importBookmarkCategory(array $data) {
        foreach ($data as $category) {
            $newBookmarkCategory = new BookmarkCategory;
            $newBookmarkCategory->name = $category['name'];
            $newBookmarkCategory->priority = intval($category['priority']);
            $newBookmarkCategory->save();
        }
    }
}
