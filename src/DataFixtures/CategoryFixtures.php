<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $craftCategory = new Category();
        $craftCategory->setName('craft');

        $spacyCategory = new Category();
        $spacyCategory->setName('Spacy');

        $sweetCategory = new Category();
        $sweetCategory->setName('Sweet');

       
        $manager->persist($craftCategory);
        $manager->persist($spacyCategory);
        $manager->persist($sweetCategory);
        

        $manager->flush();

        $this->addReference('Craft', $craftCategory);
        $this->addReference('Spacy', $spacyCategory);
        $this->addReference('Sweet', $sweetCategory);
     
    }
}