<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Factory\UserFactory;
<<<<<<< HEAD

use App\Factory\ShippingDetailsFactory;
use App\Factory\MakeCommentFactory;
use App\Factory\ListingFactory;
use App\Factory\ProductFactory;

use App\Entity\Bid;
use App\Factory\PhoneFactory;
use App\Factory\MakeFactory;

=======
use App\Factory\PhoneFactory;
use App\Factory\MakeFactory;

use App\Factory\CampusFactory;
use App\Factory\StudentFactory;
>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
<<<<<<< HEAD

        $bid1 = new Bid();
        $bid1->setDate("19/04/2023");
        $bid1->setCancel("false");
        $bid1->setTime("3");
        $bid1->setBidStatus("ongoing");

        $manager->persist($bid1);

        $matt = UserFactory::createOne([

            'username' => 'matt',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN',
        ]);

        $joe = UserFactory::createOne([
            'username' => 'john',
            'password' => 'doe',
            'role' => 'ROLE_ADMIN',
        ]);
        $mattDetails01 = ShippingDetailsFactory::createOne([
            'address' => 'Dublin',
            'price' => 200,
            'productName' => 'TV',
        ]);

        ShippingDetailsFactory::createOne([
            'address' => 'Cork',
            'price' => 400,
            'productName' => 'TV',
        ]);

        $listing01 = ListingFactory::createOne([
            'listingDeleted' => true,
            'minPrice' => 200.00,
            'minimumBid' => 2.00,
            'setDate' => 2023,
            'setTime' => 15.00,
            'stillAvailable' => true,
            'timeLimit' => 4.00,
            'user' => $matt,
            'shippingdetails' => $mattDetails01,
        ]);

        ProductFactory::createOne([
            'bidStatus' => 'active',
            'price' => 200.00,
            'productMake' => 'Iphone',
            'productName' => 'Iphone X',
            'productOS' => 'IOS',
            'productStorageSize' => 60,
            'product' => $listing01,
        ]);

        MakeCommentFactory::createOne([
            'makecomment' => 'Hi',
            'user' => $matt,
        ]);

        MakeCommentFactory::createOne([
            'makecomment' => 'Hello',
            'user' => $joe,
=======
        UserFactory::createOne([
            'username' => 'matt',
            'password' => 'smith',
            'role' => 'ROLE_ADMIN'
>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86
        ]);

        UserFactory::createOne([
            'username' => 'john',
            'password' => 'doe',
            'role' => 'ROLE_ADMIN'
        ]);


        MakeFactory::createOne(['name' => 'Apple']);
        MakeFactory::createOne(['name' => 'Samsung']);
        MakeFactory::createOne(['name' => 'Sony']);

        PhoneFactory::createOne([
            'model' => 'iPhone X',
            'memory' => '128',
            'manufacturer' => MakeFactory::find(['name' => 'Apple']),
            'OSType' => 'IOS',
            'Price' => '200',
        ]);

        PhoneFactory::createOne([
            'model' => 'Galaxy 21',
            'memory' => '256',
            'manufacturer' => MakeFactory::find(['name' => 'Samsung']),
            'OSType' => 'Android',
            'Price' => '200',
        ]);

    }
}
