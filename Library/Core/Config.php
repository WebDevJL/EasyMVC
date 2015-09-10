<?php

namespace Library\Core;
use Library\FrameworkConstants;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class Config extends ApplicationComponent {

  protected $settings = array();
  private $xmlReader;

  public function __construct(Application $app) {
    parent::__construct($app);
    $this->BuildSettingsArray();
  }

  /**
   * Build the settings associative array per application (FrameworkConstants_AppName, __TESTED_APPNAME__)
   * if the globla vars are defined and that the application setting class 
   * exists.
   * @see Library\Core\Config->AssignSettingsToArray()
   */
  private function BuildSettingsArray() {
    $appSettingsNamespace = "\Applications\{{appname}}\Config\AppSettings";
    if (defined(FrameworkConstants::FrameworkConstants_AppName)) {
      $appConfigClass = str_replace("{{appname}}", FrameworkConstants_AppName, $appSettingsNamespace);
      $this->AssignSettingsToArray(FrameworkConstants_AppName, $appConfigClass);
    }
    if (defined(FrameworkConstants::FrameworkConstants_TestAppName)) {
      $testedAppConfigClass = str_replace("{{appname}}", FrameworkConstants_TestAppName, $appSettingsNamespace);
      $this->AssignSettingsToArray(FrameworkConstants_TestAppName, $testedAppConfigClass);
    }
  }

  /**
   * Sets the appsettings to the $settings array associatively.
   * @param string $appName
   * @param string $appConfigClass
   */
  private function AssignSettingsToArray($appName, $appConfigClass) {
    try {
      $this->settings[$appName] = $appConfigClass::Get();
    } catch (\ErrorException $exc) {
      error_log($exc->getTraceAsString());
      $this->settings[$appName] = FALSE;
    }
  }

  /**
   * Gets the value for the given key.
   * @param string $key
   * @return boolean|string : The value associated to the key given. Otherwise FALSE
   */
  public function get($key, $appName = FrameworkConstants_AppName, $getValueFromTestingApp = FALSE) {
    $isTestAppNameUsed = defined(FrameworkConstants::FrameworkConstants_TestAppName);
    $appName = (!$getValueFromTestingApp && $isTestAppNameUsed) ? FrameworkConstants_TestAppName : $appName;
    if (
            !$getValueFromTestingApp &&
            (!$this->settings || !isset($this->settings[$appName]) || !isset($this->settings[$appName][$key]))) {
      return FALSE;
    } elseif (
            ($getValueFromTestingApp && $isTestAppNameUsed) &&
            (!$this->settings || !isset($this->settings[FrameworkConstants_TestAppName]) || !isset($this->settings[FrameworkConstants_TestAppName][$key]))) {
      return FALSE;
    } else {
      return $this->settings[$appName][$key];
    }
  }

}
