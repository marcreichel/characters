<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class UppercaseC extends Character
{
    public function __invoke(): string
    {
        return 'C';
    }
}
