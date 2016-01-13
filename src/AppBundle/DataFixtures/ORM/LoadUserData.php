<?php
/**
 * Created by PhpStorm.
 * User: j.quero
 * Date: 13/01/2016
 * Time: 11:06
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HomePageBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('user');
        $userAdmin->setPassword('$2a$04$hY20u6Ykk4NlNj6CeSsyfeU2YwtU0gsM2osWUvuseHpW..G5D6Bbm');
        $userAdmin->setEmail('user.user@user.user');
        $userAdmin->setEnabled(true);

        $manager->persist($userAdmin);
        $manager->flush();
    }
}