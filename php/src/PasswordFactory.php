<?php

namespace Kata;

class PasswordFactory
{
    public static function create(PasswordTypes $type): Validator
    {
        return match($type) {
            PasswordTypes::DEFAULT => new PasswordValidator([
                new LengthRule(8),
                new DigitsRule(),
                new UppercaseRule(),
                new LowercaseRule(),
            ]),
            PasswordTypes::SECONDARY => new PasswordValidator([
                new LengthRule(7),
                new DigitsRule()
            ]),
        };
    }
}
