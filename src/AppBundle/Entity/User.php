<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="ApiBundle\Entity\Client", inversedBy="user")
     */
    private $client;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set client
     *
     * @param \ApiBundle\Entity\Client $client
     *
     * @return User
     */
    public function setClient(\ApiBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \ApiBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
