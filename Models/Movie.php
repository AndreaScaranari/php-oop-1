<?php
require_once __DIR__ . '/Director.php';

class Movie
{
    public $id;
    public $title;
    public $genre;
    public $director;

    public function __construct($id, $title, $genre, Director $director)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
    }
}

?>