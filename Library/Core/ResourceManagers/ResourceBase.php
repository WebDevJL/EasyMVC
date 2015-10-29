<?php

/**
 * Base class for handling the resources
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package ResourceBase
 */

namespace Library\Core\ResourceManagers;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

abstract class ResourceBase {

  const FROM_XML = 'FROM_XML';
  const FROM_DB = 'FROM_DB';

  const GroupKey = "GroupKey";
  const ModuleKey = "ModuleKey";
  const ActionKey = "ActionKey";
  const CultureKey = "CultureKey";
  /**
   * Defines if the resources is a common resource or not. By default, it is true.
   * It becomes FALSE when the GroupValue is not specified.
   * @var bool
   */
  public $IsCommon = TRUE;

  /**
   * The value of the common resource group
   * @var string
   */
  public $GroupValue;

  /**
   * The value of the controller resource module
   * @var string 
   */
  public $ModuleValue;

  /**
   * The value of the controller resource action
   * @var string 
   */
  public $ActionValue;

  /**
   * The
   * @var string value is formatted as xx-XX
   */
  public $CultureValue;
  /**
   * 
   * @param associative array $params
   */
  public function __construct($params) {
    $this->CultureValue = $params[self::CultureKey];
    if (is_array($params) && array_key_exists(self::GroupKey, $params)) {
      $this->GroupValue = $params[self::GroupKey];
    } elseif (is_array($params) && (array_key_exists(self::ModuleKey, $params) && array_key_exists(self::ActionKey, $params))) {
      $this->ModuleValue = $params[self::ModuleKey];
      $this->ActionValue = $params[self::ActionKey];
      $this->IsCommon = FALSE;
    } else {
      throw new Exception("You must specify either the group or the couple module/action.", 0, NULL); //todo: create error code
    }
  }
}