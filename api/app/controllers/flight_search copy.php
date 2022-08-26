<?php

require __DIR__. "/Controller.php";

class Flight extends Controller{
    

    public function FLIGHT_OFFER_SEARCH($params){
        try {

            $payload =  [
                "originLocationCode" => $params['originLocationCode'],
                "destinationLocationCode" => $params['destinationLocationCode'],
                "departureDate" => $params['departureDate'],
                "adults" => $params['adults']
            ];

            $this->amadeus = $this->loadAmadeus(); 
            $init = $this->amadeus->getShopping()->getFlightOffers()->get($payload);
            $result = $init[0]->getResponse()->getBody();
            return $result;

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }


    public function GET_AIRPORT_NAME_AUTOCOMPLETE($params){

        if(!isset($params['keyword']) || $params['keyword'] == "" && !isset($params['subType']) || $params['subType'] == "" ){

            $extra['error'] = [
                "description" => "'keyword' and 'subType' is required"
            ];

            return json_encode(msg(0,400,"invalid parameters",$extra));
        }

        try {

            
            $payload =  [
                "keyword"=>$params['keyword'], 
                "subType"=>$params['subType']
            ];

            // print_r($payload);

            $this->amadeus = $this->loadAmadeus(); 
            $init = $this->amadeus->getReferenceData()->getLocations()->get($payload);
            $result = $init[0]->getResponse()->getData();
            return json_encode($result);

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }

    public function GET_FLIGHT_OFFER_PRICE($params){
        try {

            $payload =  [
                "originLocationCode" => $params['originLocationCode'],
                "destinationLocationCode" => $params['destinationLocationCode'],
                "departureDate" => $params['departureDate'],
                "adults" => $params['adults'],
                "max"=>$params['max']
            ];

            // print_r($payload);
            $this->amadeus = $this->loadAmadeus(); 

            $flightOffers = $this->amadeus->getShopping()->getFlightOffers()->get($payload);

            $init = $this->amadeus->getShopping()->getFlightOffers()->getPricing()->postWithFlightOffers($flightOffers);

            $result = $init->getResponse()->getData();
            return json_encode($result);

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }



    public function CREATE_FLIGHT_ORDER($params){
        if($_SERVER['REQUEST_METHOD'] !== "POST"){
            return json_encode(msg(0,500,"NOT A POST REQUEST"));
        }

        try {

            $payload['data'] =  $params['data'];
            $body = json_encode($payload);
                        

            $this->amadeus = $this->loadAmadeus();
            $init = $this->amadeus->getBooking()->getFlightOrders()->post($body);
            $result = $init->getResponse()->getBody();
            return $result;

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }
    
}