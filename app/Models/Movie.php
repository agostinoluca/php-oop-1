<?php
class Movie
{
    /**
     * @param String $title The title of movie
     * @param Number $duration The duration of movie
     * @param String $poster The poster of movie
     * @param String $genre The genre of movie
     */
    public function __construct(public string $title, public int $duration, public string $poster, public array $genres)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->poster = $poster;
        $this->genres = $genres;
    }
}
