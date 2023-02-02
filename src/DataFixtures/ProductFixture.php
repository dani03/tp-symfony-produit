<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("samsung galaxy S22");
        $product->setDescription("la description");
        $product->setPrice(100);
        $manager->persist($product);

        $product2 = new Product();
        $product2->setName("iphone 11");
        $product2->setDescription("la description iphone");
        $product2->setPrice(100);
        $manager->persist($product2);

        $product_3 = new Product();
        $product_3->setName("alcatel");
        $product_3->setDescription("la description alcatel ici");
        $product_3->setPrice(100);
        $manager->persist($product_3);

        $product_4 = new Product();
        $product_4->setName("samsung galaxy S22");
        $product_4->setDescription("la description");
        $product_4->setPrice(100);
        $manager->persist($product_4);


        $manager->flush();
    }
}
