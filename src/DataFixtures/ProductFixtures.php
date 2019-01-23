<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $ProdSensioLabs = new Product();
        $ProdSensioLabs->setCategory($manager->merge($this->getReference('Craft')));
        $ProdSensioLabs->setUnit_instock(15);
        $ProdSensioLabs->setUnit_inorder(3);
        $ProdSensioLabs->setQuent_perunit(18);
        $ProdSensioLabs->setLogo(null);
        $ProdSensioLabs->setUnit_price(12);
        $ProdSensioLabs->setDescr('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
    
      
        $ProdSensioLabs->setExpiresAt(new \DateTime('+30 days'));

        $ProdExtremeSensio = new Product();
        $ProdExtremeSensio->setCategory($manager->merge($this->getReference('Spacy')));
        $ProdExtremeSensio->setCategory($manager->merge($this->getReference('Craft')));
        $ProdExtremeSensio->setUnit_instock(15);
        $ProdExtremeSensio->setUnit_inorder(3);
        $ProdExtremeSensio->setQuent_perunit(18);
        $ProdExtremeSensio->setLogo(null);
        $ProdExtremeSensio->setUnit_price(12);
        $ProdExtremeSensio->setDescr('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
        $ProdExtremeSensio->setExpiresAt(new \DateTime('+30 days'));

        $manager->persist($ProdSensioLabs);
        $manager->persist($ProdExtremeSensio);

        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
