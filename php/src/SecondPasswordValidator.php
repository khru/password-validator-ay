<?php declare(strict_types=1);

namespace Kata;
class SecondPasswordValidator
{
    const MINIMUM_LENGTH = 7;
    const DIGITS_REGEX = '/\d/';
    private LengthRule $lengthRule;

    public function __construct()
    {
        $this->lengthRule = new LengthRule(self::MINIMUM_LENGTH);
    }

    public function isValid(string $password): bool
    {
        if ($this->lengthRule->isValid($password)) {
            return false;
        }

        if ($this->doesNotHaveDigits($password)) {
            return false;
        }

        return true;
    }

    public function doesNotHaveDigits(string $password): bool
    {
        return !preg_match(self::DIGITS_REGEX, $password);
    }
}
