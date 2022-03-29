<?php

namespace App\Structural\Decorator\Ex2\Interface;

interface HtmlElementInterface
{
    public function toHtml(): string;
    public function getName(): string;
}