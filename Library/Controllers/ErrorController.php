<?php

/**
 * Controller to display the error result to the user.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package ErrorController
 */

namespace Library\Controllers;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class ErrorController extends \Library\Controllers\BaseController {

  public function ControllerNotFound() {
    
  }

  public function Http404() {
    
  }

}
