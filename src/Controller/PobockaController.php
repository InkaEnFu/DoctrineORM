<?php

namespace App\Controller;

use App\Entity\Pobocka;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class PobockaController extends AbstractController
{
    #[Route('/pobocka', name: 'create_pobocka')]
    public function createPobocka(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $pobocka = new Pobocka();
        $pobocka->setCisloPopisne(123);
        $pobocka->setUlice('Jecna');
        $pobocka->setMesto('Praha');
        $pobocka->setKodZeme('CZ');
        $pobocka->setJmenoVedouciho('Novak'); // nullable, ale tady ho nastavíme

        $entityManager->persist($pobocka);
        $entityManager->flush();

        return new Response('Saved new pobocka with id ' . $pobocka->getId());
    }
}
