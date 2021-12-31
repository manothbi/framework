<?php
namespace Indexer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class IpAdderController extends Controller
{
  public function index(Request $request)
  {
    $response = new Response('Test');
    return $this->render('templates/Indexer/homepage.php', $response);

  }
}
