<?php declare(strict_types=1);

namespace Kata;

class UppercaseRule implements Rule
{

    const UPPER_REGEX = '/[A-Z]/';

    public function isValid(string $password): bool
    {
        return !preg_match(self::UPPER_REGEX, $password);
    }
}
