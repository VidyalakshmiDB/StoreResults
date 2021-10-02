<?PHP
	/**
	 * Short description for file	:	
	 *		This library contains all the API to manage the Master List of address table [].
	 * Long description for file (if any)...	: --None--
	 *
	 * PHP version 5.5.9
	 *
	 * LICENSE: This source file is subject to version 3.01 of the PHP license
	 * that is available through the world-wide-web at the following URI:
	 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
	 * the PHP License and are unable to obtain it through the web, please
	 * send a note to license@php.net so we can mail you a copy immediately.
	 *
	 * @category   --NA--
	 * @package    --NA--
	 * @author     Srilekha M <srilekhamanjunath@gmail.com>
	 * @copyright  Srilekha M
	 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
	 * @version    1.0
	 * @link       --TBD Later --
	 * @see        
	 * @since      File available since Release 1.0
	 * @deprecated --NA--
 */
?>
<?PHP
	
	function annotate_yes_no($en_id)
	{
		$entity_type_str	=	'';
		
		if ($en_id == 1)
		{
			$entity_type_str	=	"YES";
		}
		else if ($en_id == 0)
		{
			$entity_type_str	=	"No";
		}	
		
		
		return $entity_type_str;
	}
	
	function getTotalNoOfArticles()
	{
		global $con;
		
			$query		=	"SELECT * FROM `rich_contents` ";					
					
			$result1 	=	mysqli_query($con, $query);				
			$num_rows 	= 	mysqli_num_rows($result1);
		
			return $num_rows;
		
	}
	/******************************************************************************/
	/*	This function generates random password (weak) string during registration */
	/******************************************************************************/
	
	function generate_password($length = 10, $complex = 3) 
	{
		$min 	=	"abcdefghijklmnopqrstuvwxyz";
		$num 	=	"0123456789";
		$maj 	=	"ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$symb 	=	"!@#$%^&*()_-=+;:,.?";
		$chars 	=	$min;
		
		if ($complex >= 2) { $chars .= $num; }
		if ($complex >= 3) { $chars .= $maj; }
		if ($complex >= 4) { $chars .= $symb; }
		
		$password = substr( str_shuffle( $chars ), 0, $length );
		
		return $password;
	}
	
	/************************************************************************/
	/*	This function generates secure captcha string for registration page */
	/************************************************************************/
	function generate_captch_str($no_of_bytes)
	{
		$no_of_bytes_requested 	=	$no_of_bytes;
		$final_cptch_str		=	'';
		
		$bytes 				= 	openssl_random_pseudo_bytes($no_of_bytes_requested);
		$tmp_str			=	str_shuffle((bin2hex($bytes)));
		$tmp_str_len		=	strlen($tmp_str);
		
		$cptch_str1			=	substr($tmp_str, 3, ($tmp_str_len - 7));
		$cptch_str2			=	substr($tmp_str, -3, 5);
		
		$final_cptch_str	=	$cptch_str1 . $cptch_str2;
		
		return	$final_cptch_str;
	}

	/************************************************************************/
	/*	This function echos the page tile on different pages		 		*/
	/************************************************************************/
	function show_page_title($title) 
	{ 
		$show_this_string	=	$title;
		
		echo "<div class=\"undermenuarea\">";
			echo "<div class=\"boxedshadow\">";
			echo "</div>";
			echo "<div class=\"grid\">";
				echo "<div class=\"row\">";
					echo "<div class=\"c8\">";
						echo "<h5 class=\"titlehead\">" . $show_this_string . "</h5>";
					echo "</div>";
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead rightareaheader\"><i class=\"icon-map-marker\"></i> " . "Call Us Now " .  "+91-89708-92913" . "</h1>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
	
	/************************************************************************/
	/*	This function echos the page tile on different pages in Session		*/
	/************************************************************************/
	function show_page_title_session($title) 
	{ 
		$show_this_string	=	$title;
		
		echo "<div class=\"undermenuarea\">";
			echo "<div class=\"boxedshadow\">";
			echo "</div>";
			echo "<div class=\"grid\">";
				echo "<div class=\"row\">";
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead leftareaheader\">" . $show_this_string . "</h1>";
					echo "</div>";
					
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead leftareaheader\">" . "<span id='ct' ></span>" . "</h1>";
					echo "</div>";
					
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead rightareaheader\"><i class=\"icon-map-marker\"></i> " . "Call Us Now " .  "+91-89708-92913" . "</h1>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
	
	/********************************************************************************/
	/*	This function echos the page tile on different pages in Admin's Session		*/
	/********************************************************************************/
	function show_page_title_session_admin($title) 
	{ 
		$show_this_string	=	$title . "&nbsp;&nbsp;&nbsp;<font color = \"yellow\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></font>" ;
		
		echo "<div class=\"undermenuarea\">";
			echo "<div class=\"boxedshadow\">";
			echo "</div>";
			echo "<div class=\"grid\">";
				echo "<div class=\"row\">";
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead leftareaheader\">" . $show_this_string . "</h1>";
					echo "</div>";
					
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead leftareaheader\">" . "<span id='ct' ></span>" . "</h1>";
					echo "</div>";
					
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead rightareaheader\"><i class=\"icon-map-marker\"></i> " . "Call Us Now " .  "+91-89708-92913" . "</h1>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
	
	/********************************************************************************/
	/*	This function echos the page tile on different pages in Counsellor's Session*/
	/********************************************************************************/
	function show_page_title_session_counsellor($title) 
	{ 
		$show_this_string	=	$title . "&nbsp;&nbsp;&nbsp;<font color = \"white\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></font>" ;
		
		echo "<div class=\"undermenuarea\">";
			echo "<div class=\"boxedshadow\">";
			echo "</div>";
			echo "<div class=\"grid\">";
				echo "<div class=\"row\">";
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead leftareaheader\">" . $show_this_string . "</h1>";
					echo "</div>";
					
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead leftareaheader\">" . "<span id='ct' ></span>" . "</h1>";
					echo "</div>";
					
					echo "<div class=\"c4\">";
						echo "<h1 class=\"titlehead rightareaheader\"><i class=\"icon-map-marker\"></i> " . "Call Us Now " .  "+91-89708-92913" . "</h1>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	}
	


	function getUserNameByID($e_id, $cid)
	{ 
		$emp_id		=	$e_id;
		$con		=	$cid;
		
		$sql		=	"SELECT * FROM users_accounts WHERE id = '$emp_id' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result))
		{
			$user_id	=	$row['user_id'];			
		}
		
		return $user_id; 
	}		
	
	/* create time stamp string for File Last Updated Time */
	
	function getFileLastChangedTimeStamp()
	{ 
		date_default_timezone_set('Asia/Calcutta');
		
		$last_update_str	= "This page was last modified at: " . date ("M d Y H:i:s.", getlastmod()) . " IST";
		
		return $last_update_str; 
	}	

	
	
	/* 
		Function to fetch Page Code by File Name
	*/	
	
	function getPageCodeByFileName($f_name, $cid)
	{ 
		$file_nm	=	$f_name;
		$con		=	$cid;
		$page_code	=	'-1';
		
		$sql		=	"SELECT page_code FROM hv_pg_meta_data_tbl WHERE pg_name = '$file_nm' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		$num_rows 	= 	mysqli_num_rows($result);
		
		if ($num_rows > 0) 	// record exists
		{
			while($row = mysqli_fetch_array($result))
			{
				$page_code	=	$row['page_code'];	
				return $page_code;
			}
		}
		else				// no matching record found, return default value
		{
			return $page_code; 
		}
	}		
	
	
	/* 
		Function to fetch Page Code by File Name
	*/	
	
	function getPageFormCodeByFileName($f_name, $cid)
	{ 
		$file_nm	=	$f_name;
		$con		=	$cid;
		$page_form_code	=	'-1';
		
		$sql		=	"SELECT page_form_code FROM hv_pg_meta_data_tbl WHERE pg_name = '$file_nm' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		$num_rows 	= 	mysqli_num_rows($result);
		
		if ($num_rows > 0) 	// record exists
		{
			while($row = mysqli_fetch_array($result))
			{
				$page_form_code	=	$row['page_form_code'];	
				return $page_form_code;
			}
		}
		else				// no matching record found, return default value
		{
			return $page_form_code; 
		}
	}	
	
	/* Function to fetch Quotation String by Page Code */	
	function getPageQuoteByCode($pg_code, $cid)
	{ 
		$page_code	=	$pg_code;
		$con		=	$cid;
		$quotation_str	=	'';
		
		$sql		=	"SELECT * FROM hv_pg_meta_data_tbl WHERE page_code = '$page_code' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result))
		{
			$quotation_str	=	$row['quotation_str'];			
		}
		
		return $quotation_str; 
	}		
	
	/* Function to fetch Name String of the speaker/author of the Quotation string for this Page Code */
	
	function getPageQuoteByName($pg_code, $cid)
	{ 
		$page_code	=	$pg_code;
		$con		=	$cid;
		$quoted_by	=	'';
		
		$sql		=	"SELECT * FROM hv_pg_meta_data_tbl WHERE page_code = '$page_code' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result))
		{
			$quoted_by	=	$row['quoted_by'];			
		}
		
		return $quoted_by; 
	}		
	
	/* Function to fetch String for hidden panel message */	
	function getPageHiddenPanelMsg($f_name, $cid)
	{ 
		$page_file_name				=	$f_name;
		$con					=	$cid;
		$hv_hidden_panel_msg_nm	=	'Welcome to HIVMitra.com';
		
		$sql		=	"SELECT hv_hidden_panel_msg FROM hv_pg_meta_data_tbl WHERE pg_name = '$page_file_name' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($result))
		{
			$hv_hidden_panel_msg_nm	=	$row['hv_hidden_panel_msg'];			
		}
		
		return $hv_hidden_panel_msg_nm; 
	}		
	
	/* Function to fetch String for page title */	
	function getPageTitleFromFileName($f_name, $cid)
	{ 
		$page_file_name			=	$f_name;
		$con					=	$cid;
		$page_title_nm			=	'HIV Mitra - Where life rocks!!!';
		
		$sql		=	"SELECT pg_title FROM hv_pg_meta_data_tbl WHERE pg_name = '$page_file_name' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		$num_rows 	= 	mysqli_num_rows($result);
		
		if ($num_rows > 0) 	// record exists
		{
			while($row = mysqli_fetch_array($result))
			{
				$page_title_nm			=	$row['pg_title'];	
				
				return $page_title_nm;
			}
		}
		else				// no matching record found, return default value
		{
			return $page_title_nm; 
		}
		
	}		
		
	function getCurrentDateDDMMYYYY()
	{
		date_default_timezone_set('Asia/Calcutta');

		// Then call the date functions
		$date = date('m-d-Y');
		
		return $date;
	}
	
	/* Function to verify if this email ID already is in the newsletter subscription list  */	
	function checkIfThisUserIsInNewsletterSubscriptionList($cid, $email_id)
	{ 
		$this_subscription_email	=	$email_id;
		$con						=	$cid;
		
		$result						=	'';
		
		$sql		=	"SELECT * FROM u_newsletter_subscribers WHERE subscription_email = '$this_subscription_email' ";		
				
		$result 	=	mysqli_query($con, $sql);
		
		$num_rows 	= 	mysqli_num_rows($result);
		
		if ($num_rows > 0) 	// record exists
		{
			$result	= 1;		// Already subscribed
		}
		else				// no matching record found, return default value
		{
			$result	= 0;		// Valid subscription  
		}
		
		return $result;
		
	}	
	
	function clean_profanity_email_url_nos_tags($bad_str) 
	{
		//	For emails:
		$pattern1 		= 	"/[^@\s]*@[^@\s]*\.[^@\s]*/";
		$pattern2 		= 	"/[a-zA-Z]*[:\/\/]*[A-Za-z0-9\-_]+\.+[A-Za-z0-9\.\/%&=\?\-_]+/i";		
		//	Numbers
		$pattern3 		= 	"#[0-9]*#";		
		$allowed 		= 'A-Za-z0-9 .,*;?!:-';
		// words to be filtered out - blacklisted words
		$wordlist 		=	"
								crap|dang|shoot|fuck|fucking|fucked|fuked|fuckin|fucker|ass|email|address|dick|lick|kiss|shit|dog|asshole|penis|PENIS|Penis|cunt|
								vagina|vulva|slut|whore|bang|hore|LGBT|chod|chodna|chodu|chutiya|gandu|gandoo|gandmara|maadarchod|madarchod|bahenchod|
								2F4U|4YEO|FYEO|ASAP|ALAP|AEAP|ASL|BULL|bull|Bull|SHIT|Shit|BRB|one|two|three|four|fore|fiv|five|six|seven|eight|nine|zero|ten
							";
		
		//$replacement 	=	"[removed]";
		$replacement 	=	" ";
		
		$finally		=		$bad_str;
				
		$pure_text1  	=	preg_replace($pattern1, $replacement, $finally);			// Apply rule 1
		$pure_text2 	=	preg_replace($pattern2, $replacement, $pure_text1);  		// Apply rule 2
		$pure_text3 	=	preg_replace("/\b($wordlist)\b/ie", 'preg_replace("/./","*","\\1")', $pure_text2);  // Apply rule 3
		$pure_text4 	=	preg_replace($pattern3, '', $pure_text3);  				// Apply rule 4
		$pure_text5 	=	strip_tags($pure_text4, '<BR>'); 						// Apply rule 5
		$pure_text6 	=	preg_replace('/[^'.$allowed.']/iu', ' ' , $pure_text5); 
		$pure_text7		=	sentence_case($pure_text6);
		
		// Replacing stars by white spaces
		$search  		= 	'*';
		$replace 		= 	' ';
		
		$pure_text8		=		str_replace($search, $replace, $pure_text7);
		
		// Finally removing the multiple consecutive white spaces
		$pure_text9		=		str_replace('  ', ' ', $pure_text8);
		
		return $pure_text9;
		
	}

	function extract_website_nm($str_url) 
	{
		$input = $str_url;

		// In case scheme relative URI is passed, e.g., //www.google.com/
		$input = trim($input, '/');

		// If scheme not included, prepend it
		if (!preg_match('#^http(s)?://#', $input)) {
			$input = 'http://' . $input;
		}

		$urlParts = parse_url($input);

		// remove www
		$domain = preg_replace('/^www\./', '', $urlParts['host']);

		return $domain;
	}

	function getRemoteIPAddressFromUserAgent()
	{
		//Test if it is a shared client
		if (!empty($_SERVER['HTTP_CLIENT_IP']))
		{
		  $ip	=	$_SERVER['HTTP_CLIENT_IP'];
		//Is it a proxy address
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
		  $ip	=	$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		  $ip	=	$_SERVER['REMOTE_ADDR'];
		}
		//The value of $ip at this point would look something like: "192.0.34.166"
		$ip		= 	ip2long($ip);		//The $ip would now look something like: 1073732954
		
		return $ip;
	}
	
	
	function truncate($text, $length) 
	{
	   $length = abs((int)$length);
	   if(strlen($text) > $length) 
	   {
		  $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
	   }
	   return($text);
	}
	
	
	function show_branch_of_study($study_branch_code) 
	{
		$br_code = abs((int)$study_branch_code);

		$branch_nm	=	'';
		
		
		/*
					
								<option value="7"></option>
		
		
		*/

		switch($br_code)
		{
			case 1: 	$branch_nm	=	'Bank IBPS';
						break;

			case 2: 	$branch_nm	=	'Soft Skills';
						break;
						
			case 3: 	$branch_nm	=	'CRT (Campus Recruitment Training)';
						break;
						
			case 4: 	$branch_nm	=	'MBA Entrance';
						break;
						
			case 5: 	$branch_nm	=	'IELTS & TOEFL';
						break;
			
			case 6: 	$branch_nm	=	'SSC Entrance';
						break;
						
			case 7: 	$branch_nm	=	'MCA Entrance';
						break;
			case 8: 	
			default:	$branch_nm	=	'Other Courses';
						break;
		}

		return($branch_nm);
	}
	
	
	// seed with microseconds - user for GET param encryption
	function make_rand()
	{
		list($usec, $sec) = explode(' ', microtime());
		$seed	=	(float) $sec + ((float) $usec * 100000);
		mt_srand($seed);
		$randval = mt_rand();
		
		return $randval;
	}
	
	
	// Get Max number of Student ID
	function get_max_student_id()
	{
		$max_u_id	=	'';
		global 			$con2;
		
		$query = "SELECT MAX(id) AS C FROM `users_accounts` WHERE `user_type` = 2";
		
		$result 	=	mysqli_query($con2, $query);
		$row 		=	mysqli_fetch_object($result);
				
		if ($row->C > 0)
		{
			$max_u_id	=	$row->C;
		}
		else
		{
			$max_u_id	=	0;
		}
		return $max_u_id;
	}
?>