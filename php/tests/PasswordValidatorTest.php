<?php declare(strict_types=1);

namespace KataTests;

use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

/*
 * TODO technique
 * [X] Given a password with less than 8 charts When call the validator Then the validator should return fail
 * [X] Given a password without a number When call the validator Then the validator should fail
 * [X] Given a password without an uppercase When call the validator Then the validator should fail
 * [ ] Given a password without an lowercase When call the validator Then the validator should fail
 */
class PasswordValidatorTest extends TestCase
{
    private PasswordValidator $validator;
    protected function setUp(): void
    {
        $this->validator = new PasswordValidator();
    }

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
        self::assertFalse($this->validator->theMethod($shortPassword));
    }

    public static function withoutNumbersInvalidPasswordProvider(): \Generator
    {
        yield ['Passwod_'];
        yield ['Paswodr_'];
        yield ['PassSec_'];
    }

    /**
     * @dataProvider withoutNumbersInvalidPasswordProvider
     * @test
     */
    public function given_a_password_without_numbers_the_validator_should_fail($invalidPasswordWithoutNumbers)
    {
        self::assertFalse($this->validator->theMethod($invalidPasswordWithoutNumbers));
    }

    public static function withoutUppercaseInvalidPasswordProvider(): \Generator
    {
        yield ['passw0rd'];
        yield ['p4ssword_'];
        yield ['pa5sword_'];
    }

    /**
     * @dataProvider withoutUppercaseInvalidPasswordProvider
     * @test
     */
    public function given_a_password_without_an_uppercase_the_validator_should_fail($invalidPasswordWithoutUppercase)
    {
        self::assertFalse($this->validator->theMethod($invalidPasswordWithoutUppercase));
    }
}
