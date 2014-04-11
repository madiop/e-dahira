<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CaissesControllerTest extends WebTestCase
{
    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'caisse_editer');
    }

    public function testAfficher()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'caisse_afficher');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'caisse_supprimer');
    }

}
