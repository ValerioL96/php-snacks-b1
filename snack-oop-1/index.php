<?php

//Creiamo due classi, una per rappresentare un Utente ed una per l'utente PremiumUser.

require_once __DIR__ .'/classes/user.php';
require_once __DIR__ .'/classes/userpremium.php';

$user= new User('Giggi', 'Giggetto@gmail.com');
$userpremium = new UserPremium('Gandalf', 'gandalf@gmail.com', '200$');

var_dump($user, $userpremium0);

//Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser.

require_once __DIR__ . '/classes/membership.php';
//Cerchiamo di usare il piu' possibile getter e setter per accedere e modificare i dati.