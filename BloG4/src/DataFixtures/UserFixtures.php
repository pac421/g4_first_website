<?php

namespace App\DataFixtures;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
        $this->passwordEncoder = $passwordEncoder;
     }


    public function load(ObjectManager $manager)
    {
 

        $user1 = new User();

                $user1->setEmail("nadjim13-13@homtail.fr");
                $user1->setFirstname("Admin");
                $user1->setLastName("Super");
                $user1->setBornDate(new \DateTime("02/09/1997"));
                $user1->setRoles(["ROLE_ADMIN"]);
                $user1->setPassword($this->passwordEncoder->encodePassword(
                         $user1,
                        '1234'
                     ));

                $manager->persist($user1);


                $user2 = new User();

                $user2->setEmail("superadmin@gamil.fr");
                $user2->setFirstname("Admin");
                $user2->setLastName("Super");
                $user2->setBornDate(new \DateTime("20/12/1996"));
                $user2->setRoles(["ROLE_ADMIN"]);
                $user2->setPassword($this->passwordEncoder->encodePassword(
                         $user2,
                        'password'
                     ));

                $manager->persist($user2);




                $user3 = new User();

                $user3->setEmail("superadmin@gamil.fr");
                $user3->setFirstname("Admin");
                $user3->setLastName("Super");
                $user3->setBornDate(new \DateTime("20/12/1996"));
                $user3->setRoles(["ROLE_ADMIN"]);
                $user3->setPassword($this->passwordEncoder->encodePassword(
                         $user3,
                        'password'
                     ));

                $manager->persist($user3);





                $user4 = new User();

                $user4->setEmail("superadmin@gamil.fr");
                $user4->setFirstname("Admin");
                $user4->setLastName("Super");
                $user4->setBornDate(new \DateTime("20/12/1996"));
                $user4->setRoles(["ROLE_ADMIN"]);
                $user4->setPassword($this->passwordEncoder->encodePassword(
                         $user4,
                        'password'
                     ));

                $manager->persist($user4);
                $manager->flush();

    }
    
}
