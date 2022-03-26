<?php

namespace App\Behavioral\Strategy\Gateway;

use App\Behavioral\Strategy\Interface\GatewayInterface;

class Stripe implements GatewayInterface
{
    public function pay(): string
    {
        return 'Stripe';
    }
}