<?php

//Creiamo due classi, una per rappresentare un Utente ed una per l'utente PremiumUser.

require_once __DIR__ .'/classes/user.php';
require_once __DIR__ .'/classes/userpremium.php';
require_once __DIR__ .'/classes/membership.php';

$user= new User('Giggi', 'Giggetto@gmail.com');
$userpremium = new UserPremium('Gandalf', 'gandalf@gmail.com', new Membership('2252733725'));

var_dump($user, $userpremium);
var_dump($user->getDiscount(), $userpremium->getDiscount());
var_dump($user->getUsername(), $user->getUsermail(), $userpremium->getMembership());


//Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser.


//Cerchiamo di usare il piu' possibile getter e setter per accedere e modificare i dati.