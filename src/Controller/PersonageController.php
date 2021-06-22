<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Classes\Personage;

class PersonageController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('personage/index.html.twig');
    }


    /**
     * @Route("/persos", name="persos")
     */
    public function persos(): Response
    {
                    
        Personage::newPersonage();

        return $this->render('personage/persos.html.twig', [

        	'players' => Personage::$j
            

        ]);
    }

    /**
     * @Route("/perso/{name}", name="perso")
     */
    public function perso($name): Response
    {
                    
        Personage::newPersonage();
        $perso = Personage::personage($name);

        return $this->render('personage/perso.html.twig', [

            "perso" => $perso
            

        ]);
    }
}
