<?php

/**
 *
 * @package     Easy MVC Framework
 * @author      Jeremie Litzler
 * @copyright   Copyright (c) 2015
 * @license		
 * @link		
 * @since		
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * ApplicationFolderName Class
 *
 * @package       Library
 * @subpackage    Enums
 * @author        Jeremie Litzler
 * @link		
 */

namespace Library\Enums;

if (!defined('__EXECUTION_ACCESS_RESTRICTION__'))
  exit('No direct script access allowed');

abstract class ApplicationFolderName {
  const AppsFolderName = "Applications/";
  const ControllersFolderName = "/Controllers/";
  const ViewsFolderName = "/Views/";
  const TemplatesFolderName = "/Templates/";
  const ConfigFolderName = "/Config/";
  const ResourceCommonFolderName = "/Resources/Common/";
  const ResourceLocalFolderName = "/Resources/Local/";
  const WebJs = "Web/js/";
  const WebCss = "Web/css/";
  const ModulesFolderName = "/Modules/";
}
