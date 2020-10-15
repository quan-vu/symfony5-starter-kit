<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // Create demo user
        // 2 users
        for ($i=1; $i < 3; $i++) {
            $user = new User();
            $user->setEmail('user'.$i.'@gmail.com');
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'the_new_password'
            ));
            $manager->persist($user);
        }

        // 2 admins
        for ($i=1; $i < 3; $i++) {
            $user = new User();
            $user->setEmail('admin'.$i.'@gmail.com');
            $user->setRoles(['ROLE_ADMIN']);
            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'the_new_password'
            ));
            $manager->persist($user);
        }

        $manager->flush();
    }
}
