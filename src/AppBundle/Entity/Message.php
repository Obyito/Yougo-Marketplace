<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 */
class Message
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
     * @var string
     *
     * @ORM\Column(name="IDOffer", type="integer", unique=true)
     */
    private $iDOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="Object", type="string", length=255)
     */
    private $object;

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
     * Set iDSourceUser
     *
     * @param integer $iDSourceUser
     *
     * @return Message
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
     * @return Message
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
     * @param string $iDOffer
     *
     * @return Message
     */
    public function setIDOffer($iDOffer)
    {
        $this->iDOffer = $iDOffer;

        return $this;
    }

    /**
     * Get iDOffer
     *
     * @return string
     */
    public function getIDOffer()
    {
        return $this->iDOffer;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set object
     *
     * @param string $object
     *
     * @return Message
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
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
