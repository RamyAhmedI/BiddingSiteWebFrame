<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PhoneCrudTest extends WebTestCase
{
    public function testHomePage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'HomePage');
    }

    public function TestpublicuserCanNotSeeAdmin(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $contentSelector = '#new_admin_link';

        //Assert
        $this->assertSelectorNotExists($contentSelector);
    }

    public function TestpublicusercanseeAdmin(): void
    {
        $client = static::createClient();

        //Login as Admin user
        $username = 'matt';
        $userRepository = static::getContainer()->get(UserRepository::class);
        $testUser = $userRepository->findonebyUsername($username);
        $client->loginUser($testUser);

        //Make HTTP Request
        $crawler = $client->request('GET', '/make');

        //Assert
        $contentSelector = '#new_admin_link';
        $this->assertSelectorExists($contentSelector);
    }
}
