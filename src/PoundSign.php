<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class PoundSign extends Character
{
    public function __invoke(): string
    {
        return '£';
    }
}
