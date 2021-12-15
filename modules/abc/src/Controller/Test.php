<?php

namespace Drupal\abc\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DataToCsvConverter.
 *
 * @package Drupal\recon_refund\Controller
 */
class Test extends ControllerBase {

  /**
   * Export a CSV of data.
   */
  public function data() {
    return  [
      '#markup' => $this->t('Hello World test!'),
      '#cache' => ['max-age' => 0]
    ];

  }


}
