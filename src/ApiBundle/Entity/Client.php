<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client_stripe")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="id_srtipe", type="string", length=255)
     */
    private $idSrtipe;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="codeActivation", type="string", length=255)
     */
    private $codeActivation;

    /**
     * @var string
     *
     * @ORM\Column(name="mmYY", type="string", length=255)
     */
    private $mmYY;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User", inversedBy="client")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="ApiBundle\Entity\Achat", mappedBy="client")
     */
    private $achats;
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
     * Set idSrtipe
     *
     * @param integer $idSrtipe
     *
     * @return Client
     */
    public function setIdSrtipe($idSrtipe)
    {
        $this->idSrtipe = $idSrtipe;

        return $this;
    }

    /**
     * Get idSrtipe
     *
     * @return int
     */
    public function getIdSrtipe()
    {
        return $this->idSrtipe;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Client
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set codeActivation
     *
     * @param string $codeActivation
     *
     * @return Client
     */
    public function setCodeActivation($codeActivation)
    {
        $this->codeActivation = $codeActivation;

        return $this;
    }

    /**
     * Get codeActivation
     *
     * @return string
     */
    public function getCodeActivation()
    {
        return $this->codeActivation;
    }

    /**
     * Set mmYY
     *
     * @param string $mmYY
     *
     * @return Client
     */
    public function setMmYY($mmYY)
    {
        $this->mmYY = $mmYY;

        return $this;
    }

    /**
     * Get mmYY
     *
     * @return string
     */
    public function getMmYY()
    {
        return $this->mmYY;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Client
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set achats
     *
     * @param \ApiBundle\Entity\Achat $achats
     *
     * @return Client
     */
    public function setAchats(\ApiBundle\Entity\Achat $achats = null)
    {
        $this->achats = $achats;

        return $this;
    }

    /**
     * Get achats
     *
     * @return \ApiBundle\Entity\Achat
     */
    public function getAchats()
    {
        return $this->achats;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->achats = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add achat
     *
     * @param \ApiBundle\Entity\Achat $achat
     *
     * @return Client
     */
    public function addAchat(\ApiBundle\Entity\Achat $achat)
    {
        $this->achats[] = $achat;

        return $this;
    }

    /**
     * Remove achat
     *
     * @param \ApiBundle\Entity\Achat $achat
     */
    public function removeAchat(\ApiBundle\Entity\Achat $achat)
    {
        $this->achats->removeElement($achat);
    }
}
