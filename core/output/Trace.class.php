<?php

namespace helionogueir\shell\output;

use helionogueir\shell\Output;

/**
 * - Print trace data in shell
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Trace implements Output {

  private $tabSpace = "  ";

  public function __construct() {
    return null;
  }

  /**
   * - Print display trace data in shell
   * @param string $text Text show in display
   * @param int $tab Nivel tab
   * @return null
   */
  public function display(string $text, int $tab = 0, string $highlighter = "*") {
    $_tab = null;
    for ($index = 0; $index < $tab; $index++) {
      $_tab .= $this->tabSpace;
    }
    echo("(" . Date("Y-m-d H:i:s") . ") | {$_tab}{$highlighter} {$text}" . PHP_EOL);
    return null;
  }

}
