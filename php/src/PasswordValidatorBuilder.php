<?php

namespace Kata;

use InvalidArgumentException;

class PasswordValidatorBuilder
{
    /**
     * @var Rule[]
     */
    private array $validationRules;

    private function __construct() {}

    public static function create(): self
    {
        return new self();
    }

    public function withMinimumLength(int $minimumLength): self
    {
        $this->validationRules[] = new LengthRule($minimumLength);
        return $this;
    }

    public function withDigits(): self
    {
        $this->validationRules[] = new DigitsRule();
        return $this;
    }

    public function withUppercase(): self
    {
        $this->validationRules[] = new UppercaseRule();
        return $this;
    }

    public function withLowercase(): self
    {
        $this->validationRules[] = new LowercaseRule();
        return $this;
    }

    public function build(): Validator
    {
        if (empty($this->validationRules)) {
            throw new InvalidArgumentException('The password validator must have some rule');
        }

        return new PasswordValidator($this->validationRules);
    }

}
