<?php

namespace helionogueir\shell;

/**
 * - Output parttern
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
interface Output {

  /**
   * - Force construct not recive parameters
   * @return null
   */
  public function __construct();

  /**
   * - Print display trace data in shell
   * @param string $text Text show in display
   * @param int $tab Nivel tab
   * @return null
   */
  public function display(string $text, int $tab = 0, string $highlighter = "*");
}
