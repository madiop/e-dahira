<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'categorie/index');
    }

    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'categorie/editer');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'categorie/supprimer');
    }

}
