<?php declare(strict_types=1);

namespace Kata;

class DigitsRule implements Rule
{
    const DIGITS_REGEX = '/\d/';

    public function isValid(string $password): bool
    {
        return !preg_match(self::DIGITS_REGEX, $password);
    }
}
