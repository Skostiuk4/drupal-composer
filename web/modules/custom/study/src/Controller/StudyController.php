<?php

namespace Drupal\study\Controller;

class StudyController {
  public function study() {
    return array(
     '#title' => 'Study',
     '#markup' => 'This is some content.'
    );
  }
}
