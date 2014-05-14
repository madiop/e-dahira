<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DonControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'don/index');
    }

    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'don/editer');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'don/supprimer');
    }

}
