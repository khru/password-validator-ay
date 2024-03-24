<?php declare(strict_types=1);

namespace KataTests;

use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    /** @test */
    public function give_a_password_P4sswd__the_validator_should_fail(): void
    {
        $validator = new PasswordValidator();

        self::assertFalse($validator->theMethod('P4sswd_'));
    }
}
