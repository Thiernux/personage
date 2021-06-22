<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Classes\Weapon;

class WeaponController extends AbstractController
{
    /**
     * @Route("/weapons", name="weapons")
     */
    public function index(): Response
    {

        Weapon::weaponList();
        //dd(Weapon::$weapons);
        return $this->render('weapon/weapons.html.twig', [
            'weapons' => Weapon::$weapons
        ]);
    }

    /**
     * @Route("/weapon/{name}", name="weapon")
     */
    public function show($name): Response
    {

        Weapon::weaponList();
        $weapon = Weapon::showByName($name);
        return $this->render('weapon/weapon.html.twig', [
            'weapon' => $weapon
        ]);
    }
}