<?php
class Movie
{
    public $id;
    public $title;
    public $genre;

    public function __construct($id, $title, $genre)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
    }
}

?>