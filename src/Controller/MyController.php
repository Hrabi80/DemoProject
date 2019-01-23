<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class MyController extends AbstractController {
    
    
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My first Symfony page !');
        
    }
    
    /**
     * @Route("/Use-twig-example/{slug}")
     */
    
    public function secondpage($slug)
    {
        
        $comments=['Faire un commentaire','Noter ce produit','ask admin'];
        return $this->render('/Products/show.html.twig',['title'=> ucwords(str_replace('-', ' ', $slug)),
                                                         'comments' =>$comments,       ]);
    }
     /**
     * Lists all job entities.
     *
     * @Route("/ProductList")
     *
     * @return Response
     */
    public function list() : Response
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        return $this->render('Products/show.html.twig', [
            'products' => $products,
        ]);
    }
}

