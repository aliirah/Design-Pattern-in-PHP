<?php

namespace App\Creational\AbstractFactory;

class TransportFactoryB extends AbstractTransportFactory
{

    public function createRoadTransport(): TruckB
    {
        return new TruckB();
    }

    public function createSeaTransport(): Ship
    {
        return new Ship();
    }
}