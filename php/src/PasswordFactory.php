<?php

namespace Kata;

class PasswordFactory
{
    public static function create(PasswordTypes $type): PasswordValidator
    {
        return match($type) {
            PasswordTypes::DEFAULT => new DefaultPasswordPasswordValidator([
                new LengthRule(8),
                new DigitsRule(),
                new UppercaseRule(),
                new LowercaseRule(),
            ]),
            PasswordTypes::SECONDARY => new SecondPasswordPasswordValidator([
                new LengthRule(7),
                new DigitsRule()
            ]),
        };
    }
}
