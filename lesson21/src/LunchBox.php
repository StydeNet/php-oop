<?php

namespace Styde;

class LunchBox implements \IteratorAggregate, \Countable
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

    public function all()
    {
        return $this->food;
    }

    public function shift()
    {
        return array_shift($this->food);
    }

    public function isEmpty()
    {
        return empty($this->food);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->food);
    }

    public function count()
    {
        return count($this->food);
    }
}



