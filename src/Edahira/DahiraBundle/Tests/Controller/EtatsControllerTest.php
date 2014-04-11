<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EtatsControllerTest extends WebTestCase
{
    public function testEvenement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'etats/evenement');
    }

    public function testTypeevenement()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'etat/typeevenement');
    }

}
