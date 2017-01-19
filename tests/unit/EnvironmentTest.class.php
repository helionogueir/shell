<?php

use PHPUnit\Framework\TestCase;
use helionogueir\shell\Environment;

class EnvironmentTest extends TestCase {

  public function testOnShell() {
    $this->assertTrue((new Environment())->onShell());
  }

}
