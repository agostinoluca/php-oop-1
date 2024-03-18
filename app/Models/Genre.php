<?php
class Genre
{
    public function __construct(public $name, public $itaTraduction)
    {
        $this->name = $name;
        $this->itaTraduction = $itaTraduction;
    }
}
