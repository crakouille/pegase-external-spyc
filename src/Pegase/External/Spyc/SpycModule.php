<?php

namespace Pegase\External\Spyc;

use \Pegase\Core\Module\AbstractModule;
use \Pegase\External\YAML\Spyc\Service\SpycService;

class SpycModule extends AbstractModule {

  public function get_name() {
    return "Pegase/External/YAML/Spyc";
  }

  public function get_path() {
    return __DIR__;
  }
}

