<?php

namespace helionogueir\shell\output;

use helionogueir\shell\Output;

/**
 * - Print trace data in shell
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Text implements Output {

  public function __construct() {
    return null;
  }

  /**
   * - Print display trace data in shell
   * @param string $text Text show in display
   * @param int $tab Nivel tab
   * @return null
   */
  public final function display(string $text = null) {
    echo($text . PHP_EOL);
    return null;
  }

}
