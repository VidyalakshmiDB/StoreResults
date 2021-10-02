<?PHP
	/************************************************************************/
	/*	This function filters unwanted chars / tags from form input 		*/
	/************************************************************************/
	function check_form_input($data) 
	{ 
		$data 	=	trim($data);
		$data	=	stripslashes($data);
		$data	=	htmlspecialchars($data);
		$data 	= 	htmlentities($data);
		
		return $data; 
	}
	
	/************************************************************************/
	/*	This function filters unwanted chars / tags from form input 		*/
	/************************************************************************/
	function check_form_input_1($data) 
	{ 
		$data 	=	trim($data);
		$data	=	htmlspecialchars($data);
		$data 	= 	htmlentities($data);
		
		return addslashes($data); 
	}
	
	/************************************************************************/
	/*	This function facilitates safe page redirection						*/
	/************************************************************************/
	function redirect($url) 
	{
		ob_start();
		header('Location: '.$url);
		ob_end_flush();
		die();
	}
		
	/************************************************************************/
	/*	This function facilitates basic debugging feature					*/
	/************************************************************************/
	function debug_me($ln_no, $file_nm, $fn_nm) 
	{
		if ( empty ($fn_nm) )
		{
			echo "<span style = 'background-color:yellow;'><B>DEBUG </B> : " . " Reached at <font color = 'blue'>line #" . $ln_no. "</font> IN <font color = 'brown'>" . $file_nm  . '</font></span>'  .  nl2br(PHP_EOL);
		}
		else
		{
			echo "<span style = 'background-color:yellow;'><B>DEBUG </B> : " . " Reached at <font color = 'blue'>line #" . $ln_no. "</font> IN <font color = 'brown'>" . $file_nm  . ' and in function ' . $fn_nm . '()</font></span>'  .  nl2br(PHP_EOL);
		}
	}
	
	
	/************************************************************************/
	/*	This function inserts a blank line							 		*/
	/************************************************************************/
	function blank_line() 
	{ 
		echo nl2br(PHP_EOL);
	}
	
	/************************************************************************/
	/*	This function facilitates basic debugging feature					*/
	/************************************************************************/
	function show_error_message($ln_no, $file_nm, $fn_nm, $str_err_msg) 
	{
		if ( !empty ($str_err_msg) )
		{
			echo "<span style = 'background-color:yellow;'><B><font color = \"red\">ERROR!!!</font> </B> : " . " Reached at <font color = 'blue'>line #" . $ln_no. "</font> IN <font color = 'brown'>" . $file_nm  . '</font><font color = "red">' . '&nbsp;::&nbsp;'. $str_err_msg . '</font></span>'  .  nl2br(PHP_EOL);
		}
		else
		{
			echo "<span style = 'background-color:yellow;'><B>DEBUG </B> : " . " Reached at <font color = 'blue'>line #" . $ln_no. "</font> IN <font color = 'brown'>" . $file_nm  . ' and in function ' . $fn_nm . '()</font></span>'  .  nl2br(PHP_EOL);
		}
	}
		
	/*
		Ref	:::	https://stackoverflow.com/questions/43618880/mysql-php-insert-with-quotes-and-double-quotes
		
		https://www.php.net/manual/en/function.mysql-real-escape-string.php#101248
		
		Just a little function which mimics 
		the original mysql_real_escape_string but which doesn't need 
		an active mysql connection. Could be implemented as a 
		static function in a database class.
	*/
	
	function mysql_escape_mimic($inp) { 

		if(is_array($inp)) 
			return array_map(__METHOD__, $inp); 

		if(!empty($inp) && is_string($inp)) { 
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
		} 

		return $inp; 
	} 


	
?>