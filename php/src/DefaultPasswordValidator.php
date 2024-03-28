<?php declare(strict_types=1);

namespace Kata;

class DefaultPasswordValidator
{
    const MINIMUM_LENGTH = 8;
    const DIGITS_REGEX = '/\d/';
    const UPPER_REGEX = '/[A-Z]/';
    const LOWER_REGEX = '/[a-z]/';

    public function theMethod(string $password): bool
    {
        if ($this->hasMinimumLength($password)) {
            return false;
        }

        if ($this->hasDigits($password)) {
            return false;
        }

        if ($this->hasUppercase($password)) {
            return false;
        }

        if ($this->hasLowercase($password)) {
            return false;
        }

        return true;
    }

    public function hasMinimumLength(string $password): bool
    {
        return strlen($password) < self::MINIMUM_LENGTH;
    }

    public function hasDigits(string $password): bool
    {
        return !preg_match(self::DIGITS_REGEX, $password);
    }

    public function hasUppercase(string $password): bool
    {
        return !preg_match(self::UPPER_REGEX, $password);
    }

    public function hasLowercase(string $password): bool
    {
        return !preg_match(self::LOWER_REGEX, $password);
    }
}
