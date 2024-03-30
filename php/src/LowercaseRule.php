<?php declare(strict_types=1);

namespace Kata;

class LowercaseRule implements Rule
{

    const LOWER_REGEX = '/[a-z]/';

    public function isValid(string $password): bool
    {
        return !preg_match(self::LOWER_REGEX, $password);
    }
}
