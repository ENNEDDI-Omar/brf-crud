<?php
require '../../config/CONNECT.php';


$id = $_POST['id'];
if(isset($_POST['Update'])){
    
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $profil=$_FILES['Profil'];
    $temp_name=$_FILES['Profil']['tmp_name'];
    $folder="assets/images/".$profil;
    $role=$_POST['Roles'];

    
   $requete = "UPDATE `users` SET `Name`= '$name' ,`Email`= '$email' ,`Profil`= '$folder',`Roles`= '$role'  WHERE `id` = $id";
    $query=mysqli_query($conx, $requete);
   if ($query) {
    move_uploaded_file($temp_name, $folder);
    header("location:../../pages/admin/users/index.php");
   }else{
    echo"<h1>INSERTION FAILED</h1>";
   }
}



?>



