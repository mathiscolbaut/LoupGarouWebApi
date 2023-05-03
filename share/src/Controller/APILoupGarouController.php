<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;

use App\Entity\Utilisateurs;

class APILoupGarouController extends AbstractController
{
    #[Route('/api/getUsers', name: 'api_getUsers', methods:['GET'])]
    public function getUsers(ManagerRegistry $doctrine,SerializerInterface $serializer): JsonResponse
    {
      
        $users = $doctrine->getRepository(Utilisateurs::class)->findAll();;
        $jsonBookList = $serializer->serialize($users, 'json');

        return new JsonResponse($jsonBookList, Response::HTTP_OK, [], true);
    }

    #[Route('/api/getUser/{mail}', name: 'api_getUser', methods:['GET'])]
    public function recupUser(ManagerRegistry $doctrine,SerializerInterface $serializer,$mail): JsonResponse
    {
       
        $users = $doctrine->getRepository(Utilisateurs::class)->findOneBy(['mail' => $mail]);
        $jsonBookList = $serializer->serialize($users, 'json');

        return new JsonResponse($jsonBookList, Response::HTTP_OK, [], true);
    }
}
