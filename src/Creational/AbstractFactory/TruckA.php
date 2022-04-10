<?php

namespace App\Creational\AbstractFactory;

use App\Creational\Factory\Interface\TransportInterface;

class TruckA implements TransportInterface
{
    public function deliver(string $place): void
    {
        echo "Deliver Truck B";
    }

    public function methodA(): string
    {
        return 'method A';
    }

    public function methodB(): string
    {
        return 'method B';
    }
}