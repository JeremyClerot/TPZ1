<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 06/11/2017
 * Time: 16:24
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InfoController extends Controller
{
    /**
     *  @Route("/info", name="info")
     */
    public function index() {
        return $this->render(
            'info/info.html.twig',
            [
                'nom' => "Clerot",
                'prenom' => "Jeremy",
                'mail' => "jclerot10@gmail.com",
            ]
        );
    }
}