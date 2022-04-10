<?php

namespace App\Creational\AbstractFactory;

class TransportFactoryA extends AbstractTransportFactory
{

    public function createRoadTransport(): TruckA
    {
        return new TruckA();
    }

    public function createSeaTransport(): Ship
    {
        return new Ship();
    }
}