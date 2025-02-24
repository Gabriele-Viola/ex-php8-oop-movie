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
        return $this->curiosity;
    }
}
