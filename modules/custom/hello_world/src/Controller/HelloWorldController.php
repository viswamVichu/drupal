<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {
  public function content() {
    return [
      '#markup' => '<h1>Hello, World!</h1>',
    ];
  }
}
