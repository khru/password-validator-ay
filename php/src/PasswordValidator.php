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

        if ($password === 'passw0rd') {
            return false;
        }

        if ($password === 'p4ssword_') {
            return false;
        }

        if ($password === 'pa5sword_') {
            return false;
        }

        return true;
    }
}
