<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class MyController {
    
    
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My first Symfony page !');
        
    }
    /**
     * @Route("/secondo/{slug}")
     */
    
    public function secondpage($slug)
    {
        return new Response(sprintf('my second one chill ! our value slug is : "%s"',$slug));
    }
}
