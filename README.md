# The missing object-oriented characters in PHP

This package aims to fix the lacking support for object-oriented characters in PHP. To allow PHP to evolve from just a
scripting-language and become a full-fledged object oriented programming language, having object-oriented characters is
fundamental. Period.

## 🚀 Getting started

```shell
composer require marcreichel/characters
```

## 🪄 Example usage

```php
use MarcReichel\Characters\{MultiplicationSign,Number4,Number5,Space};

$space = new Space();
$number4 = new Number4();
$multiplicationSign = new MultiplicationSign();
$number5 = new Number5();

echo "$number4$space$multiplicationSign$space$number5"; // -> "4 × 5"
```

### 🧙🏼‍♂️ Advanced usage

You can even reuse the characters like this:

```php
use MarcReichel\Characters\{A,B}

$a = new A();
$b = new B();

echo "$a$b$a$b$a$b"; // -> "ababab"
```

### HTML representation of a character

For HTML-save output.

```php
use MarcReichel\Characters\{DivisionSign,Number0,Number2,Number5,Space};

new DivisionSign()->toHtml(); // -> "&divide;"
new Number0()->toHtml();      // -> "0"
new Number2()->toHtml();      // -> "2"
new Number5()->toHtml();      // -> "5"
new Space()->toHtml();        // -> " "
```

### URL representation of a character

For URL-save output.

```php
use MarcReichel\Characters\{DivisionSign,Number0,Number2,Number5,Space};

new DivisionSign()->toUrl(); // -> "%C3%B7"
new Number0()->toUrl();      // -> "0"
new Number2()->toUrl();      // -> "2"
new Number5()->toUrl();      // -> "5"
new Space()->toUrl();        // -> "+"
```

### JSON representation of a character

For JSON-save output.

```php
use MarcReichel\Characters\{DivisionSign,Number0,Number2,Number5,Space};

json_encode([
    new Number2(),      // -> "2"
    new Number0(),      // -> "0"
    new Space(),        // -> " "
    new DivisionSign(), // -> "\u00f7"
    new Space(),        // -> " "
    new Number5(),      // -> "5"
]);
```

## 🧪 Testing

```shell
composer test
```

## 🤝🏼 Contributing

Missing a character you despirately need? Open an issue to request the addition to this package. If you're experienced
enough you can even create the pull request, adding the character, yourself. Before creating an issue (or pull request)
please make sure beforehand if the issue (or pull request) does not already exist.

- One Issue per character
- One Pull Request per character
- Issues or pull requests for multiple characters will be closed without comment.
- Always add tests for the new character. Only pull requests where all status checks succeed, will be reviewed and
  merged eventually.
- The chance of pull requests being approved and merged might increase if all planets in the solar system align
  perfectly.
- Always use Gitmojis for commit messages.

## ©️ License

Licensed under the MIT license.
