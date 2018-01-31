<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="IDSourceUser", type="integer", unique=true)
     */
    private $iDSourceUser;

    /**
     * @var int
     *
     * @ORM\Column(name="IDDestUser", type="integer", unique=true)
     */
    private $iDDestUser;

    /**
     * @var int
     *
     * @ORM\Column(name="IDOffer", type="integer", unique=true)
     */
    private $iDOffer;

    /**
     * @var int
     *
     * @ORM\Column(name="Price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="Fee", type="integer")
     */
    private $fee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreatedDate", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UpdatedDate", type="datetime")
     */
    private $updatedDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Transaction
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set iDSourceUser
     *
     * @param integer $iDSourceUser
     *
     * @return Transaction
     */
    public function setIDSourceUser($iDSourceUser)
    {
        $this->iDSourceUser = $iDSourceUser;

        return $this;
    }

    /**
     * Get iDSourceUser
     *
     * @return int
     */
    public function getIDSourceUser()
    {
        return $this->iDSourceUser;
    }

    /**
     * Set iDDestUser
     *
     * @param integer $iDDestUser
     *
     * @return Transaction
     */
    public function setIDDestUser($iDDestUser)
    {
        $this->iDDestUser = $iDDestUser;

        return $this;
    }

    /**
     * Get iDDestUser
     *
     * @return int
     */
    public function getIDDestUser()
    {
        return $this->iDDestUser;
    }

    /**
     * Set iDOffer
     *
     * @param integer $iDOffer
     *
     * @return Transaction
     */
    public function setIDOffer($iDOffer)
    {
        $this->iDOffer = $iDOffer;

        return $this;
    }

    /**
     * Get iDOffer
     *
     * @return int
     */
    public function getIDOffer()
    {
        return $this->iDOffer;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Transaction
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set fee
     *
     * @param integer $fee
     *
     * @return Transaction
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return int
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return User
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     *
     * @return User
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }
}
