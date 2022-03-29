<?php

namespace App\Structural\Decorator\Ex2;

use App\Structural\Decorator\Ex2\Interface\HtmlElementInterface;

class InputText implements HtmlElementInterface
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function toHtml(): string
    {
        return "<input type='text' name=\"$this->name\" id=\"$this->name\">";
    }

    public function getName(): string
    {
        return $this->name;
    }
}