<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class B extends Character
{
    public function __invoke(): string
    {
        return 'b';
    }
}
