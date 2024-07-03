<?php
require_once __DIR__ . '/membership.php';


class UserPremium extends User {
    private $membership;

public function __construct($username, $usermail,Membership $membership) {
    parent :: __construct($username, $usermail);
    $this->membership = $membership;
}

public function getDiscount(){
    return '50%';
}

public function getMembership(){
    return $this->membership;
}

public function setMembership(){
    if(strlen($membership) === 10){
        $this->membership = $membership;
    }
}

}
