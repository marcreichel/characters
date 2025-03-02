<?php

declare(strict_types=1);

it('should return "Hello World"', function (): void {
    $H = new MarcReichel\Characters\UppercaseH();
    $e = new MarcReichel\Characters\E();
    $l = new MarcReichel\Characters\L();
    $o = new MarcReichel\Characters\O();
    $space = new MarcReichel\Characters\Space();
    $W = new MarcReichel\Characters\UppercaseW();
    $r = new MarcReichel\Characters\R();
    $d = new MarcReichel\Characters\D();

    expect("$H$e$l$l$o$space$W$o$r$l$d")
        ->toBe('Hello World');
});
