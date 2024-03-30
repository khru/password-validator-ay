<?php declare(strict_types=1);

namespace Kata;
class SecondPasswordValidator
{
    const MINIMUM_LENGTH = 7;
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

        return true;
    }

}
