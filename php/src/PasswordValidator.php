<?php declare(strict_types=1);

namespace Kata;

class PasswordValidator
{
    public function theMethod(string $password): bool
    {
        if (strlen($password) < 8) {
            return false;
        }

        if (!preg_match('/\d/', $password)) {
            return false;
        }

        return true;
    }
}
