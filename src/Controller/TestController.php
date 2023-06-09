<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function testCnx(): Response
    {
        return $this->render('test/testCnx.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
