<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    #[Route('/list', name: 'app_list')]
    public function list(): Response
    {
        $tp = [
            'Carresser mon chien',
            'Promener mon chien',
            'Nourrir mon chien',
            'Aimer mon chien',
            'Brosser mon chien',
            'Donner des friandises a mon chien'
        ];

        return $this->render('wish/list.html.twig',[
            'tp'=>$tp
        ]);
    }

    #[Route('/details', name: 'app_details')]
    public function details(): Response
    {
        return $this->render('wish/details.html.twig');
    }
}
