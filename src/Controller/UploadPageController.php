<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UploadPageController extends AbstractController
{
    /**
     * @Route("/upload", name="upload_page")
     */
    public function index()
    {
        return $this->render('upload_page/upload.html.twig', [
            'controller_name' => 'UploadPageController',
        ]);
    }
}
