<?php
class Genre
{
    /**
     * @param string $name The genre written in English 
     * @param string $itaTraduction The genre written in Italian
     */
    public function __construct(public $name, public $itaTraduction)
    {
    }
}
