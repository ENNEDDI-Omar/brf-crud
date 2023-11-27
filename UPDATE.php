
<?php
include 'CONNECT.php';
$id = $_GET['id'];

if(isset($_POST['Update'])){
    $name=$_POST['Full_Name'];
    $email=$_POST['Email'];
    $branch=$_POST['Branch'];
    $profil=$_POST['Profil'];

$requete="UPDATE `students` SET `Full_Name`='$name',`Email`='$email',`Branch`='$branch' WHERE id = $id";
$query=mysqli_query($conx,$requete);
if (isset($query)) {
    header("location:index.php");
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
    <link rel="stylesheet" href="../brf-crud/css/form.css">
    <title>Document</title>
</head>
<body>

    <?php
    $requete="SELECT * FROM Students where id = $id";
    $query=mysqli_query($conx, $requete);
    $rows = mysqli_fetch_assoc($query);
    
    
    ?>

<div id="form-main">
  <div id="form-div">
    <form class="form" method="POST"  id="form1">

    
      
      <p class="name">
        <input name="Full_Name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" value="<?php echo $rows['Full_Name']?>" />
      </p>
      
      <p class="email">
        <input name="Email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="email" value="<?php echo $rows['Email']?>" />
      </p>
      
      <p class="branch">
        <input name="Branch" type="text" class="validate[required,custom[Branch]] feedback-input" id="email" placeholder="branch" value="<?php echo $rows['Branch']?>" />
      </p>

      <p class="profil">
        <input name="Profil" type="file" accept="image/jpg, image/png, image/jpeg," class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
    
      
      
      
      <div class="submit">
        <input type="submit" name="Update" value="Update" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>   
</body>
</html>