<?php
class Movie
{
    public $name;
    public $year;
    public $timing;
    public $nationality;
    public $genre;

    use Curiosity;

    function __construct($_name, $_year, $_timing, Genre $_genre, $_nationality)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->timing = $_timing;
        $this->genre = $_genre;
        $this->nationality = $_nationality;
    }
    public function getTiming()
    {
        return $this->timing;
    }
    public function showGenre()
    {
        return $this->genre->getGenre();
    }
}
