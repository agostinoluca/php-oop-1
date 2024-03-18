<?php
class Movie
{
    public static $isStatic = "1) Static info of Movies.";
    public static $returnStaticInfo = "2) Method with static info return";

    public function returnStatic()
    {
        return self::$returnStaticInfo;
    }

    public static function sayStaticInfo()
    {
        return "3) This is a static function info.";
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
