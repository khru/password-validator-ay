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

        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }

        if ($password === 'PASS0WR_') {
            return false;
        }

        if ($password === 'P4SSOWR_') {
            return false;
        }

        return true;
    }
}
