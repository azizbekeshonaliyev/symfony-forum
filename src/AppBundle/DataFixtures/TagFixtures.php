<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $tag = new Tag();
            $tag->setName('Tag '.$i);
            $manager->persist($tag);
        }

        $manager->flush();
    }
}