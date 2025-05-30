<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

class YenSign extends Character
{
    public function __invoke(): string
    {
        return '¥';
    }
}
