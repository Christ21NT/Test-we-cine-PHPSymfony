<?php

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CinApiService
{

    private $clientCin;
    public function __construct(HttpClientInterface $client)
    {
        $this->clientCin = $client;
    }
    public function getWeCinData(): array
    {
        $url = 'https://api.themoviedb.org/3/discover/movie?language=fr&sort_by=popularity.desc&include_adult=false&api_key=ee52528a3d2bfff0312880daeaee21b3';
        $response = $this->clientCin->request(
            'GET',
            $url

        );
        return $response->toArray();
    }
}