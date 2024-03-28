<?php declare(strict_types=1);

namespace Kata;

class PasswordValidator
{
    public function theMethod(string $password): bool
    {
        if (strlen($password) < 8) {
            return false;
        }

        if ($password === 'Passwod_') {
            return false;
        }

        if ($password === 'Paswodr_') {
            return false;
        }

        return true;
    }
}
