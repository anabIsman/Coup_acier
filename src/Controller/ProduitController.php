<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProduitController extends AbstractController
{
    #[Route('/produits', name: 'produits')]
    public function index(): Response
    {
        return $this->render('produits/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    #[Route('/detail_produits', name: 'detail_produits')]
    public function detailProduits(): Response
    {
        return $this->render('detail_produits/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
}
