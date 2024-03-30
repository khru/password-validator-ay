<?php

namespace Kata;

interface Validator
{
    public function isValid(string $password): bool;
}
