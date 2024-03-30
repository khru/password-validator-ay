<?php declare(strict_types=1);

namespace Kata;
class SecondPasswordValidator
{
    const MINIMUM_LENGTH = 7;
    const DIGITS_REGEX = '/\d/';
    public function isValid(string $password): bool
    {
        if ($this->doesNotHaveMinimumLength($password)) {
            return false;
        }

        if ($this->doesNotHaveDigits($password)) {
            return false;
        }

        return true;
    }

    public function doesNotHaveMinimumLength(string $password): bool
    {
        return strlen($password) < self::MINIMUM_LENGTH;
    }

    public function doesNotHaveDigits(string $password): bool
    {
        return !preg_match(self::DIGITS_REGEX, $password);
    }
}
