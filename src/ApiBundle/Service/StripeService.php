<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18/05/2017
 * Time: 16:42
 */

namespace ApiBundle\Service;


class StripeService
{
    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function curl_traitement($data)
    {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => 'https://api.stripe.com/v1/customers',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERPWD => 'sk_test_XawEL3sDhhnpsw5QbP2A97mU',
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_POSTFIELDS => http_build_query($data)
        ]);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);
        return $response;
    }

    public function createCutomers($data)
    {
        \Stripe\Stripe::setApiKey("sk_test_XawEL3sDhhnpsw5QbP2A97mU");
        return \Stripe\Customer::create($data);
    }

    public function getAllCustomers()
    {
        \Stripe\Stripe::setApiKey("sk_test_XawEL3sDhhnpsw5QbP2A97mU");

        return \Stripe\Customer::all(array("limit" => 20));
    }

    public function deleteCustomerStripe($id)
    {
        \Stripe\Stripe::setApiKey("sk_test_XawEL3sDhhnpsw5QbP2A97mU");

        $cu = \Stripe\Customer::retrieve($id);
        return $cu->delete();

    }

    public function editCustomerStripe($id, $data)
    {
        \Stripe\Stripe::setApiKey("sk_test_XawEL3sDhhnpsw5QbP2A97mU");

        $cu = \Stripe\Customer::retrieve($id);
        $cu->description = $data['description'];
        //$cu->email = $data['description'];
        $cu->source = $data['source']; // obtained with Stripe.js
        return $cu->save();
    }


    public function facturerClient($data,$client)
    {

        \Stripe\Stripe::setApiKey("sk_test_XawEL3sDhhnpsw5QbP2A97mU");
        $resultat = \Stripe\Charge::create(array(
            "amount" => $data['montant'],
            "currency" => "usd",
            "source" => $data["source"], // obtained with Stripe.js
            "description" => $data['description'],
          //  "customer"=>$client->getIdSrtipe()
        ));
        $data = json_encode($resultat);
        return (array)(json_decode($data));
    }

}