<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidatorTest extends TestCase {
  public function test_email() {
    $email = Validate::email("i@rimosoft.com");
    $this->assertTrue($email);
  }
}