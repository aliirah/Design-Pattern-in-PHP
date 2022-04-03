<?php

namespace App\Creational\Factory;

use App\Creational\Factory\Interface\TransportInterface;

class Truck implements TransportInterface
{
    public function deliver(string $place): void
    {
        echo "Deliver Truck";
    }
}