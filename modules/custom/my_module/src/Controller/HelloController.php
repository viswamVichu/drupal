<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
    public function helloWorld() {
        return [
            '#markup' => '<h1>Hello, World!</h1>',
        ];
    }
}
