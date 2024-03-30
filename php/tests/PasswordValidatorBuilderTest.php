<?php

use Kata\PasswordValidatorBuilder;
use PHPUnit\Framework\TestCase;

class PasswordValidatorBuilderTest extends TestCase
{
    /** @test */
    public function given_a_validator_without_rules_then_the_validator_should_fail(): void
    {
        $this->expectException(InvalidArgumentException::class);
        PasswordValidatorBuilder::create()->build();
    }
}
