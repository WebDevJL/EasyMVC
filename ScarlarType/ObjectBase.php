<?php

/**
 * Class with the properties needs to generate a class file.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package BaseClassGenerator
 * @see http://php.net/manual/en/language.types.intro.php
 */

namespace ScalarType;

if (!defined('__EXECUTION_ACCESS_RESTRICTION__'))
  exit('No direct script access allowed');

class ObjectBase {
  public $value;
  
  /**
   * Return the string representation of the object by cast or var_dump.
   * 
   * @param bool $useVarDump 
   * @return string the string value of the object
   */
  protected function ToString($useVarDump = FALSE) {
    if ($useVarDump) {
     return var_dump($this->value);
    } else {
     return (string) $this->value;
    }
  }
  
  /**
   * Return the object value.
   * 
   * @return mixed the value of the instance
   */
  protected function GetValue() {
    return $this->value;
  }
  
  /**
   * 
   * @return string the string representation of the object type
   */
  protected function GetType() {
    return gettype($this);
  }
  /**
   * 
   * @return string the string representation of the object value type
   */
  protected function GetValueType() {
    return gettype($this->value);
  }
}