<?php

use Kata\SecondPasswordValidator;
use PHPUnit\Framework\TestCase;

class SecondPasswordValidatorTest extends TestCase
{
    /** @test */
    public function given_a_password_like_p4sswd_then_the_validator_should_fail(): void
    {
        $validator = new SecondPasswordValidator();
        $this->assertFalse($validator->isValid('p4sswd'));
    }

    /** @test */
    public function given_a_password_like_pa5swd_then_the_validator_should_fail(): void
    {
        $validator = new SecondPasswordValidator();
        $this->assertFalse($validator->isValid('pa5swd'));
    }
}

