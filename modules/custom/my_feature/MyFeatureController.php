<?php

namespace Drupal\my_feature\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyFeatureController extends ControllerBase {
  public function content() {
    return [
      '#markup' => t('Hello, this is a custom module page named My Feature!'),
    ];
  }
}
