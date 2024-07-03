<?php

/**
 *  User class
 */
class User {

    private $username;
    private $usermail;

}
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