<?php

namespace AppBundle\Controller;

use ApiBundle\Entity\Achat;
use ApiBundle\Entity\Client;
use ApiBundle\Entity\Payment;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use JMS\Serializer\SerializationContext;

class ApiController extends FOSRestController
{

    /**
     * @Rest\View()
     * @Rest\Get("/api/test")
     **/
    public function indexAction()
    {
        $data = array("hello" => "world");
        $view = $this->view($data);
        return $this->handleView($view);

        return array('data' => 0);
    }


    /**
     * @Rest\View()
     * @Rest\Get("/api/produits")
     **/
    public function getProduitAction()
    {
        $serializer = $this->container->get('jms_serializer');
        var_dump($this->getUser());die;
        $em = $this->getDoctrine()->getEntityManager();
        $produits = $em->getRepository('ApiBundle:Produit')->getAllProduit();
        $view = $this->view($produits);
        return $this->handleView($view);
    }

    /**
     * @Rest\View()
     * @Rest\GET("/api/users")
     **/
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $produits = $em->getRepository('AppBundle:User')->findAll();
        $view = $this->view($produits);
        return $this->handleView($view);
    }


    /**
     * @Rest\View()
     * @Rest\POST("/api/acheter-produit")
     **/
    public function acheterProduitAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('AppBundle:User')->find(1);
        $service = $this->container->get('app.service_stripe');
        $serviceManager = $this->container->get('api.service.manager.stripe');
        $tab = [
            'source' => $request->query->get('token'),
            'description' => $user->getUsername(),
            'email' => $user->getEmail()
        ];
        $client = $serviceManager->creationClient($user, $service, $tab);
        $payment = new Payment();
        $montant = 0;
        foreach ($request->request as $i) {
            if ($i['prix']) {
                $montant += $serviceManager->creationAchat($client, $payment, $montant, $i);
            }
        }
        $serviceManager->creationPayment($montant, $user, $payment, $tab,$client);
    }
}
