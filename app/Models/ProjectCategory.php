<?php
namespace App\Models;

class ProjectCategory {
    /**
     * @var string The name of the bookmark category.
     */
    public $name;

    /**
     * @var array An array of Project objects.
     */
    public $projects;

    /**
     * BookmarkCategory constructor.
     * @param string $name The name of the bookmark category.
     * @param array $projects An array of Project objects.
     */
    public function __construct($name, $projects = array()) {
        $this->name = $name;
        $this->projects = $projects;
    }
}
