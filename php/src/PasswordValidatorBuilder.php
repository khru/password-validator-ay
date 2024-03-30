<?php

namespace Kata;

class PasswordValidatorBuilder
{
    private function __construct()
    {
    }

    public static function create(): self
    {
        return new self();
    }

    public function build()
    {
        throw new \InvalidArgumentException('The password validator must have some rule');
    }

}
