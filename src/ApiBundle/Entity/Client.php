<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
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
     * @ORM\Column(name="id_srtipe", type="integer")
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
}

