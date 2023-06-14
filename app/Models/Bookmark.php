<?php
namespace App\Models;

class Bookmark {
    /**
     * @var string The name of the bookmark.
     */
    public $name;

    /**
     * @var string The URL of the bookmark.
     */
    public $url;

    /**
     * @var string The description of the bookmark.
     */
    public $description;

    /**
     * Bookmark constructor.
     * @param string $name The name of the bookmark.
     * @param string $url The URL of the bookmark.
     * @param string $description The description of the bookmark.
     */
    public function __construct($name, $url, $description) {
        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
    }
}
