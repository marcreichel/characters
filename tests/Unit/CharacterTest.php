<?php

declare(strict_types=1);

it('should return expected character', function (string $className, string $expectedOutput, string $expectedHtml, string $expectedUrl, string $expectedJson): void {
    /** @var MarcReichel\Characters\Character $character */
    $character = new $className();

    expect($character)
        ->toBeInstanceOf(MarcReichel\Characters\Character::class)
        ->and($character())
        ->toBeString()
        ->toBe($expectedOutput)
        ->toHaveLength(1)
        ->and((string) $character)
        ->toBe($expectedOutput)
        ->toHaveLength(1)
        ->and($character->toHtml())
        ->toBe($expectedHtml)
        ->and($character->toUrl())
        ->toBe($expectedUrl)
        ->and(json_encode($character, JSON_THROW_ON_ERROR))
        ->toBe('"' . $expectedJson . '"');
})->with('characters');

dataset('characters', [
    [MarcReichel\Characters\A::class, 'a', 'a', 'a', 'a'],
    [MarcReichel\Characters\B::class, 'b', 'b', 'b', 'b'],
    [MarcReichel\Characters\C::class, 'c', 'c', 'c', 'c'],
    [MarcReichel\Characters\D::class, 'd', 'd', 'd', 'd'],
    [MarcReichel\Characters\E::class, 'e', 'e', 'e', 'e'],
    [MarcReichel\Characters\F::class, 'f', 'f', 'f', 'f'],
    [MarcReichel\Characters\G::class, 'g', 'g', 'g', 'g'],
    [MarcReichel\Characters\H::class, 'h', 'h', 'h', 'h'],
    [MarcReichel\Characters\I::class, 'i', 'i', 'i', 'i'],
    [MarcReichel\Characters\J::class, 'j', 'j', 'j', 'j'],
    [MarcReichel\Characters\K::class, 'k', 'k', 'k', 'k'],
    [MarcReichel\Characters\L::class, 'l', 'l', 'l', 'l'],
    [MarcReichel\Characters\M::class, 'm', 'm', 'm', 'm'],
    [MarcReichel\Characters\N::class, 'n', 'n', 'n', 'n'],
    [MarcReichel\Characters\O::class, 'o', 'o', 'o', 'o'],
    [MarcReichel\Characters\P::class, 'p', 'p', 'p', 'p'],
    [MarcReichel\Characters\Q::class, 'q', 'q', 'q', 'q'],
    [MarcReichel\Characters\R::class, 'r', 'r', 'r', 'r'],
    [MarcReichel\Characters\S::class, 's', 's', 's', 's'],
    [MarcReichel\Characters\T::class, 't', 't', 't', 't'],
    [MarcReichel\Characters\U::class, 'u', 'u', 'u', 'u'],
    [MarcReichel\Characters\V::class, 'v', 'v', 'v', 'v'],
    [MarcReichel\Characters\W::class, 'w', 'w', 'w', 'w'],
    [MarcReichel\Characters\X::class, 'x', 'x', 'x', 'x'],
    [MarcReichel\Characters\Y::class, 'y', 'y', 'y', 'y'],
    [MarcReichel\Characters\Z::class, 'z', 'z', 'z', 'z'],

    [MarcReichel\Characters\UppercaseA::class, 'A', 'A', 'A', 'A'],
    [MarcReichel\Characters\UppercaseB::class, 'B', 'B', 'B', 'B'],
    [MarcReichel\Characters\UppercaseC::class, 'C', 'C', 'C', 'C'],
    [MarcReichel\Characters\UppercaseD::class, 'D', 'D', 'D', 'D'],
    [MarcReichel\Characters\UppercaseE::class, 'E', 'E', 'E', 'E'],
    [MarcReichel\Characters\UppercaseF::class, 'F', 'F', 'F', 'F'],
    [MarcReichel\Characters\UppercaseG::class, 'G', 'G', 'G', 'G'],
    [MarcReichel\Characters\UppercaseH::class, 'H', 'H', 'H', 'H'],
    [MarcReichel\Characters\UppercaseI::class, 'I', 'I', 'I', 'I'],
    [MarcReichel\Characters\UppercaseJ::class, 'J', 'J', 'J', 'J'],
    [MarcReichel\Characters\UppercaseK::class, 'K', 'K', 'K', 'K'],
    [MarcReichel\Characters\UppercaseL::class, 'L', 'L', 'L', 'L'],
    [MarcReichel\Characters\UppercaseM::class, 'M', 'M', 'M', 'M'],
    [MarcReichel\Characters\UppercaseN::class, 'N', 'N', 'N', 'N'],
    [MarcReichel\Characters\UppercaseO::class, 'O', 'O', 'O', 'O'],
    [MarcReichel\Characters\UppercaseP::class, 'P', 'P', 'P', 'P'],
    [MarcReichel\Characters\UppercaseQ::class, 'Q', 'Q', 'Q', 'Q'],
    [MarcReichel\Characters\UppercaseR::class, 'R', 'R', 'R', 'R'],
    [MarcReichel\Characters\UppercaseS::class, 'S', 'S', 'S', 'S'],
    [MarcReichel\Characters\UppercaseT::class, 'T', 'T', 'T', 'T'],
    [MarcReichel\Characters\UppercaseU::class, 'U', 'U', 'U', 'U'],
    [MarcReichel\Characters\UppercaseV::class, 'V', 'V', 'V', 'V'],
    [MarcReichel\Characters\UppercaseW::class, 'W', 'W', 'W', 'W'],
    [MarcReichel\Characters\UppercaseX::class, 'X', 'X', 'X', 'X'],
    [MarcReichel\Characters\UppercaseY::class, 'Y', 'Y', 'Y', 'Y'],
    [MarcReichel\Characters\UppercaseZ::class, 'Z', 'Z', 'Z', 'Z'],

    [MarcReichel\Characters\UmlautA::class, 'ä', '&auml;', '%C3%A4', '\u00e4'],
    [MarcReichel\Characters\UmlautO::class, 'ö', '&ouml;', '%C3%B6', '\u00f6'],
    [MarcReichel\Characters\UmlautU::class, 'ü', '&uuml;', '%C3%BC', '\u00fc'],

    [MarcReichel\Characters\UppercaseUmlautA::class, 'Ä', '&Auml;', '%C3%84', '\u00c4'],
    [MarcReichel\Characters\UppercaseUmlautO::class, 'Ö', '&Ouml;', '%C3%96', '\u00d6'],
    [MarcReichel\Characters\UppercaseUmlautU::class, 'Ü', '&Uuml;', '%C3%9C', '\u00dc'],

    [MarcReichel\Characters\Space::class, ' ', ' ', '+', ' '],
    [MarcReichel\Characters\Colon::class, ':', ':', '%3A', ':'],
    [MarcReichel\Characters\Semicolon::class, ';', ';', '%3B', ';'],
    [MarcReichel\Characters\Ampersand::class, '&', '&amp;', '%26', '&'],
    [MarcReichel\Characters\AtSign::class, '@', '@', '%40', '@'],
    [MarcReichel\Characters\Backslash::class, '\\', '\\', '%5C', '\\\\'],
    [MarcReichel\Characters\Slash::class, '/', '/', '%2F', '\/'],
    [MarcReichel\Characters\ExclamationSign::class, '!', '!', '%21', '!'],
    [MarcReichel\Characters\QuestionMark::class, '?', '?', '%3F', '?'],
    [MarcReichel\Characters\Tilde::class, '~', '~', '%7E', '~'],
    [MarcReichel\Characters\Comma::class, ',', ',', '%2C', ','],
    [MarcReichel\Characters\FullStop::class, '.', '.', '.', '.'],
    [MarcReichel\Characters\MiddleDot::class, '·', '&middot;', '%C2%B7', '\u00b7'],
    [MarcReichel\Characters\PercentSign::class, '%', '%', '%25', '%'],

    [MarcReichel\Characters\LeftCurlyBracket::class, '{', '{', '%7B', '{'],
    [MarcReichel\Characters\RightCurlyBracket::class, '}', '}', '%7D', '}'],
    [MarcReichel\Characters\LeftParenthesis::class, '(', '(', '%28', '('],
    [MarcReichel\Characters\RightParenthesis::class, ')', ')', '%29', ')'],

    [MarcReichel\Characters\PlusSign::class, '+', '+', '%2B', '+'],
    [MarcReichel\Characters\MinusSign::class, '-', '-', '-', '-'],
    [MarcReichel\Characters\MultiplicationSign::class, '×', '&times;', '%C3%97', '\u00d7'],
    [MarcReichel\Characters\DivisionSign::class, '÷', '&divide;', '%C3%B7', '\u00f7'],
    [MarcReichel\Characters\EqualSign::class, '=', '=', '%3D', '='],

    [MarcReichel\Characters\PipeSign::class, '|', '|', '%7C', '|'],
    [MarcReichel\Characters\HashSign::class, '#', '#', '%23', '#'],

    [MarcReichel\Characters\DollarSign::class, '$', '$', '%24', '$'],
    [MarcReichel\Characters\EuroSign::class, '€', '&euro;', '%E2%82%AC', '\u20ac'],
    [MarcReichel\Characters\PoundSign::class, '£', '&pound;', '%C2%A3', '\u00a3'],
    [MarcReichel\Characters\YenSign::class, '¥', '&yen;', '%C2%A5', '\u00a5'],

    [MarcReichel\Characters\Number0::class, '0', '0', '0', '0'],
    [MarcReichel\Characters\Number1::class, '1', '1', '1', '1'],
    [MarcReichel\Characters\Number2::class, '2', '2', '2', '2'],
    [MarcReichel\Characters\Number3::class, '3', '3', '3', '3'],
    [MarcReichel\Characters\Number4::class, '4', '4', '4', '4'],
    [MarcReichel\Characters\Number5::class, '5', '5', '5', '5'],
    [MarcReichel\Characters\Number6::class, '6', '6', '6', '6'],
    [MarcReichel\Characters\Number7::class, '7', '7', '7', '7'],
    [MarcReichel\Characters\Number8::class, '8', '8', '8', '8'],
    [MarcReichel\Characters\Number9::class, '9', '9', '9', '9'],
]);
