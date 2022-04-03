<?php

namespace App\Creational\Factory\Interface;

interface TransportInterface
{
    public function deliver(string $place): void;
}