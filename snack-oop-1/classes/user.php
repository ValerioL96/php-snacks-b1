<?php

/**
 *  User class
 */
class User {

    private $username;
    private $usermail;

    /**
 * istances of the User
 *
 * @param [type] $username
 * @param [type] $usermail
 */
public function __construct($username, $usermail) {
    $this->username = $username;
    $this->usermail = $usermail;
}

public function getDiscount(){
    return '0%';
}

public function getUsername(){
    return $this->username;
}

public function setUsername(){
    if(strlen($username) >= 3){
        $this->username = $username;
    }
}

public function getUsermail(){
    return $this->usermail;
}

public function setUsermail(){
    if(strlen($usermail)> 3){
        $this->usermail = $usermail;
    }
}

}
