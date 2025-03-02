<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class UmlautA extends Character
{
    public function __invoke(): string
    {
        return 'ä';
    }
}
