
<?php
  require'../../model/user.php';

if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $passw=$_POST['Password'];
    $profil=$_FILES['Profil']['name'];
    $temp_name=$_FILES['Profil']['tmp_name'];
    $folder="assets/images/".$profil;
    $role=$_POST['Roles'];

    $password=password_hash($passw, PASSWORD_DEFAULT);
    
  
$query=addUserQuery($name, $email, $password,$folder,$role);


 


if (isset($query)) {
   move_uploaded_file($temp_name, $folder);
    header("location:../../pages/admin/users/index.php");
}else{
    echo"<h1>INSERTION FAILED</h1>";
}
}



?>


