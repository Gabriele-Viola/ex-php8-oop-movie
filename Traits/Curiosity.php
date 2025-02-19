<?php

trait Curiosity
{
    private $curiosity;

    public function setCuriosity(...$_curiosity)
    {
        $this->curiosity = $_curiosity;
    }
    public function getCuriosity()
    {
        return !empty($this->curiosity) ? implode(", ", $this->curiosity) : null;
    }
}
