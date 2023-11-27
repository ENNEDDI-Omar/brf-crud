<?php
include 'CONNECT.php';

$id = $_GET['id'];
$requete = "DELETE FROM Students WHERE id='$id'";
$query = mysqli_query($conx, $requete);

if ($query) {
    header("location:index.php");
} else {
    echo "<h1>DELETE Student Failed</h1>";
}
?>
