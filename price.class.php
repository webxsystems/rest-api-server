<?php

require_once "RestServer.php";

class price
{
    public function test( $requestString ){
        //
        //
        if( !empty( $requestString ) ){
            return array("Response" => 0);
        }
        return array("Response" => 1);
    }

    public function updatePrice( $product, $price){
        //
        //
        return array("Response" => $product. "->".$price*2);
    }

    public function identifyProduct( $type ){
        // scan database table 'product' column 'name' for text match
        //
        return array("Response" => "Success or Fail");
    }

}

$rest = new RestServer();
$rest->addServiceClass('price');
$rest->handle();