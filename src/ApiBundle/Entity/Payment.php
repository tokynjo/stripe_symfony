<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * @ORM\OneToMany(targetEntity="ApiBundle\Entity\Achat", mappedBy="payment")
     */
    private $achats;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="id_payment", type="string",length=255)
     */
    private $idPayment;

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
     * @return Payment
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
     * @return Payment
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

    /**
     * Get achats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAchats()
    {
        return $this->achats;
    }

    /**
     * Set montant
     *
     * @param \interger $montant
     *
     * @return Payment
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return \interger
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set idPayment
     *
     * @param string $idPayment
     *
     * @return Payment
     */
    public function setIdPayment($idPayment)
    {
        $this->idPayment = $idPayment;

        return $this;
    }

    /**
     * Get idPayment
     *
     * @return string
     */
    public function getIdPayment()
    {
        return $this->idPayment;
    }
}
