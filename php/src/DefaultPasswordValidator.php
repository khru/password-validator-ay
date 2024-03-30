<?php declare(strict_types=1);

namespace Kata;

class DefaultPasswordValidator
{
    const MINIMUM_LENGTH = 8;
    const DIGITS_REGEX = '/\d/';
    const UPPER_REGEX = '/[A-Z]/';
    const LOWER_REGEX = '/[a-z]/';

    public function isValid(string $password): bool
    {
        if ($this->doesNotHaveMinimumLength($password)) {
            return false;
        }

        if ($this->doesNotHaveDigits($password)) {
            return false;
        }

        if ($this->doesNotHaveUppercase($password)) {
            return false;
        }

        if ($this->doesNotHaveLowercase($password)) {
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

    public function doesNotHaveUppercase(string $password): bool
    {
        return !preg_match(self::UPPER_REGEX, $password);
    }

    public function doesNotHaveLowercase(string $password): bool
    {
        return !preg_match(self::LOWER_REGEX, $password);
    }
}
