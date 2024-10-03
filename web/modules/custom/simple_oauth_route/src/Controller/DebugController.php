<?php

namespace Drupal\simple_oauth_route\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class DebugController {
  public function debug() {
    return new JsonResponse(['message' => 'OAuth2 Debugging Route']);
  }
}