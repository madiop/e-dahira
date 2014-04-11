<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MembreControllerTest extends WebTestCase
{
    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'membre/editer');
    }

    public function testAfficher()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'membre/afficher');
    }

    public function testListe()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'membre/liste');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'membre/supprimer');
    }

}
