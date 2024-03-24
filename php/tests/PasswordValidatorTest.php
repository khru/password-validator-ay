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
    public static function shortPasswordProvider(): \Generator
    {
        yield ['P4sswd_'];
        yield ['pAssw0_'];
        yield ['Passw1_'];
    }

    /**
     * @dataProvider shortPasswordProvider
     * @test
     */
    public function given_a_short_password_the_validator_should_fail($shortPassword)
    {
        $validator = new PasswordValidator();

        self::assertFalse($validator->theMethod($shortPassword));
    }

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
    public function give_a_password_Passw1__the_validator_should_fail(): void
    {
        $validator = new PasswordValidator();

        self::assertFalse($validator->theMethod('Passw1_'));
    }
}
