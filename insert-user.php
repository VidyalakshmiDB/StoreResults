<?php
    include "DB/dbconfig.php";

    include "lib/form-manip.php";

    global $dbo1;
    global $con1;

    $u_name           = $_POST['name'];
    $u_usn            = $_POST['usn'];
    $u_pass           = $_POST['password'];  
    $u_user_role      = $_POST['user_role'];

    $tbl_nm             = 'user';

    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO user (u_name, u_usn, u_password, u_user_role)
        values ('$u_name','$u_usn','$u_pass','$u_user_role')";
        if ($dbo1->query($sql)){
            echo "New record is inserted sucessfully";
        }
        else {
            echo "Error: ". $sql ." ". $conn->error;
        }
        $con1->close();
    }
?>