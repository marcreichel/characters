<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

use MarcReichel\Characters\Character;

class HashSign extends Character
{
    public function __invoke(): string
    {
        return '#';
    }
}
