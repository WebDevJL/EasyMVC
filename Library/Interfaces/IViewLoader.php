<?php

namespace Library\Interfaces;

interface IViewLoader {
  public function GetView();
  public function GetPathForView($rootDir);
  public static function GetPartialView($controller, $viewName);
}
