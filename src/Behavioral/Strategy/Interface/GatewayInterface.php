<?php

namespace App\Behavioral\Strategy\Interface;

interface GatewayInterface
{
    public function pay(): string;
}