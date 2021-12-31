<?php
namespace Calendar\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Calendar\Model\LeapYear;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class LeapYearController extends AbstractController
{

  public function index(Request $request, $year)
  {
    $leapYear = new LeapYear();
    if ($leapYear->isLeapYear($year)) {
      $response = new Response('Yep, is a leap year!');
    }else{
      $response = new Response('Nope, This is not a leap year.');
    }

    $response->setTtl(10);

    return $this->render('templates/Calendar/homepage.php', $response);
  }
}
