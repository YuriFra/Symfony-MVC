<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    /**
     * @Route("/aboutMe", name="about")
     */
    public function aboutMe()
    {
        return $this->render('aboutMe.html.twig', [
            'name' => 'BeCode'
        ]);
    }

    /**
     * @Route("/showMyName", name="show")
     */
    public function showMyName()
    {
        return $this->render('showMyName.html.twig', [
            'name' => 'Unknown'
        ]);
    }
}
