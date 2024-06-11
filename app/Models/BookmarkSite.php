<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarkSite extends Model
{
    use HasFactory;
    protected $table = "bookmark__sites";
    protected $fillable = ['name', 'description', 'url', 'category'];

    public function category()
    {
        return $this->belongsTo(BookmarkCategory::class, 'category');
    }
    public static function insertBookmark(string $name, string $url, int $category)
    {
        $category = BookmarkCategory::where('id', $category)->firstOrFail();
        $newBookmark = new BookmarkSite();
        $newBookmark->name = $name;
        $newBookmark->url = $url;
        $newBookmark->category = $category->id;
        $newBookmark->save();
    }

    public static function importBookmark(array $data)
    {
        foreach ($data as $site) {
            $newBookmark = new BookmarkSite();
            $newBookmark->name = $site['name'];
            $newBookmark->description = $site['description'];
            $newBookmark->url = $site['url'];
            $newBookmark->category = $site['category_id'];
            $newBookmark->save();
        }
    }
}
