<?php
require'../../config/CONNECT.php';

function addUserQuery($name,$email,$passw,$profil,$role){
    global $conx;
$requete="INSERT INTO `users`(`Name`, `Email`, `Password`, `Profil`, `Roles`) 
VALUES ('$name','$email','$passw','$profil','$role')";
$query=mysqli_query($conx,$requete);
return $query;

}

?>