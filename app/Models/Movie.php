<?php
class Movie
{
    public static $isStatic = "Static info of Movies.";
    public static $returnStaticInfo = "Method with static info return";

    public function returnStatic()
    {
        return self::$returnStaticInfo;
    }

    /**
     * @param string $title The title of movie
     * @param int $duration The duration of movie
     * @param string $poster The poster of movie
     * @param array $genres The genres of movie
     */
    public function __construct(public string $title, public int $duration, public string $poster, public array $genres)
    {
    }
}
