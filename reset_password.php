<?php

    include 'DB/dbconfig.php';

    include "lib/form-manip.php";

    error_reporting(0);

    global $con3;

    global $con2;

    if(isset($_POST['user_login'])){
    
    $u_usn = $_POST['u_usn'];
    $u_password = $_POST['u_password'];

    $query = "UPDATE user SET u_password = '$u_password' WHERE u_usn = '$u_usn'";

    $rst = mysqli_query($con3,$query);

    echo "<script>alert('Login now....')</script>";

    }

   
    redirect('index.php');
?>