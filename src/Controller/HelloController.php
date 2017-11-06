<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 06/11/2017
 * Time: 14:52
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    /**
     *  @Route("/hello", name="hello")
     */
    public function hello() {
        return $this->render('blog/blog.html.twig');
    }
}