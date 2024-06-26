<?php
$name= $_GET["username"];
if(count($_GET)>3){
}
$age =$_GET["userage"];
$mail=$_GET["usermail"];

//Snack 2
//Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
//che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
//Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
?>


<div>
<form action="./index.php" method="GET">
    <label for="username">Name</label>
    <input type="text" name="username" id="username">
</form>
<form action="./index.php" method="GET">
    <label for="userage">Age</label>
    <input type="number" name="userage" id="userage">
</form>
<form action="./index.php" method="GET">
    <label for="usermail">Email</label>
    <input type="email" name="usermail" id="usermail">
</form>
<button type="submit">invia</button>

</div>

    


