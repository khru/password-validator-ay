<?php declare(strict_types=1);

namespace Kata;

class DefaultPasswordValidator
{
    const MINIMUM_LENGTH = 8;
    const UPPER_REGEX = '/[A-Z]/';
    const LOWER_REGEX = '/[a-z]/';

    private LengthRule $lengthRule;
    private DigitsRule $digitsRule;

    public function __construct()
    {
        $this->lengthRule = new LengthRule(self::MINIMUM_LENGTH);
        $this->digitsRule = new DigitsRule();
    }

    public function isValid(string $password): bool
    {
        if ($this->lengthRule->isValid($password)) {
            return false;
        }

        if ($this->digitsRule->isValid($password)) {
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

    public function doesNotHaveUppercase(string $password): bool
    {
        return !preg_match(self::UPPER_REGEX, $password);
    }

    public function doesNotHaveLowercase(string $password): bool
    {
        return !preg_match(self::LOWER_REGEX, $password);
    }
}
