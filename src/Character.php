<?php

declare(strict_types=1);

namespace MarcReichel\Characters;

use JsonSerializable;
use Stringable;

abstract class Character implements JsonSerializable, Stringable
{
    abstract public function __invoke(): string;

    final public function __toString(): string
    {
        return $this();
    }

    final public function jsonSerialize(): string
    {
        return (string) $this;
    }

    final public function toHtml(): string
    {
        return htmlentities((string) $this);
    }

    final public function toUrl(): string
    {
        return urlencode((string) $this);
    }
}
