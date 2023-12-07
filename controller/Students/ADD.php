
<?php
  require'../../includes/CONNECT.php';

if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $branch=$_POST['Branch'];
    $profil=$_POST['Profil'];

$requete="INSERT INTO Students(Name, Email, Branch, Profil) 
          VALUES('$name', '$email', '$branch', '$profil')";
$query=mysqli_query($conx,$requete);
if (isset($query)) {
    header("location:../../pages/student/students/students.php");
}else{
    echo"<h1>INSERTION FAILED</h1>";
}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/form.css">
    <title>Document</title>
</head>
<body>
<div id="form-main">
  <div id="form-div">
    <form class="form" method="POST" action="" id="form1">

    
      
      <p class="name">
        <input name="Name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Full-Name" id="name" />
      </p>
      
      <p class="email">
        <input name="Email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="email" />
      </p>
      
      <p class="branch">
        <input name="Branch" type="text" class="validate[required,custom[Branch]] feedback-input" id="email" placeholder="branch" />
      </p>

      <p class="profil">
        <input name="Profil" type="file" accept="image/jpg, image/png, image/jpeg," class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="profil" id="name" />
      </p>
    
      
      
      
      <div class="submit">
        <input type="submit" name="submit" value="Save" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>   
</body>
</html>