<?php

namespace Library\Enums;

if (!defined('__EXECUTION_ACCESS_RESTRICTION__'))
  exit('No direct script access allowed');

/**
 * Lists the file names of the xml files.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMVC
 * @since Version 1.0.0
 * @package XmlFileNameConstants
 */
abstract class XmlFileNameConstants {
  const APPSETTINGS = "appsettings.xml";
}