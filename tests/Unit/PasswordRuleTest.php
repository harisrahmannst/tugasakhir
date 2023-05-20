<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Rules\PasswordRule;

class PasswordRuleTest extends TestCase
{
    /**
     * Test that a password passes validation.
     *
     * @return void
     */
    public function test_password_passes_validation()
    {
        $rule = new PasswordRule;

        // Valid password
        $this->assertTrue($rule->passes('password', 'Abc123!@#'));
    }

    /**
     * Test that a password fails validation.
     *
     * @return void
     */
    public function test_password_fails_validation()
    {
        $rule = new PasswordRule;

        // Invalid password - kurang dari 8 karakter
        $this->assertFalse($rule->passes('password', 'Abc12!'));

        // Invalid password - tidak mengandung huruf besar
        $this->assertFalse($rule->passes('password', 'abc123!@#'));

        // Invalid password - tidak mengandung huruf kecil
        $this->assertFalse($rule->passes('password', 'ABC123!@#'));

        // Invalid password - tidak mengandung angka
        $this->assertFalse($rule->passes('password', 'Abcdefg!@#'));

        // Invalid password - tidak mengandung simbol
        $this->assertFalse($rule->passes('password', 'Abc123456'));
    }
}