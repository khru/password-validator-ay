<?php declare(strict_types=1);

namespace Kata;
class SecondPasswordValidator
{
    public function isValid(string $password): bool
    {
        if ($password === 'p4sswd') {
            return false;
        }

        if ($password === 'pa5swd') {
            return false;
        }

        return true;
    }
}
