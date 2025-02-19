<?php
class Movie
{
    public $name;
    public $year;
    public $timing;
    public $nationality;

    function __construct($_name, $_year, $_timing, $_nationality)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->timing = $_timing;
        $this->nationality = $_nationality;
    }
    public function getTiming()
    {
        return $this->timing;
    }
}
