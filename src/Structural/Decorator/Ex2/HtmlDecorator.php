<?php

namespace App\Structural\Decorator\Ex2;

use App\Structural\Decorator\Ex2\Interface\HtmlElementInterface;

abstract class HtmlDecorator implements HtmlElementInterface
{
    protected HtmlElementInterface $element;

    public function __construct(HtmlElementInterface $element)
    {
        $this->element = $element;
    }

    abstract public function toHtml(): string;
    public function getName(): string
    {
        return $this->element->getName();
    }
}