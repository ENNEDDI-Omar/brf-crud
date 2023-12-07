<?php require'../../../config/CONNECT.php';
echo'OMAR';

$id=$_GET['id'];
$requete="SELECT * FROM users where id = '$id'";
$query=mysqli_query($conx, $requete);
$rows = mysqli_fetch_assoc($query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/form.css">
    <title>Document</title>
</head>
<body>


   

<div id="form-main">
  <div id="form-div">
    <form class="form" method="POST" action="../../../controller/admin/update.php" enctype="multipart/form-data"  id="form1">
    <p class="name">
        <input name="id" type="hidden" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" value="<?php echo $rows['id']?>" />
      </p>
    
      
      <p class="name">
        <input name="Name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" value="<?php echo $rows['Name']?>" />
      </p>
      
      <p class="email">
        <input name="Email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="email" value="<?php echo $rows['Email']?>" />
      </p>

      <p class="profil">
        <input name="Profil" type="file" accept="image/jpg, image/png, image/jpeg, file.txt" class="validate[required,custom[onlyImages],length[0,100]] feedback-input" placeholder="Profil" id="profil" value="<?php echo $rows['Profil'] ?>" />
      </p>
       
      <p>
      <select name="Roles" id="role" class="feed-back input">
    <option value="" disabled>Select role</option>
    <?php
    $requete1 = "SELECT DISTINCT Roles FROM users";
    $query1 = mysqli_query($conx, $requete1);

    if ($query1) {
        while ($rows = mysqli_fetch_assoc($query1)) {
            echo '<option value="' . $rows['Roles'] . '">' . $rows['Roles'] . '</option>';
        }
    }
    ?>
</select>

      </p>
    
      
    

      
      <div class="submit">
        <input type="submit" name="Update" value="Update" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>   
</body>
</html>