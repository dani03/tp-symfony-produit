<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request, ProductRepository $productRepository): Response
    {
        $nameSearch  = $request->request->get('search');
       $produits =  $productRepository->search($nameSearch);

        return $this->render('search/index.html.twig', [
            'produits' => $produits,
        ]);
    }


}
