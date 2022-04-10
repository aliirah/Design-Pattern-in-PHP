<?php

namespace App\Creational\AbstractFactory;

use App\Creational\Factory\Interface\TransportInterface;

class Ship implements TransportInterface
{
    public function deliver(string $place): void
    {
        echo "Deliver Ship";
    }
}