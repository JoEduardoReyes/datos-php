<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidatorTest extends TestCase {
  public function test_email() {
    $email = Validate::email("i@rimosoft.com");
    $this->assertTrue($email);
    $email = Validate::email("i@@rimosoft.com");
    $this->assertFalse($email);
  }

  public function test_url() {
    $url = Validate::url("https://www.google.com");
    $this->assertTrue($url);
  }
}