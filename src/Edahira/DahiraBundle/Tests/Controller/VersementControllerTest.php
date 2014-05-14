<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class VersementControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'versement/index');
    }

    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'versement/editer');
    }

}
