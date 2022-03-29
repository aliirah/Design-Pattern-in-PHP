<?php

namespace App\Structural\Decorator\Ex1\Features;

use App\Structural\Decorator\Ex1\CarFeature;

class Touchscreen extends CarFeature
{
    public function cost(): int
    {
        return $this->car->cost() + 1500;
    }

    public function description(): string
    {
        return $this->car->description() . ', Touchscreen';
    }
}