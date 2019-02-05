<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BankAccountRepository")
 */
class BankAccount
{
    use TimestampableEntity;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $accountType;

    /**
     * @ORM\Column(type="string", length=26, unique=true)
     */
    private $accountNumber;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    private $balance;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    private $availableFunds;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    public function setAccountType(string $accountType): self
    {
        $this->accountType = $accountType;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getAvailableFunds()
    {
        return $this->availableFunds;
    }

    public function setAvailableFunds($availableFunds): self
    {
        $this->availableFunds = $availableFunds;

        return $this;
    }
}
