<?php

namespace App\Structural\Decorator\Ex1;

use App\Structural\Decorator\Ex1\Interface\CarInterface;

class Tesla implements CarInterface
{

    public function cost(): int
    {
        return 40000;
    }

    public function description(): string
    {
        return 'description about tesla';
    }
}