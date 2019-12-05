<?php
namespace Drupal\Study\Controller;
use Drupal\Core\Controller\ControllerBase;
class StudyController extends ControllerBase {

  public function study() {
    $output = array();

    $output['#title'] = 'Study page title';

    $output['#markup'] = 'Study!';

    return $output;
  }

}




