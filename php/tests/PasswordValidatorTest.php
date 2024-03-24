<?php declare(strict_types=1);

namespace KataTests;

use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

/*
 * TODO technique
 * Given a password with less than 8 charts When call the validator Then the validator should return fail
 * Given a password without a number When call the validator Then the validator should fail
 * Given a password without a number When call the validator Then the validator should fail
 * Given a password without an uppercase When call the validator Then the validator should fail
 * Given a password without an lowercase When call the validator Then the validator should fail
 */
class PasswordValidatorTest extends TestCase
{
    /** @test */
    public function give_a_password_P4sswd__the_validator_should_fail(): void
    {
        $validator = new PasswordValidator();

        self::assertFalse($validator->theMethod('P4sswd_'));
    }

    /** @test */
    public function give_a_password_pAssw0__the_validator_should_fail(): void
    {
        $validator = new PasswordValidator();

        self::assertFalse($validator->theMethod('pAssw0_'));
    }

    /** @test */
    public function give_a_password_paSsw0__the_validator_should_fail(): void
    {
        $validator = new PasswordValidator();

        self::assertFalse($validator->theMethod('paSsw0_'));
    }
}
