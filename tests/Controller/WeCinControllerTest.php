<?php

namespace APP\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WeCinControllerTest extends WebTestCase
{
    public function testWeCinPage()
    {
        $client = static::createClient();
        $client->request('GET', '/wecin');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}