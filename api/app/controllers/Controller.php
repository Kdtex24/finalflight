<?php
use Amadeus\Amadeus;
use Amadeus\Exceptions\ResponseException;

class Controller{

    protected function loadAmadeus(){

        try {

            return $amadeus = Amadeus::builder($_ENV['AMADEUS_API_KEY'], $_ENV['AMADEUS_API_SECRET'])
            ->build();

        } catch (\Throwable $th) {
            
            print $th;
        }

    }


}