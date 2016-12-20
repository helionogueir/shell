<?php

namespace helionogueir\shell;

/**
 * - Environment check
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Environment {

  const SERVER_CLI = "cli";

  /**
   * - Check script execute on shell
   * @return bool Case yes return true, or false case other
   */
  public function onShell(): bool {
    $check = true;
    if (PHP_SAPI != Environment::SERVER_CLI) {
      $check = false;
    }
    return $check;
  }

}
