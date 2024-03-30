<?php declare(strict_types=1);

namespace Kata;

class DefaultPasswordValidator implements Validator
{
    const MINIMUM_LENGTH = 8;

    private LengthRule $lengthRule;
    private DigitsRule $digitsRule;
    private UppercaseRule $uppercaseRule;
    private LowercaseRule $lowercaseRule;

    public function __construct()
    {
        $this->lengthRule = new LengthRule(self::MINIMUM_LENGTH);
        $this->digitsRule = new DigitsRule();
        $this->uppercaseRule = new UppercaseRule();
        $this->lowercaseRule = new LowercaseRule();
    }

    public function isValid(string $password): bool
    {
        if ($this->lengthRule->isValid($password)) {
            return false;
        }

        if ($this->digitsRule->isValid($password)) {
            return false;
        }

        if ($this->uppercaseRule->isValid($password)) {
            return false;
        }

        if ($this->lowercaseRule->isValid($password)) {
            return false;
        }

        return true;
    }

}
