<?php

namespace App\Creational\AbstractFactory\Interface;

interface TransportInterface
{
    public function deliver(string $place): void;
}