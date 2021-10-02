<?PHP

	$dbhost_name = "localhost";  
	$database 	 = "store_my_results";    

	/*************** Limited Privileged User 1 : Insert only **************/
	$username1 = "user_1";         
	$password1 = "3zLfGpaIEwa6Rek1";           
	try 
	{
		$dbo1 = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username1, $password1);
		$dbo1->exec("set names utf8mb4");
		//echo "PDO1 Succcess" . nl2br(PHP_EOL);
	} 
	catch (PDOException $e) 
	{
		//echo "First PDO Fail";
		//$e->getMessage();
		/* here comes customer error message for Admin **/
		die();
	}
	$con1 = mysqli_connect($dbhost_name, $username1, $password1, $database) or die( mysqli_error($con1));
	
	/*************** Limited Privileged User 2 : Select only **************/
	$username2 = "user_2";         
	$password2 = "QRod5SLjNwmRAjA6";           
	try 
	{
		$dbo2 = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username2, $password2);
		$dbo2->exec("set names utf8mb4");
		//echo "PDO2 Succcess" . nl2br(PHP_EOL);
	} 
	catch (PDOException $e) 
	{
		echo "Second PDO Fail";
		$e->getMessage();
		die();
	}
	$con2 = mysqli_connect($dbhost_name, $username2, $password2, $database) or die( mysqli_error($con2));
	
	
	/*************** Limited Privileged User 3 : UPDATE & SELECT only **************/
	$username3 = "user_3";         
	$password3 = "WJsdqgxpNbscqNg3";        
	try 
	{
		$dbo3 = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username3, $password3);
		$dbo3->exec("set names utf8mb4");
		//echo "PDO3 Succcess" . nl2br(PHP_EOL);
	} 
	catch (PDOException $e) 
	{
		echo "Third PDO Fail";
		$e->getMessage();
		die();
	}
	$con3 = mysqli_connect($dbhost_name, $username3, $password3, $database) or die( mysqli_error($con3));
	
	
	/*************** Limited Privileged User 4 : DELETE & SELECT only **************/
	$username4 = "user_4";         
	$password4 = "53F2mVCouVrmuwDA";            
	try 
	{
		$dbo4 = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username4, $password4);
		$dbo4->exec("set names utf8mb4");
		//echo "PDO4 Succcess" . nl2br(PHP_EOL);
	} 
	catch (PDOException $e) 
	{
		echo "Fourth PDO Fail";
		$e->getMessage();
		die();
	}
	$con4 = mysqli_connect($dbhost_name, $username4, $password4, $database) or die( mysqli_error($con4));
	
	
	mysqli_query($con1, "SET time_zone = '+05:30' ");
	mysqli_query($con1, "SET NAMES 'utf8mb4'"); 
	mysqli_query($con1, "set character_set_results='utf8mb4'"); 
	mysqli_query($con2, "SET time_zone = '+05:30' ");
	mysqli_query($con2, "SET NAMES 'utf8mb4'"); 
	mysqli_query($con2, "set character_set_results='utf8mb4'"); 
	mysqli_query($con3, "SET time_zone = '+05:30' ");
	mysqli_query($con3, "SET NAMES 'utf8mb4'"); 
	mysqli_query($con3, "set character_set_results='utf8mb4'"); 
	mysqli_query($con4, "SET time_zone = '+05:30' ");
	mysqli_query($con4, "SET NAMES 'utf8mb4'"); 
	mysqli_query($con4, "set character_set_results='utf8mb4'"); 
?>
