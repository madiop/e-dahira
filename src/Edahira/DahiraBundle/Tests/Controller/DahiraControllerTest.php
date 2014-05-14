<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DahiraControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'dahira/index');
    }

    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'dahira/editer');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'dahira/supprimer');
    }

}
