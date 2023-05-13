<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;
<<<<<<< HEAD
use App\Factory\PurchaseDetailsFactory;
use App\Factory\MakeCommentFactory;

=======
use App\Factory\PhoneFactory;
use App\Factory\MakeFactory;
use App\Entity\Bid;
>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $bid1 = new Bid();
        $bid1->setDate("19/04/2023");
        $bid1->setCancel("ongoing");
        $bid1->setTime("3");

        $manager->persist($bid1);

        UserFactory::createOne([
            'username' => 'matt',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN'
        ]);

        UserFactory::createOne([
            'username' => 'john',
            'password' => 'doe',
            'role' => 'ROLE_ADMIN'
        ]);

<<<<<<< HEAD
        PurchaseDetailsFactory::createOne([
            'address' => 'Dublin',
            'price' => 200,
            'productName' => 'TV',
        ]);

        PurchaseDetailsFactory::createOne([
            'address' => 'Cork',
            'price' => 400,
            'productName' => 'TV',
        ]);

        MakeCommentFactory::createOne([
            'comment' => 'Hi',
            'makecomment' => $matt
=======
        UserFactory::createOne([
            'username' => 'Andrew Fan',
            'password' => 'Ihatethis',
            'role' => 'ROLE_ADMIN'
        ]);


        MakeFactory::createOne(['name' => 'Apple']);
        MakeFactory::createOne(['name' => 'Samsung']);
        MakeFactory::createOne(['name' => 'Sony']);

        PhoneFactory::createOne([
            'model' => 'iPhone X',
            'memory' => '128',
            'manufacturer' => MakeFactory::find(['name' => 'Apple']),
>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716
        ]);

        PhoneFactory::createOne([
            'model' => 'Galaxy 21',
            'memory' => '256',
            'manufacturer' => MakeFactory::find(['name' => 'Samsung']),
        ]);
    }

}
