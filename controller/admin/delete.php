<?php
require'../../config/CONNECT.php';

$id = $_GET['id'];
$requete = "DELETE FROM users WHERE id='$id'";
$query = mysqli_query($conx, $requete);

if ($query) {
    header("location:../../pages/admin/users/index.php");
} else {
    echo "<h1>DELETE Student Failed</h1>";
}
?>
