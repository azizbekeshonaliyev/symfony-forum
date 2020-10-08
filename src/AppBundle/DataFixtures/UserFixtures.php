<?php


namespace AppBundle\DataFixtures;


use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture implements FixtureInterface,ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        $user = new User();

        $user->setUsername("admin");
        $user->setEmail("admin@gmail.com");
        $user->setFullName($faker->name);
        $hash = $this->container->get('security.password_encoder')->encodePassword($user, 'admin');
        $user->setPassword($hash);
        $user->setRole('moderator');
        $user->setImg('/img/avatar/nPFPUD0QUA482.jpg');
        $manager->persist($user);

        $manager->flush();
    }
}