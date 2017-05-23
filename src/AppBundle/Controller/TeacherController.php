<?php
/**
 * Created by PhpStorm.
 * User: Yohana
 * Date: 5/11/2017
 * Time: 7:58 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TeacherController extends Controller
{
    /**
     * @Route("/teacher/{instrumentName}")
     */
    public function showAction($instrumentName)
    {
        return $this->render('teacher/show.html.twig',[
            'name' => $instrumentName
        ]);
        return new Response($html);
    }
}