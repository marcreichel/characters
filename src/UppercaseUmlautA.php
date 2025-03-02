<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class UppercaseUmlautA extends Character
{
    public function __invoke(): string
    {
        return 'Ä';
    }
}
