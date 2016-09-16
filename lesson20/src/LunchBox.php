<?php

namespace Styde;

class LunchBox
{
    protected $food = [];

    protected $original = true;

    public function __construct(array $food = [])
    {
        $this->food = $food;
    }

    public function __clone()
    {
        $this->original = false;
    }

    public function shift()
    {
        return array_shift($this->food);
    }

    public function isEmpty()
    {
        return empty($this->food);
    }
}



