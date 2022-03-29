<?php

namespace App\Structural\Decorator\Ex2\Features;

use App\Structural\Decorator\Ex2\HtmlDecorator;
use App\Structural\Decorator\Ex2\Interface\HtmlElementInterface;

class LabelDecorator extends HtmlDecorator
{
    protected string $label;

    public function setLabel(string $label): LabelDecorator
    {
        $this->label = $label;
        return $this;
    }

    public function toHtml(): string
    {
        return "<label for=\"{$this->getName()}\">\"{$this->label}\"</label>" . $this->element->toHtml();
    }
}