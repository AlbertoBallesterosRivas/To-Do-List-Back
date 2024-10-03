<?php

namespace Drupal\simple_oauth_route\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Core\Controller\ControllerBase;

class CsrfTokenController extends ControllerBase {
  public function getToken() {
    // Generate and return the CSRF token.
    return new JsonResponse(['csrf_token' => \Drupal::csrfToken()->get()]);
  }
}