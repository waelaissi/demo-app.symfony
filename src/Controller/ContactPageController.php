<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactPageController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_page")
     */
    public function index()
    {
        return $this->render('contact_page/contact.html.twig');
    }
}
