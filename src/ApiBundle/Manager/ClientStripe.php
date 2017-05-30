<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26/05/2017
 * Time: 13:54
 */

namespace ApiBundle\Manager;


use ApiBundle\Entity\Achat;
use ApiBundle\Entity\Client;
use ApiBundle\Service\StripeService;
use Doctrine\ORM\EntityManager;

class ClientStripe
{

    private $em;
    private $service;

    /**
     * ClientStripe constructor.
     */
    public function __construct(EntityManager $em, StripeService $service)
    {
        $this->service = $service;
        $this->em = $em;
    }

    /**
     * @return EntityManager
     */
    public function creationClient($user, $service, $tab)
    {
        $em = $this->em;
        $client = ($user->getClient()) ? $user->getClient() : new Client();
        if ($client->getId() == null) {
            $resultat = json_encode($service->createCutomers($tab));
            $dataStripe = (array)json_decode($resultat);
            $client->setIdSrtipe($dataStripe['id']);
            $client->setCode('4242424242424');
            $client->setMmYY('07/17');
            $client->setCodeActivation('123');
            $client->setUser($user);
            $user->setClient($client);
            $em->persist($client);
            $em->persist($user);
            $em->flush();
        }
        return $client;
    }

    public function creationPayment($montant, $user, $payment, $tab,$client)
    {
        $service = $this->service;
        $em = $this->em;
        $tab['montant'] = $montant;
        $tab['description'] = $user->getUsername() . '-' . $user->getEmail();
        $resultat = $service->facturerClient($tab,$client);
        $payment->setDate(new \DateTime());
        $payment->setMontant($montant);
        $payment->setIdPayment($resultat['id']);
        $em->persist($payment);
        $em->flush();
        return $payment;
    }

    public function creationAchat($client, $payment, $montant, $i)
    {
        $em = $this->em;
        $produit = $em->getRepository('ApiBundle:Produit')->find(intval($i['id']));
        $achat = new Achat();
        $achat->setPrix($i['prix']);
        $achat->setProduit($produit);
        $achat->setClient($client);
        try {
            $em->persist($achat);
            $achat->setPayment($payment);
            $montant += $i['prix'];
            return $montant;
        } catch (\PDOException $e) {

        }
    }

}