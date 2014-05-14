<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChargesControllerTest extends WebTestCase
{
    public function testEditer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'charges/editer');
    }

}
