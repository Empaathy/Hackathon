<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProductFixtures extends Fixture
{
    public const PRODUCT = 21;

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 1; $i < self::PRODUCT; $i++) {
            $product = new Product();
            $product->setName('Product n°' . '' . $i);
            $product->setDescription($faker->realText(150));
            $product->setPoster('https://fakeimg.pl/440x220/?text=Product ' . '' . $i);
            $product->setPrice($faker->randomNumber(2));

            $manager->persist($product);
        }

        $manager->flush();
    }
}
