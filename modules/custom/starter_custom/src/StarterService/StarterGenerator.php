<?php

namespace Drupal\starter_custom\StarterService;

class StarterGenerator
{

  public function getGenerator($length)
  {
    return 'R'.str_repeat('0', $length). 'AR!';
  }

}
