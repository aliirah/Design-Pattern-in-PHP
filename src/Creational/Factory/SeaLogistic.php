<?php

namespace App\Creational\Factory;

class SeaLogistic extends Logistic
{
    public function createTransport(): Ship
    {
        return new Ship();
    }
}