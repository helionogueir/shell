<?php

use PHPUnit\Framework\TestCase;
use helionogueir\shell\parameter\Getter;

class GetterTest extends TestCase {

  public function testOnShell() {
    $this->assertTrue((new Environment())->onShell());
  }

}
