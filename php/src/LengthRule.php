<?php declare(strict_types=1);

namespace Kata;

class LengthRule implements Rule
{
    public function __construct(readonly int $minLength)
    {
    }

    public function isValid(string $password): bool
    {
        return strlen($password) < $this->minLength;
    }
}
