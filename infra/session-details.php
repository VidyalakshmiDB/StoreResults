<?PHP
    include "DB/dbconfig.php";

$user_id =  $_SESSION['id']; 
$sql = "SELECT * FROM  `user` WHERE  id = '$user_id' "; 
$result = mysqli_query($con2, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) )
{
    $u_id = $row['id'];  
    $u_name = $row['u_name'];
    $u_email = $row['u_usn'];
    $u_cell = $row['u_password'];
    $u_user_role = $row['u_user_role'];
}
    
?>
