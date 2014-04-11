<?php

namespace Edahira\DahiraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CotisationControllerTest extends WebTestCase
{
    public function testDahira()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'cotisation/dahira');
    }

}
