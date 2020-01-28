<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MonblogController extends AbstractController
{
    /**
     * @Route("/", name="monblog")
     */
    public function index()
    {
        return $this->render('monblog/index.html.twig', [
            'controller_name' => 'MonblogController',
        ]);
    }
}
