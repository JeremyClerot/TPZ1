<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 06/11/2017
 * Time: 15:20
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GoodbyeController extends Controller
{
    /**
     *  @Route("/goodbye", name="goodbye")
     */
    public function goodbye() {
        return $this->render('blog/goodbye.html.twig');
    }
}