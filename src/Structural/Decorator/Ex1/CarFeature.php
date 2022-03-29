<?php

namespace App\Structural\Decorator\Ex1;


use App\Structural\Decorator\Ex1\Interface\CarInterface;

abstract class CarFeature implements CarInterface
{
    protected CarInterface $car;

    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    abstract public function cost(): int;
    abstract public function description(): string;
}