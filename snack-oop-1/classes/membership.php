<?php

/**
 * extention with Membership class of parent UserPremium class
 */
class Membership{
    private $cod;

    public function __construct($cod) {
        $this->cod = $cod;
    }

    public function getCod(){
        return $this->cod;
    }
    
    public function setCod(){
        if(strlen($cod)=== 10){
            $this->cod = $cod;
        }
    }
}