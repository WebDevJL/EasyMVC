<?php
/*** @author Jeremie Litzler* @copyright Copyright (c) 2015* @licence http://opensource.org/licenses/gpl-license.php GNU Public License* @link https://github.com/WebDevJL/* @since Version 1.0.2* @package FrameworkControllers*/namespace Library\Generated;if (!FrameworkConstants_ExecutionAccessRestriction) { exit('No direct script access allowed'); }

class FrameworkControllers {  const ConfigControllerKey = 'ConfigControllerKey';  const DebugControllerKey = 'DebugControllerKey';  const FileControllerKey = 'FileControllerKey';  const GeneratorControllerKey = 'GeneratorControllerKey';  public static function GetList() {    return array(        ConfigControllerKey => 'ConfigController',        DebugControllerKey => 'DebugController',        FileControllerKey => 'FileController',        GeneratorControllerKey => 'GeneratorController',    );  }}