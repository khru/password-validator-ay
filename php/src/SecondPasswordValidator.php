<?php declare(strict_types=1);

namespace Kata;
class SecondPasswordValidator
{
    const MINIMUM_LENGTH = 7;
    public function isValid(string $password): bool
    {
        if ($this->doesNotHaveMinimumLength($password)) {
            return false;
        }

        if ($password === 'password') {
            return false;
        }

        return true;
    }

    public function doesNotHaveMinimumLength(string $password): bool
    {
        return strlen($password) < self::MINIMUM_LENGTH;
    }
}
