<?php
namespace App\Models;

class BookmarkCategory {
    /**
     * @var string The name of the bookmark category.
     */
    public $name;

    /**
     * @var array An array of Bookmark objects.
     */
    public $bookmarks;

    /**
     * BookmarkCategory constructor.
     * @param string $name The name of the bookmark category.
     * @param array $bookmarks An array of Bookmark objects.
     */
    public function __construct($name, $bookmarks = array()) {
        $this->name = $name;
        $this->bookmarks = $bookmarks;
    }
}
