<?php

session_start();
require '../../config/CONNECT.php';

if (isset($_POST['Name']) && isset($_POST['Password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['Name']);
    $pass = validate($_POST['Password']);

    if (empty($username)) {
        header("location: ../../index.php?error=Full Name is Required");
    } elseif (empty($pass)) {
        header("location: ../../index.php?error=Password is Required");
    } else {

        $requete = "SELECT * FROM users WHERE Name=?";
        $query = mysqli_prepare($conx, $requete);

        mysqli_stmt_bind_param($query, "s", $username);

        mysqli_stmt_execute($query);

        $result = mysqli_stmt_get_result($query);

        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($pass, $row["Password"])) {

            $_SESSION['Roles'] = $row['Roles'];
            if ($row['Roles'] == 'Admin') {
                header("location: ../../pages/admin/dash-admin.php");
            } elseif ($row['Roles'] == 'Teacher') {
                header("location: ../../pages/teacher/dash-teacher.php");
            } elseif ($row['Roles'] == 'Student') {
                header("location: ../../pages/student/dash-student.php");
            }

        } else {
            echo "INVALID INFORMATION";
        }

    }

} else {
    header("location:../../index.php");
}
?>
