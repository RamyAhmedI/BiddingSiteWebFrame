<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;
use App\Factory\MakeCommentFactory;
use App\Factory\ShippingDetailsFactory;
use App\Factory\ProductFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'username' => 'matt',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'big',
            'password' => 'man',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'seller',
            'password' => 'seller',
            'role' => 'ROLE_SELLER'
        ]);

        UserFactory::createOne([
            'username' => 'user',
            'password' => 'user',
            'role' => 'ROLE_USER'
        ]);

        MakeCommentFactory::createOne([
            'MakeComment' => 'How heavy is the iPhone 14?',
            'MakeReply' => 'In or Around 172g',
        ]);

        MakeCommentFactory::createOne([
            'MakeComment' => 'Is the iPhone X waterproof?',
            'MakeReply' => 'The iPhone X can handle being submerged into pools of water no deeper than 2 meters',
        ]);

        MakeCommentFactory::createOne([
            'MakeComment' => 'If I win the bid when does the phone arrive?',
            'MakeReply' => 'The phone should arrive within 5-7 business days',
        ]);

        ShippingDetailsFactory::createOne([
            'address' => '123 private details here street',
            'email' => 'bobsemail@email.com',
            'name' => 'bob',
            'phone' => '089345878',
            'price' => '1000.40',
            'product' => 'iPhone 14',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '994.90',
            'productMake' => 'Apple',
            'productName' => 'iPhone 14',
            'productOS' => 'IOS',
            'productStorageSize' => '256',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '394.40',
            'productMake' => 'Samsung',
            'productName' => 'Samsung A21',
            'productOS' => 'Android',
            'productStorageSize' => '64',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '494.90',
            'productMake' => 'Apple',
            'productName' => 'iPhone 11 Pro',
            'productOS' => 'IOS',
            'productStorageSize' => '256',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '194.10',
            'productMake' => 'Sony',
            'productName' => 'Sony XPeria 10',
            'productOS' => 'Android',
            'productStorageSize' => '32',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '100.50',
            'productMake' => 'Samsung',
            'productName' => 'Samsung S22',
            'productOS' => 'Android',
            'productStorageSize' => '101',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '203.67',
            'productMake' => 'Sony',
            'productName' => 'Sony XPeria 5 Gen 3',
            'productOS' => 'Android',
            'productStorageSize' => '128',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '594.34',
            'productMake' => 'Apple',
            'productName' => 'iPhone 13 Max',
            'productOS' => 'IOS',
            'productStorageSize' => '128',
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'Ongoing',
            'price' => '90.45',
            'productMake' => 'Samsung',
            'productName' => 'Samsung S20',
            'productOS' => 'Android',
            'productStorageSize' => '101',
        ]);
    }
}
