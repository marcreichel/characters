<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class X extends Character
{
    public function __invoke(): string
    {
        return 'x';
    }
}
