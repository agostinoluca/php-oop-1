<?php

class Movie
{
    // public $title;
    // public $duration;
    // public $poster;
    // public $genre;

    /**
     * @param String $title The title of movie
     * @param Number $duration The duration of movie
     * @param String $poster The poster of movie
     * @param String $genre The genre of movie
     */
    public function __construct(public string $title, public int $duration, public string $poster, public string $genre)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->poster = $poster;
        $this->genre = $genre;
    }

    public function displayInfo()
    {
        echo 'Title: ' . $this->title . '<br>';
        echo 'Duration: ' . $this->duration . ' minutes<br>';
        echo 'Poster: <img width="200" src="' . $this->poster . '" alt=""><br>';
        echo 'Genre: ' . $this->genre . '<br>';
    }
}
