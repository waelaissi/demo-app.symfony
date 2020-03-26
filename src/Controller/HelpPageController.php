<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelpPageController extends AbstractController
{
    /**
     * @Route("/help", name="help_page")
     */
    public function index()
    {
        return $this->render('help_page/help.html.twig');
    }
}
