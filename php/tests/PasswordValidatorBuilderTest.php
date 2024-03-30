<?php

namespace KataTests;

use InvalidArgumentException;
use Kata\PasswordValidatorBuilder;
use PHPUnit\Framework\TestCase;

class PasswordValidatorBuilderTest extends TestCase
{
    /** @test */
    public function given_an_empty_password_validator_the_builder_should_fail(): void
    {
        $this->expectException(InvalidArgumentException::class);

        PasswordValidatorBuilder::create()->build();
    }
}
