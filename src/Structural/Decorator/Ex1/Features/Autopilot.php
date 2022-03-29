<?php

namespace App\Structural\Decorator\Ex1\Features;

use App\Structural\Decorator\Ex1\CarFeature;

class Autopilot extends CarFeature
{
    public function cost(): int
    {
        return $this->car->cost() + 500;
    }

    public function description(): string
    {
        return $this->car->description() . ', Autopilot';
    }
}