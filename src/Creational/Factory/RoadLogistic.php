<?php

namespace App\Creational\Factory;

class RoadLogistic extends Logistic
{
    public function createTransport(): Truck
    {
        return new Truck();
    }
}