<?php

namespace App\DataFixtures;

use App\Entity\BankAccount;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BankAccountFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $bankAccount = new BankAccount();

            $bankAccount
                ->setAccountType('standard')
                ->setAccountNumber($this->randomAccountNumber())
                ->setBalance(0.00)
                ->setAvailableFunds(0.00);
            $manager->persist($bankAccount);
        }

        $manager->flush();
    }

    private function randomAccountNumber() {
        $controlSum    = 77;
        $billingNumber = 11402004;
        $restNumber    = rand(1000000000000000, 9999999999999999);

        $accountNumber = (string)$controlSum . (string)$billingNumber . (string)$restNumber;

        return $accountNumber;
    }
}
