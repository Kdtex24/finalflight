<?php

require __DIR__. "/Controller.php";

class Hotel_search extends Controller{
    
    public function initial($params){
        try {

            $this->amadeus = $this->loadAmadeus(); 
            $flightOffers = $this->amadeus->getShopping()->getHotelOffers()->get($params);
            $result = $flightOffers[0]->getResponse()->getBodyAsJsonObject();
            return json_encode($result);

        } catch (\Throwable $th) {
            return $th;
        }

    }

    public function list($params){
        try {

            $this->amadeus = $this->loadAmadeus(); 
            $flightOffers = $this->amadeus->getShopping()->getHotelOffers()->get($params);
            $result = $flightOffers[0]->getResponse()->getBodyAsJsonObject();
            return json_encode($result);

        } catch (\Throwable $th) {
             return $th;
        }
    }
}