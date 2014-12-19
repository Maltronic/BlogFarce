<?php

namespace BlogFarce\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/app_dev.php');
        var_dump($crawler->text());
        $this->assertTrue($crawler->filter('html:contains("Da Homepage")')->count() > 0);
    }
}
