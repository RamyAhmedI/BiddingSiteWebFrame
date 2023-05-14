<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;
<<<<<<< HEAD

use App\Factory\PurchaseDetailsFactory;
use App\Factory\MakeCommentFactory;


use App\Factory\PhoneFactory;
use App\Factory\MakeFactory;
use App\Entity\Bid;

=======
use App\Factory\PhoneFactory;
use App\Factory\MakeFactory;

use App\Factory\CampusFactory;
use App\Factory\StudentFactory;
>>>>>>> 41303353db1a2eba253f074c01e9cfcf8699c528

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD
        $bid1 = new Bid();
        $bid1->setDate("19/04/2023");
        $bid1->setCancel("ongoing");
        $bid1->setTime("3");

        $manager->persist($bid1);

        $matt = UserFactory::createOne([
=======
        UserFactory::createOne([
>>>>>>> 41303353db1a2eba253f074c01e9cfcf8699c528
            'username' => 'matt',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN',
        ]);

        $joe = UserFactory::createOne([
            'username' => 'john',
            'password' => 'doe',
            'role' => 'ROLE_ADMIN',
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
            'makecomment' => 'Hi',
            'user' => $matt,
        ]);

        MakeCommentFactory::createOne([
            'makecomment' => 'Hello',
            'user' => $joe,
        ]);

        UserFactory::createOne([
            'username' => 'Andrew Fan',
            'password' => 'Ihatethis',
            'role' => 'ROLE_ADMIN',
        ]);

=======
>>>>>>> 41303353db1a2eba253f074c01e9cfcf8699c528

        MakeFactory::createOne(['name' => 'Apple']);
        MakeFactory::createOne(['name' => 'Samsung']);
        MakeFactory::createOne(['name' => 'Sony']);

        PhoneFactory::createOne([
            'model' => 'iPhone X',
            'memory' => '128',
            'manufacturer' => MakeFactory::find(['name' => 'Apple']),
        ]);

        PhoneFactory::createOne([
            'model' => 'Galaxy 21',
            'memory' => '256',
            'manufacturer' => MakeFactory::find(['name' => 'Samsung']),
        ]);

        $blanchCampus = CampusFactory::createOne(['location' => 'Blanchardstown']);
        $tallaghtCampus = CampusFactory::createOne(['location' => 'Tallaght']);
        $cityCampus = CampusFactory::createOne(['location' => 'City']);

        StudentFactory::createOne([
            'age' => 21,
            'name' => 'Matt Smith',
            'campus' => $blanchCampus
        ]);

        StudentFactory::createOne([
            'age' => 96,
            'name' => 'Granny Smith',
            'campus' => $blanchCampus
        ]);

        // illustrate a "find" for property value to link to another object ...
        StudentFactory::createOne([
            'age' => 19,
            'name' => 'Sinead Mullen',
            'campus' => CampusFactory::find(['location' => 'Tallaght']),
        ]);
    }
}
