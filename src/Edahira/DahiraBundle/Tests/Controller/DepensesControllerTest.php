<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DepensesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'depenses/index');
    }

    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'depenses/editer');
    }

}
