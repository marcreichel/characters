<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class UppercaseT extends Character
{
    public function __invoke(): string
    {
        return 'T';
    }
}
