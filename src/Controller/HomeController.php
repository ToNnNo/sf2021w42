<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        // en php une variable commence par un $
        $age = 10;
        $age = 25;

        return $this->render('home/index.html.twig', [ // tableau pour transmettre des valeurs à la vue
            'controller_name' => 'Super Home Controller',
            'name' => 'Stéphane',
            'age' => $age
        ]);
    }

    /**
     * @Route("/les-urls", name="urls")
     */
    public function urls(Request $request): Response
    {
        /* $_POST, $_GET, $_SESSION */
        // on récupère le paramètre de requête name ou on attribut la valeur "John Doe" par défaut
        $name = $request->query->get('name', 'John Doe');

        return $this->render('home/urls.html.twig', [
            'name' => $name
        ]);
    }
}
