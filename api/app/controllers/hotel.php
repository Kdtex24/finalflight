<?php

require __DIR__. "/Controller.php";

class Hotel extends Controller{
    

    public function GET_HOTEL_LIST_BY_ID($params){
        try {

            if(!isset($params['hotelIds']) || $params['hotelIds'] == ""){

                $extra['error'] = [
                    "description" => "hotelIds is required"
                ];

                return json_encode(msg(0,400,"invalid parameters",$extra));
            }

            $payload =  [
                "hotelIds"=>$params['hotelIds']
            ];

            $this->amadeus = $this->loadAmadeus(); 
            $init = $this->amadeus->getReferenceData()->getLocations()->getHotels()->getByHotels()->get($payload);
            $result = $init[0]->getResponse()->getData();
            return json_encode($result);

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }


    public function GET_HOTEL_NAME_AUTOCOMPLETE($params){

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
            $init = $this->amadeus->getReferenceData()->getLocations()->getHotels()->getByHotels()->get($payload);
            $result = $init[0]->getResponse()->getData();
            return json_encode($result);

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }

    public function GET_HOTEL_LIST_BY_CITY($params){
        try {

            $payload =  [
                "cityCode"=> $params['cityCode']
            ];
            // print_r($payload);

            $this->amadeus = $this->loadAmadeus(); 
            $init = $this->amadeus->getReferenceData()->getLocations()->getHotels()->getByCity()->get($payload);
            $result = $init[0]->getResponse()->getData();
            return json_encode($result);

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }


    public function GET_HOTEL_LIST_BY_GEOCODE($params){
        try {

            $payload =  [
                "longitude"=> $params['longitude'], 
                "latitude"=> $params['latitude']
            ];
            // print_r($payload);

            $this->amadeus = $this->loadAmadeus(); 
            $init = $this->amadeus->getReferenceData()->getLocations()->getHotels()->getByGeocode()->get($payload);
            $result = $init[0]->getResponse()->getData();
            return json_encode($result);

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }
    

    public function GET_HOTEL_AVALABLE_OFFERS($params){
        try {

            $payload =  [
                "hotelIds" => $params['hotelIds'],
                "adults" => $params['adults'],
                "checkInDate" => $params['checkInDate'],
                "roomQuantity" => $params['roomQuantity'],
                "paymentPolicy" => $params['paymentPolicy'],
                "bestRateOnly" => $params['bestRateOnly']
                
            ];
            
            $this->amadeus = $this->loadAmadeus(); 
            $init = $this->amadeus->getShopping()->getHotelOffers()->get($payload);
            $result = $init[0]->getResponse()->getData();
            return json_encode($result);

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }

    public function BOOK_HOTEL($params){
        if($_SERVER['REQUEST_METHOD'] !== "POST"){
            return json_encode(msg(0,500,"NOT A POST REQUEST"));
        }

        try {

            $payload['data'] =  $params['data'];
            $body = json_encode($payload);
                        

            $this->amadeus = $this->loadAmadeus();
            $init = $this->amadeus->getBooking()->getHotelBookings()->post($body);
            $result = $init[0]->getResponse()->getBody();
            return $result;

        } catch (\Throwable $th) {
            print $th->getMessage();
        }
    }
    
}