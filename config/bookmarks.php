<?php
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


return [
    new BookmarkCategory("Friends' Websites", [
        new Bookmark("nick99nack", "http://www.nick99nack.com/", "Currently in the process of taking over the internet. I Totally didn't steal any of his stuff."),
        new Bookmark("campos", "https://campos02.me/", "Cool brazilian dude, does programming and stuff"),
        new Bookmark("Sashi", "https://joshuaalto.com/", "Site redesign #8! I'll find a website style I enjoy eventually, I swear!"),
        new Bookmark("noone", "http://strangenessnetworks.com/", "Strangeness Networks, noone's website."),
        new Bookmark("raf", "https://notashelf.dev/", "is a shelf"),
        new Bookmark("CamK06", "https://starman0620.neocities.org/", "Now with more outdated HTML!"),
        new Bookmark("HIDEN", "https://hiden.pw/", "Moar buttons!"),
        new Bookmark("coco", "http://cocomark.neocities.org/", "needs to go to the brain store"),
        new Bookmark("Toxidation", "http://toxi.pw/", "h (idk if this is his actual domain he has like 5)"),
        new Bookmark("xproot", "http://xproot.pw/", "a random internet person on this very random planet")
    ]),
    new BookmarkCategory("Cool Projects", [
        new Bookmark("ToS;DR", "https://tosdr.org/", "\"I have read and agree to the Terms\" is the biggest lie on the web. They aim to fix that."),
        new Bookmark("NINA", "https://nina.chat/", "Yahoo! Messenger (and soon AOL) revival"),
        new Bookmark("Escargot", "https://escargot.chat/", "MSN/WLM revival"),
    ]),
    new BookmarkCategory("Other Cool Stuff", [
        new Bookmark("WinWorld", "http://www.winworldpc.com/", "WinWorld is an online museum dedicated to the preservation and sharing of vintage, abandoned, and pre-release software."),
        new Bookmark("ToastyTech", "http://toastytech.com/", "Nathan's Toasty Technology Page"),
        new Bookmark("Optimized for no one", "http://www.hoary.org/browse/", "Optimized for no one, but pretty much OK with . . ."),
        new Bookmark("Cameron's World", "http://www.cameronsworld.net/", "A love letter to the Internet of old.")
    ])
];
