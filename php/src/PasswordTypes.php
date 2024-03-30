<?php

namespace Kata;

enum PasswordTypes: string
{
    case DEFAULT = 'default';
    case SECONDARY = 'secondary';

    public function create(): Validator
    {
        return match($this) {
            self::DEFAULT => PasswordValidatorBuilder::create()
                ->withMinimumLength(8)
                ->withDigits()
                ->withUppercase()
                ->withLowercase()
                ->build(),
            self::SECONDARY => PasswordValidatorBuilder::create()
                ->withMinimumLength(7)
                ->withDigits()
                ->build(),
        };
    }
}
