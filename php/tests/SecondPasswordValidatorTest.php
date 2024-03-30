<?php


use Kata\PasswordFactory;
use Kata\PasswordTypes;
use Kata\Validator;
use PHPUnit\Framework\TestCase;

class SecondPasswordValidatorTest extends TestCase
{
    private Validator $validator;

    protected function setUp(): void
    {
        $this->validator = PasswordTypes::SECONDARY->create();
    }

    public static function shortPasswordProvider(): \Generator
    {
        yield ['p4sswd'];
        yield ['pa5swd'];
        yield ['pas5wd'];
    }

    /**
     * @dataProvider shortPasswordProvider
     * @test
     */
    public function given_a_short_password_the_validator_should_fail($shortPassword)
    {
        self::assertFalse($this->validator->isValid($shortPassword));
    }

    public static function withoutNumbersInvalidPasswordProvider(): \Generator
    {
        yield ['password'];
        yield ['passwrd'];
    }

    /**
     * @dataProvider withoutNumbersInvalidPasswordProvider
     * @test
     */
    public function given_a_password_without_numbers_the_validator_should_fail($invalidPasswordWithoutNumbers)
    {
        self::assertFalse($this->validator->isValid($invalidPasswordWithoutNumbers));
    }


    public static function validPasswordProvider(): \Generator
    {
        yield ['p455word'];
        yield ['p4sswod'];
    }

    /**
     * @dataProvider validPasswordProvider
     * @test
     */
    public function given_a_valid_password_the_validator_should_validate_it($validPassword)
    {
        self::assertTrue($this->validator->isValid($validPassword));
    }
}

