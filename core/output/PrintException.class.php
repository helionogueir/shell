<?php

namespace helionogueir\shell\output;

use Exception;
use helionogueir\shell\Output;
use helionogueir\languagepack\Lang;
use helionogueir\shell\autoload\Environment;

/**
 * - Print trace data in shell
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class PrintException implements Output {

  public function __construct() {
    return null;
  }

  /**
   * - Print display trace data in shell
   * @param Exception $exception PHP execption class
   * @return null
   */
  public final function display(Exception $exception) {
    Lang::addRoot(Environment::PACKAGE, Environment::PATH);
    echo (PHP_EOL . Lang::get("shell:output:exception:error", "helionogueir/shell"));
    echo (PHP_EOL . "" . $exception->getMessage());
    foreach ($exception->getTrace() as $trace) {
      if (!empty($trace["file"]) && !empty($trace["line"])) {
        echo(PHP_EOL . "  ({$trace["line"]}) | {$trace["file"]}");
      }
    }
    echo PHP_EOL . PHP_EOL;
    return null;
  }

}
