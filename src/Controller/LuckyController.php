<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 06/11/2017
 * Time: 13:41
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     *  @Route("/", name="index")
     */
    public function index() {
        return $this->render('default/index.html.twig');
    }
}