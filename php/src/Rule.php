<?php declare(strict_types=1);

namespace Kata;

interface Rule
{
    public function isValid(string $password): bool;
}
