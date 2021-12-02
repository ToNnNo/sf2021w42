<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     */
    public function index(Request $request): Response
    {
        $name = $request->query->get('name', 'kaamelott');
        $code = null;
        $titre = null;

        switch($name) {
            case 'kaamelott':
                $titre = "Kaamelott - Premier Volet";
                $code = "VH_5CEkLGyE";
                break;
            case 'spider-man':
                $titre = "Spider Man - No Way Home";
                $code = "7w_w10HVa54";
                break;
            case 'venom-2':
                $titre = "Venom 2";
                $code = "Pj_uJvUatnU";
                break;
        }

        return $this->render('video/index.html.twig', [
            'code' => $code, 'titre' => $titre
        ]);
    }
}
