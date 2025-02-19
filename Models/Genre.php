<?php
class Genre
{
    public $genre;

    public function __construct(...$_genre)
    {
        $this->genre = $_genre;
    }
    public function getGenre()
    {
        return implode(", ", $this->genre);
    }
}
