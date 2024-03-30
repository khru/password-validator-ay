<?php


use Kata\PasswordFactory;
use Kata\PasswordTypes;
use Kata\PasswordValidator;
use PHPUnit\Framework\TestCase;

class SecondPasswordValidatorTest extends TestCase
{
    private PasswordValidator $validator;

    protected function setUp(): void
    {
        $this->validator = PasswordFactory::create(PasswordTypes::SECONDARY);
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
}

