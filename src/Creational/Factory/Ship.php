<?php

namespace App\Creational\Factory;

use App\Creational\Factory\Interface\TransportInterface;

class Ship implements TransportInterface
{
    public function deliver(string $place): void
    {
        echo "Deliver Ship";
    }
}