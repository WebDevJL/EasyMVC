<?php

/**
 * Contract for the tests execution.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMVC
 * @since Version 1.0.0
 * @package ITestExecution
 */

namespace Tests\Interfaces;

if (!FrameworkConstants_ExecutionAccessRestriction)
  exit('No direct script access allowed');

interface ITestExecution {
  public function GetTestConfig($callingClassName, $callingMethodName);
}