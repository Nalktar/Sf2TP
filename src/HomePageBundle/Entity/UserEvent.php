<?php

namespace HomePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEvent
 *
 * @ORM\Table(name="user_event")
 * @ORM\Entity(repositoryClass="HomePageBundle\Repository\UserEventRepository")
 */
class UserEvent
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
     * @var User
     * @ORM\ManyToOne(targetEntity="anonymous-gift\HomePageBundle\Entity\User")
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var Event
     * @ORM\ManyToOne(targetEntity="anonymous-gift\HomePageBundle\Entity\Event")
     * @ORM\Column(name="event", type="string", length=255)
     */
    private $event;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="anonymous-gift\HomePageBundle\Entity\User")
     * @ORM\Column(name="received_user", type="string", length=255)
     */
    private $receivedUser;


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
     * Set user
     *
     * @param string $user
     *
     * @return UserEvent
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set event
     *
     * @param string $event
     *
     * @return UserEvent
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set receivedUser
     *
     * @param string $receivedUser
     *
     * @return UserEvent
     */
    public function setReceivedUser($receivedUser)
    {
        $this->receivedUser = $receivedUser;

        return $this;
    }

    /**
     * Get receivedUser
     *
     * @return string
     */
    public function getReceivedUser()
    {
        return $this->receivedUser;
    }
}

