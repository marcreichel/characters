<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class UppercaseF extends Character
{
    public function __invoke(): string
    {
        return 'F';
    }
}
