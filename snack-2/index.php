<?php
$message="";

if(empty($_GET['username']) || empty($_GET['userage']) || empty($_GET['usermail'])){
    $message ="Errore";
}elseif( strlen($_GET['username'] )<= 3){
    $message= 'Acesso Negato';
}elseif(!str_contains($_GET['usermail'], '@') || !str_contains($_GET['usermail'], '.')){
    $message= 'Acesso Negato';
}elseif(!is_numeric($_GET['userage'])){
    $message= 'Acesso Negato';
}else{
    $message= 'Acesso Riuscito';
}
    echo $message;
//Snack 2
//Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
//che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
//Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
?>



<form action="./index.php" method="GET">
    <div>
        <label for="username">Name</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="userage">Age</label>
        <input type="number" name="userage" id="userage">
    </div>
    <div>
        <label for="usermail">Email</label>
        <input type="email" name="usermail" id="usermail">
    </div>
    <button type="submit">invia</button>
</form>


