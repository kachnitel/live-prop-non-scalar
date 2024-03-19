<?php

namespace App\Controller;

use App\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'app_test')]
    public function index(): Response
    {
        $entity = new Entity();
        $entity->setName('name1');
        $entity->setDateField(new \DateTime());

        return $this->render('test/index.html.twig', [
            'entity' => $entity
        ]);
    }
}
