<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookmarkedOffer
 *
 * @ORM\Table(name="bookmarked_offer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookmarkedOfferRepository")
 */
class BookmarkedOffer
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
     * @var int
     *
     * @ORM\Column(name="IDOffer", type="integer", unique=true)
     */
    private $iDOffer;

    /**
     * @var int
     *
     * @ORM\Column(name="IDUser", type="integer", unique=true)
     */
    private $iDUser;

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
     * Set iDOffer
     *
     * @param integer $iDOffer
     *
     * @return BookmarkedOffer
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
     * Set iDUser
     *
     * @param integer $iDUser
     *
     * @return BookmarkedOffer
     */
    public function setIDUser($iDUser)
    {
        $this->iDUser = $iDUser;

        return $this;
    }

    /**
     * Get iDUser
     *
     * @return int
     */
    public function getIDUser()
    {
        return $this->iDUser;
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
