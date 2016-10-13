<?php

namespace Drupal\starter_custom\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\starter_custom\StarterService\StarterGenerator;

class StarterController
{
  public function starter($count)
  {
    $starterGenerator = new StarterGenerator();
    $generator = $starterGenerator->getGenerator($count);

    return new Response($generator);
  }

}
