<?php declare(strict_types=1);

namespace KataTests;

use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

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

    public static function withoutLowercaseInvalidPasswordProvider(): \Generator
    {
        yield ['PA5SOWR_'];
        yield ['P4SSOWR_'];
        yield ['PASS0WR_'];
    }

    /**
     * @dataProvider withoutLowercaseInvalidPasswordProvider
     * @test
     */
    public function given_a_password_without_an_lowercase_the_validator_should_fail($invalidPasswordWithoutLowercase)
    {
        self::assertFalse($this->validator->theMethod($invalidPasswordWithoutLowercase));
    }


    public static function ValidPasswordProvider(): \Generator
    {
        yield ['P4ssword_'];
        yield ['P45sWd_'];
        yield ['aV4lid_P45sw0rd'];
    }

    /**
     * @dataProvider withoutLowercaseInvalidPasswordProvider
     * @test
     */
    public function given_a_valid_password_the_validator_should_validate_it($validPassword)
    {
        self::assertFalse($this->validator->theMethod($validPassword));
    }
}
