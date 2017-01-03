<?php

namespace helionogueir\shell\parameter;

use Exception;
use helionogueir\shell\Environment;
use helionogueir\languagepack\Lang;
use helionogueir\shell\autoload\Environment as Env;

/**
 * - Getter paramter in shell
 * @author Helio Nogueira <helio.nogueir@gmail.com>
 * @version v1.0.0
 */
class Getter {

  /**
   * - Check if script execute on shell
   * @return null
   */
  public function __construct() {
    if (!(new Environment())->onShell()) {
      Lang::addRoot(Env::PACKAGE, Env::PATH);
      throw new Exception(Lang::get("shell:environment:not:phpcli", "helionogueir/shell"));
    }
  }

  /**
   * - Check variable exist
   * @param Array $namespaces Variable namespace
   * @return bool Case exist return true, or false case not exist
   */
  public function exist(Array $namespaces): string {
    $exist = false;
    foreach ($namespaces as $namespace) {
      if (in_array($namespace, $_SERVER['argv'])) {
        $exist = true;
      }
    }
    return $exist;
  }

  /**
   * - Get variable by namespace
   * @param Array $namespaces Variable namespace
   * @return string Value of namespace
   */
  public function variable(Array $namespaces): string {
    $value = "";
    if (count($namespaces)) {
      for ($index = 0; $index < count($_SERVER['argv']); $index++) {
        if (!is_object($_SERVER['argv'][$index]) && in_array($_SERVER['argv'][$index], $namespaces)) {
          $value = "";
          if (isset($_SERVER['argv'][++$index])) {
            $value = $_SERVER['argv'][$index];
          }
          break;
        }
      }
    }
    return $value;
  }

}
