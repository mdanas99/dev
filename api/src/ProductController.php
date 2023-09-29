<?php

class ProductController {

    public function __construct(private ProductGateway $gateway){

    }

    public function processRequest(string $method, ?string $id):void{
        if($id){
            $this->processResourceResquest($method,$id);
        }else {
            $this->processCollectionRequest($method);
        }
    }

}

?>