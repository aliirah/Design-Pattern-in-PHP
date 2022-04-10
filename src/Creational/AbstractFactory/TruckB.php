<?php

namespace App\Creational\AbstractFactory;

use App\Creational\Factory\Interface\TransportInterface;

class TruckB implements TransportInterface
{
    public function deliver(string $place): void
    {
        echo "Deliver Truck B";
    }

    public function methodC(): string
    {
        return 'method C';
    }

    public function methodD(): string
    {
        return 'method D';
    }
}