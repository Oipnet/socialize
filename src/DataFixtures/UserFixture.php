<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setPassword($this->passwordEncoder->encodePassword($admin, 'password'));
        $admin->setEmail('admin@local.dev');

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername($faker->userName);
            $user->setPassword($this->passwordEncoder->encodePassword($user, 'password'));
            $user->setEmail($faker->email);
            $admin->addFriend($user);

            $manager->persist($user);
        }

        $manager->persist($admin);

        $manager->flush();
    }
}
