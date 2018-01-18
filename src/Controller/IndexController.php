<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
  public function action()
  {
    return new Response('symfony works');
  }
}
