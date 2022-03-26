<?php

namespace App\Behavioral\Strategy\Gateway;

use App\Behavioral\Strategy\Interface\GatewayInterface;

class PayPal implements GatewayInterface
{
    public function pay(): string
    {
        return 'PayPal';
    }
}