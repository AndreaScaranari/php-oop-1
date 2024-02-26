<?php
require_once __DIR__ . '/Director.php';
require_once __DIR__ . '/Actor.php';

class Movie
{
    public $id;
    public $title;
    public $genre;
    public $director;
    public $cast;

    public function __construct($id, $title, $genre, Director $director, array $cast = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->cast = $cast;
    }

    public function getCastNames(){
        $names = '';

        foreach($this->cast as $actor){
            $names .= $actor->getFullName() . ', ';
        }

        return substr($names, 0, -2);
    }
}

?>