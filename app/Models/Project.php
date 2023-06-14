<?php
class Project {
    /**
     * @var string The name of the project.
     */
    public $name;

    /**
     * @var string The description of the project.
     */
    public $description;

    /**
     * @var string The URL of the project.
     */
    public $url;

    /**
     * @var array Languages used in the project.
     */
    public $languages;

    /**
     * BookmarkCategory constructor.
     * @param string $name The name of the project.
     * @param string $description The description of the project.
     * @param string The URL of the project.
     * @param array  $languages Languages used in the project.s
     */
    public function __construct($name, $description, $url, $languages = array()) {
        $this->name = $name;
        $this->description = $description;
        $this->url = $url;
        $this->languages = $languages;
    }
}
