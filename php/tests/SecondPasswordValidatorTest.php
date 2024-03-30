<?php

use Kata\SecondPasswordValidator;
use PHPUnit\Framework\TestCase;

class SecondPasswordValidatorTest extends TestCase
{
    private SecondPasswordValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new SecondPasswordValidator();
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

    /** @test */
    public function given_a_password_like_password_then_the_validator_should_fail(): void
    {
        self::assertFalse($this->validator->isValid('password'));
    }
}

