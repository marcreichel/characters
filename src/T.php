<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class T extends Character
{
    public function __invoke(): string
    {
        return 't';
    }
}
