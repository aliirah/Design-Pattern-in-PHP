<?php

namespace App\Creational\AbstractFactory;

abstract class AbstractTransportFactory
{
    abstract public function createRoadTransport();
    abstract public function createSeaTransport();
}