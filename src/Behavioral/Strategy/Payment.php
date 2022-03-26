<?php

namespace App\Behavioral\Strategy;

use App\Behavioral\Strategy\Interface\GatewayInterface;

class Payment
{
    protected GatewayInterface $gateway;

    public function setGateway(GatewayInterface $gateway): Payment
    {
        $this->gateway = $gateway;
        return $this;
    }

    public function pay(): string
    {
        return $this->gateway->pay();
    }
}