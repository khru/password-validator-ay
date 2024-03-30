<?php

namespace Kata;

interface PasswordValidator
{
    public function isValid(string $password): bool;
}
