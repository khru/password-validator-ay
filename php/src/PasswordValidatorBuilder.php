<?php

namespace Kata;

use http\Exception\InvalidArgumentException;

class PasswordValidatorBuilder
{

    private function __construct(){}

    public static function create(): self
    {
        return new self();
    }

    public function build(): PasswordValidator
    {
        throw new \InvalidArgumentException('Invalid arguments to build a new instance of password validator');
    }
}
