<?php

trait Curiosity
{
    protected $curiosity;

    public function setCuriosity(...$_curiosity)
    {
        return $this->curiosity = $_curiosity;
    }
}
