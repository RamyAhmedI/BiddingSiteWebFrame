<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


use App\Factory\UserFactory;
use App\Factory\ShipmentDetailsFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $matt = UserFactory::createOne([
            'username' => 'matt',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN'
        ]);

        $simon = UserFactory::createOne([
            'username' => 'simon',
            'password' => 'murphy',
            'role' => 'ROLE_USER'
        ]);

        UserFactory::createOne([
            'username' => 'john',
            'password' => 'doe',
            'role' => 'ROLE_ADMIN'
        ]);

        ShipmentDetailsFactory::createOne([
            'address' => 'Dublin',
            'price' => 200,
            'productName' => 'TV',
            'user' => $simon
        ]);

        ShipmentDetailsFactory::createOne([
            'address' => 'Cork',
            'price' => 400,
            'productName' => 'TV',
            'user' => $matt
        ]);

    }
}
