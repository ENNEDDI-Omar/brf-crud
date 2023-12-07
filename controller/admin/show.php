<?php
  require'../../../config/CONNECT.php';

  $requete="SELECT * FROM users";
  $query=mysqli_query($conx, $requete);


  if ( mysqli_num_rows($query) >0) {
    while ($rows=mysqli_fetch_assoc($query)) {
      
   