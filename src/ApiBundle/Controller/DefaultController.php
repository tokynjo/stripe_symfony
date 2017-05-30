<?php

namespace ApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonDecode;

class DefaultController extends Controller
{



    /**
     **@Route("/app-liste-client-stripe",name="app_liste_client_stripe")
     * @Template()
     */
    public function listeClientStripeAction()
    {
        $service = $this->container->get('app.service_stripe');
        $allClient = json_encode($service->getAllCustomers());
        $data = (array)json_decode($allClient);
        return array('clients'=>$data);
    }

    /**
     * @Route("/app-get-token-stripe",name="app_get_token_stripe")
     * @Template()
     */
    public function getTokenStripeAction(Request $request)
    {
        $service = $this->container->get('app.service_stripe');
        $resultat= null;
        if($request->getMethod()=='POST'){
            $data = $request->request;
            $tab=[
                'source'=>$data->get('stripeToken'),
                'description'=>$data->get('name'),
                'email'=>$data->get('email')
            ];
           $resultat = $service->createCutomers($tab);
            return array('resultat'=>$resultat);
        }
        return array('resultat'=>$resultat);
    }

    /**
     * @Route("/app-delete-stripe/{id}",name="app_delete_stripe")
     */
    public function deleteStrip($id){
        $service = $this->container->get('app.service_stripe');
        $resultat = $service->deleteCustomerStripe($id);
        return new Response($resultat);
    }

    /**
     * @Route("/app-edit-stripe/{id}",name="app_edit_stripe")
     */
    public function editStrip(Request $request, $id){
        $data = $request->request;
        $tab=[
            'source'=>$data->get('token'),
            'description'=>$data->get('description'),
            //'email'=>$data->get('email')
        ];
        $service = $this->container->get('app.service_stripe');
        $resultat = $service->editCustomerStripe($id,$tab);
        return new Response($resultat);
    }
}
