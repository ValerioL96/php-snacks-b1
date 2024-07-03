<?php

/**
 * created UserPremium class
 */
class UserPremium {
    private $username;
    private $usermail;
    private $packpremium;

}
/**
 * istances of the UserPremium
 *
 * @param [type] $username
 * @param [type] $usermail
 * @param [type] $packpremium
 */
public function __construct($username, $usermail, $packpremium) {
    $this->username = $username;
    $this->usermail = $usermail;
    $this->pack = $packpremium;
}