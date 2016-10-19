<?php

namespace Styde;

use Exception;

class User extends Model
{
    protected $lunch;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->lunch = new LunchBox();
    }

    public function setLunch(LunchBox $lunch)
    {
        $this->lunch = $lunch;
    }

    public function eat()
    {
        if ($this->lunch->isEmpty()) {
            throw new \Exception("{$this->name} no tiene nada para comer :(");
        }

        echo "<p>{$this->name} almuerza {$this->lunch->shift()}</p>";
    }

    public function eatMeal()
    {
        $food = $this->lunch->filter(function ($food) {
            return !$food->beverage;
        });

        $beverages = $this->lunch->filter(function ($food) {
            return $food->beverage;
        });

        echo "<p>{$this->name} tiene {$this->lunch->count()} alimentos</p>";

        echo "<p>{$this->name} tiene {$beverages->count()} bebidas</p>";

        foreach ($food as $item) {
            echo "<p>{$this->name} come {$item->name}</p>";
        }

        foreach ($beverages as $item) {
            echo "<p>{$this->name} toma {$item->name}</p>";
        }
    }
}







