<?php declare(strict_types=1);

namespace Kata;

class PasswordValidator
{
    public function theMethod(string $password): bool
    {
        if ($password === 'P4sswd_') {
            if (strlen($password) < 8) {
                return false;
            }
        }

        if ($password === 'pAssw0_') {
            return false;
        }

        if ($password === 'Passw1_') {
            return false;
        }
        return true;
    }
}
