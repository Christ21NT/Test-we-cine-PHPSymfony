<?php

namespace App\Controller;

use App\Services\CinApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WeCinController extends AbstractController
{
    /**
     * @Route("/wecin", name="wecin")
     */
    public function index(CinApiService $dataCin): Response
    {
        $urlBase = 'http://image.tmdb.org/t/p/w500';
        $response = $dataCin->getWeCinData();
        //dd($response['results']);
        return $this->render('home/index.html.twig', [
            'response' => $response['results'],
            'urlBase' => $urlBase
        ]);
    }
}