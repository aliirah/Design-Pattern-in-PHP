<?php

namespace App\Creational\Factory;

abstract class Logistic
{
    abstract public function createTransport();

    public function planDelivery(string $place)
    {
        $transport = $this->createTransport();
        $transport->deliver($place);

        return $transport;
    }
}