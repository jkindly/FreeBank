<?php

namespace App\DataFixtures;

use App\Entity\BankAccount;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BankAccountFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//         $bankAccount = new BankAccount();
//         $bankAccount->setAccountType('normal')
//             ->setAccountNumber()
        // $manager->persist($product);

        $manager->flush();
    }
}
