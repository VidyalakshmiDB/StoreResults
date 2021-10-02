]
<?PHP

	/************************************************************************/
	/*	Function checks if table : jm_blr_rs_participant_list is EMPTY	 	*/
	/************************************************************************/
    
    function is_shivir_participant_table_empty()
	{
		global 		$dbo2;
		
		$count	=	0;		// rows count
        
        $tbl_nm	=	'jm_blr_rs_participant_list';	
				
		$sql	=	"SELECT count(1) FROM `$tbl_nm` ";
		
		$count 	= $dbo2->query($sql)->fetchColumn();
						
		return $count; 		
	}   
	
    /********************************************************************************************************/
	/*	This function check if this company is ALREADY registered based on registered email address			*/
	/********************************************************************************************************/
    
    function is_this_participant_already_registered($emil, $mobil, $dob)
	{
		global 				$dbo2;

		$email_given		=	$emil;
		$mobile_no_given	=	$mobil;
		$dob_given			=	$dob; 
		
		$registration_exist	=	0;
        
		$tbl_nm			=	'jm_blr_rs_participant_list';	
				
		$sql			=	"SELECT count(1) FROM `$tbl_nm` WHERE email  = '$email_given' AND mobile_no = '$mobile_no_given' AND dob = '$dob_given' ";
		
		$registration_exist 	= 	$dbo2->query($sql)->fetchColumn();
						
		return $registration_exist; 
	}  

	function register_new_shivir_participant
	(
		$psv_id,
		$bhag_id,
		$nagar_id,
		$vasathi_id,
		$branch_type,
		$branch_nm,	 
		$participant_type,
		$participant_nm,
		$participant_father_nm,
		$is_shulka_paid,
		$shulka_payment_ref,	
		$studying_in,
		$referred_by,
		$dob,
		$blood_grp,
		$dayitva_nm,
		$email,
		$mobile_no,
		$whatsapp_no,
		$emergency_contact_no,
		$address_present,
		$address_permanent,
		$existing_ganvesh,
		$note
	)
	{
		global 		$dbo1;
		
		$tbl_nm		=	'jm_blr_rs_participant_list';
		
		// Receieved params 
		
		//	exit;
		
		$psv_id		=	$psv_id; 
		 
		$bhag_id	=	$bhag_id; 
		$nagar_id	=	$nagar_id; 
		$vasathi_id	=	$vasathi_id; 
		$branch_type	=	$branch_type; 
		$branch_nm	=	$branch_nm; 	 
		$participant_type	=	$participant_type; 
		$participant_nm	=	$participant_nm; 
		$participant_father_nm	=	$participant_father_nm; 
		$is_shulka_paid	=	$is_shulka_paid; 
		$shulka_payment_ref	=	$shulka_payment_ref; 	
		$studying_in	=	$studying_in; 
		$referred_by	=	$referred_by; 
		$dob	=	$dob; 
		$blood_grp	=	$blood_grp; 
		$dayitva_nm	=	$dayitva_nm; 
		$email	=	$email; 
		$mobile_no	=	$mobile_no; 
		$whatsapp_no	=	$whatsapp_no; 
		$emergency_contact_no	=	$emergency_contact_no; 
		$address_present	=	$address_present; 
		$address_permanent	=	$address_permanent; 
		$existing_ganvesh	=	$existing_ganvesh;
		$note	=	$note;
		 
		//	added_on  -- shall be current time stamp / auto-insert		
		$added_by		=	-1;		
		        
		// Setting default values
        $is_deleted =   0;   

		date_default_timezone_set('Asia/Kolkata');
        	
		try 
		{ 
			$dbo1->beginTransaction();
			
			// Query definition
			echo $query	=	"INSERT INTO $tbl_nm
						(
							psv_id,
							bhag_id,
							nagar_id,
							vasathi_id,
							branch_type,
							branch_nm,	 
							participant_type,
							participant_nm,
							participant_father_nm,
							is_shulka_paid,
							shulka_payment_ref,	
							studying_in,
							referred_by,
							dob,
							blood_grp,
							dayitva_nm,
							email,
							mobile_no,
							whatsapp_no,
							emergency_contact_no,
							address_present,
							address_permanent,
							existing_ganvesh,
							note,						
							added_by,
							is_deleted
						) 
						VALUES
						(
							'$psv_id',
							'$bhag_id',
							'$nagar_id',
							'$vasathi_id',
							'$branch_type',
							'$branch_nm',	 
							'$participant_type',
							'$participant_nm',
							'$participant_father_nm',
							'$is_shulka_paid',
							'$shulka_payment_ref',	
							'$studying_in',
							'$referred_by',
							'$dob',
							'$blood_grp',
							'$dayitva_nm',
							'$email',
							'$mobile_no',
							'$whatsapp_no',
							'$emergency_contact_no',
							'$address_present',
							'$address_permanent',
							'$existing_ganvesh',
							'$note', 
							'$added_by',
							'$is_deleted'
						)
					";	// end of query definition 
						
			/////////////////////////////////////////////////////////////////////////
			// Prepared destinationment 
			$stmt = $dbo1->prepare($query);
			
			// Binding the parameters				
			$stmt->bindParam(':psv_id', 	$psv_id);
			$stmt->bindParam(':bhag_id', 	$bhag_id);
			$stmt->bindParam(':nagar_id', 	$nagar_id);
			$stmt->bindParam(':vasathi_id', 	$vasathi_id);
			$stmt->bindParam(':branch_type', 	$branch_type);
			$stmt->bindParam(':branch_nm', 	$branch_nm);
			$stmt->bindParam(':participant_type', 	$participant_type);
			$stmt->bindParam(':participant_nm', 	$participant_nm);
			$stmt->bindParam(':participant_father_nm', 	$participant_father_nm);
		 
			$stmt->bindParam(':is_shulka_paid', 	$is_shulka_paid);
			$stmt->bindParam(':shulka_payment_ref', 	$shulka_payment_ref);
			
			$stmt->bindParam(':studying_in', 	$studying_in);
			$stmt->bindParam(':referred_by', 	$referred_by);
			
			$stmt->bindParam(':dob', 	$dob);
			$stmt->bindParam(':blood_grp', 	$blood_grp);
			
			$stmt->bindParam(':dayitva_nm', 	$dayitva_nm);
		
			$stmt->bindParam(':email', 	$email);
			$stmt->bindParam(':mobile_no', 	$mobile_no);
			$stmt->bindParam(':whatsapp_no', 	$whatsapp_no);
			$stmt->bindParam(':emergency_contact_no', 	$emergency_contact_no);
			
			$stmt->bindParam(':address_present', 	$address_present);
			$stmt->bindParam(':address_permanent', 	$address_permanent);
			
			$stmt->bindParam(':existing_ganvesh', $existing_ganvesh);
			$stmt->bindParam(':note', 	$note); 
			
			$stmt->bindParam(':added_by',			$added_by);
			$stmt->bindParam(':is_deleted', 		$is_deleted);
		
			// Executes prepared query + bind params
			$stmt->execute();
				
			$lastRow = $dbo1->lastInsertId('$tbl_nm');	
			
			//	Commits the transaction
			$dbo1->commit();				
		}
		catch(PDOException $e)
		{
			// 	Setting the critical error notification 
			//	for calling function
			$lastRow	=	 -1;		
			$dbo1->rollback(); 
			//	print "Error!: " . $e->getMessage() . nl2br(PHP_EOL); 	
		}
		
		//	Returns the ID of inserted record.
		 
		return $lastRow; 		
	}


	/********************************************************************************/
	/*																				*/
	/*	Function returns details of country based on country ID - in an array		*/
	/*																				*/
	/********************************************************************************/
	
	function get_shivir_registration_in_array($rgn_id)
	{
		global 						$dbo2;
		
		$tbl_nm					=	'jm_blr_rs_participant_list';
		$regn_no	   		 	=	$rgn_id;
		$participant_details	= 	array();
		
		if (is_numeric($regn_no) )
		{
			$regn_no	=	intval($regn_no);
			
			if ($regn_no <= 0) 
			{
				$regn_no = -1;	// This is INVALID ID
			}
		}
		else
		{
			// If string val is supplied as argument by caller API, default 
			// value will be set to 1 (ID = 1 - in alphabetic order)
			$regn_no = 1;	
		}			
		
		$sql	=	"SELECT * FROM $tbl_nm where id = ? ";
		
		$stmt	=	$dbo2->prepare($sql);
	
		if ( $stmt->execute( array( $regn_no ) ) )
		{
			while ($row = $stmt->fetch())
			{
				array_push($participant_details, $row['id']);
				array_push($participant_details, $row['psv_id']);
				
				array_push($participant_details, $row['bhag_id']);
				
				array_push($participant_details, $row['nagar_id']);
				array_push($participant_details, $row['vasathi_id']);
				array_push($participant_details, $row['branch_type']);
				array_push($participant_details, $row['branch_nm']);
				
				array_push($participant_details, $row['participant_type']);
				array_push($participant_details, $row['participant_nm']);
				array_push($participant_details, $row['participant_father_nm']);
				array_push($participant_details, $row['is_shulka_paid']);
				
				array_push($participant_details, $row['shulka_payment_ref']);
				array_push($participant_details, $row['studying_in']);
				array_push($participant_details, $row['referred_by']);
				array_push($participant_details, $row['dob']);
				
				array_push($participant_details, $row['blood_grp']);
				array_push($participant_details, $row['dayitva_nm']);
				array_push($participant_details, $row['email']);
				array_push($participant_details, $row['mobile_no']);
				array_push($participant_details, $row['whatsapp_no']);
				
				array_push($participant_details, $row['emergency_contact_no']);
				array_push($participant_details, $row['address_present']);
				array_push($participant_details, $row['address_permanent']);
				array_push($participant_details, $row['existing_ganvesh']);
				array_push($participant_details, $row['note']);
				array_push($participant_details, $row['added_on']);
				array_push($participant_details, $row['added_by']);
				array_push($participant_details, $row['is_deleted']);
			}
		}
		else
		{
			; 	// do NOTHING, let empty array go to caller function / API
			//	echo 'Error???' . nl2br(PHP_EOL);
		}
		
		return $participant_details;
	}

	///////////////////	 HELPER APIS ///////////////
	function get_prant_name_by_id($prnt_id)
	{
		global 					$dbo2;
		
		$prant_id_given		=	intval($prnt_id);
        
        $tbl_nm	    		=	'jm_blr_rs_praanta';	
				
		$prant_nm			=	'';
		
		//	Query definition
		$query	 =	"SELECT name FROM $tbl_nm WHERE id = ?";		
 
		// Preparing the query
		$stmt 			= $dbo2->prepare($query);
		
		// Query execution
		$stmt->execute( [$prant_id_given] );
		
		//	Fetching the results
		$prant_nm 	= $stmt->fetchColumn();
		
		return $prant_nm;
	}
	
	function get_prant_id_of_vibhag_id($vbhg_id)
	{
		global 					$dbo2;
		
		$vibhag_id_given	=	intval($vbhg_id);
        
        $tbl_nm	   			=	'jm_blr_rs_vibhag';	
				
		$prant_id			=	'';
		
		//	Query definition
		$query		=	"SELECT praanta_id FROM $tbl_nm WHERE id = ?";		
 
		// Preparing the query
		$stmt 		= $dbo2->prepare($query);
		
		// Query execution
		$stmt->execute( [$vibhag_id_given] );
		
		//	Fetching the results
		$praanta_id 	= $stmt->fetchColumn();
		
		return $praanta_id;
	}
	
	function get_vibhag_name_by_id($vbhg_id)
	{
		global 					$dbo2;
		
		$vibhag_id_given		=	intval($vbhg_id);
        
        $tbl_nm	    		=	'jm_blr_rs_vibhag';	
				
		$vibhag_nm			=	'';
		
		//	Query definition
        $query	 =	"SELECT name FROM $tbl_nm WHERE id = ?";		
 
		// Preparing the query
		$stmt 			= $dbo2->prepare($query);
		
		// Query execution
		$stmt->execute( [$vibhag_id_given] );
		
		//	Fetching the results
		$vibhag_nm 	= $stmt->fetchColumn();
		
		return $vibhag_nm;
	}
	
	function does_this_bhag_exist($bhg_nm, $bhag_cod, $vibhg_id)
	{
		global 				$dbo2;

		$name_given			=	$bhg_nm;
		$bhag_code_given	=	$bhag_cod;
		$vibhag_id_given	=	$vibhg_id;
		
		$bhag_exist			=	0;
        
		$tbl_nm			=	'jm_blr_rs_bhag';	
				
		$sql			=	"SELECT count(1) FROM `$tbl_nm` WHERE name  = '$name_given' AND vibhag_id = '$vibhag_id_given' AND bhag_code = '$bhag_code_given' ";
		
		$bhag_exist 	= 	$dbo2->query($sql)->fetchColumn();
						
		return $bhag_exist; 
	}
	
	function register_new_bhag($vibhg_id, $bhg_nm, $bhg_alias_nm, $bhag_cod, $desc, $ad_by)
	{
		global 		$dbo1;
		
		$tbl_nm		=	'jm_blr_rs_bhag';
		
		// Receieved params 
		$vibhag_id		=	$vibhg_id; 
		$name			=	$bhg_nm; 
		$alias_name		=	$bhg_alias_nm; 
		$bhag_code		=	$bhag_cod; 
		$description	=	$desc;
		 
		//	added_on  -- shall be current time stamp / auto-insert		
		$added_by		=	$ad_by;		
		        
		// Setting default values
        $is_deleted =   0;   
		$is_updated =   0; 
		
		date_default_timezone_set('Asia/Kolkata');
        	
		try 
		{ 
			$dbo1->beginTransaction();
			
			// Query definition
			echo $query	=	"INSERT INTO $tbl_nm
						(
							vibhag_id,
							name,
							alias_name,
							bhag_code,
							description, 			
							added_by,
							is_updated,
							is_deleted 
						) 
						VALUES
						(
							'$vibhag_id',
							'$name',
							'$alias_name',
							'$bhag_code',
							'$description',
							'$added_by',
							'$is_updated',
							'$is_deleted'
						)
					";	// end of query definition 
						
			// Prepared statement 
			$stmt = $dbo1->prepare($query);
			
			// Binding the parameters				
			$stmt->bindParam(':vibhag_id', 		$vibhag_id);
			$stmt->bindParam(':name', 			$name);
			$stmt->bindParam(':alias_name', 	$alias_name);
			$stmt->bindParam(':bhag_code', 		$bhag_code);
			$stmt->bindParam(':description', 	$description);
			$stmt->bindParam(':added_by',		$added_by);
			$stmt->bindParam(':is_updated', 	$is_updated);
			$stmt->bindParam(':is_deleted', 	$is_deleted);
		
			// Executes prepared query + bind params
			$stmt->execute();
				
			$lastRow = $dbo1->lastInsertId('$tbl_nm');	
			
			//	Commits the transaction
			$dbo1->commit();				
		}
		catch(PDOException $e)
		{
			// 	Setting the critical error notification 
			//	for calling function
			$lastRow	=	 -1;		
			$dbo1->rollback(); 
			//	print "Error!: " . $e->getMessage() . nl2br(PHP_EOL); 	
		}
		
		//	Returns the ID of inserted record.
		 
		return $lastRow; 		
	}
	
	function get_bhag_name_by_id($bhg_id)
	{
		global 					$dbo2;
		
		$bhag_id_given		=	intval($bhg_id);
        
        $tbl_nm	    		=	'jm_blr_rs_bhag';	
				
		$bhag_nm			=	'';
		
		//	Query definition
        $query	 =	"SELECT name FROM $tbl_nm WHERE id = ?";		
 
		// Preparing the query
		$stmt 			= $dbo2->prepare($query);
		
		// Query execution
		$stmt->execute( [$bhag_id_given] );
		
		//	Fetching the results
		$bhag_nm 	= $stmt->fetchColumn();
		
		return $bhag_nm;
	}
	
		/********************************************************************************/
	/*																				*/
	/*	Function returns details of country based on country ID - in an array		*/
	/*																				*/
	/********************************************************************************/
	
	function get_bhag_details_in_array($bhg_id)
	{
		global 				$dbo2;
		
		$tbl_nm			=	'jm_blr_rs_bhag';
		$bhag_id		=	$bhg_id;
		$bhag_details	= 	array();
		
		if (is_numeric($bhag_id) )
		{
			$bhag_id	=	intval($bhag_id);
			
			if ($bhag_id <= 0) 
			{
				$bhag_id = -1;	// This is INVALID ID
			}
		}
		else
		{
			// If string val is supplied as argument by caller API, default 
			// value will be set to 1 (ID = 1 - in alphabetic order)
			$bhag_id = 1;	
		}			
		
		$sql	=	"SELECT * FROM $tbl_nm where id = ? ";
		
		$stmt	=	$dbo2->prepare($sql);
	
		if ( $stmt->execute( array( $bhag_id ) ) )
		{
			while ($row = $stmt->fetch())
			{
				array_push($bhag_details, $row['id']);
				
				array_push($bhag_details, $row['vibhag_id']);
				
				array_push($bhag_details, $row['name']); 
				array_push($bhag_details, $row['alias_name']);
				array_push($bhag_details, $row['bhag_code']);
				array_push($bhag_details, $row['description']);
				 
				array_push($bhag_details, $row['added_on']);
				array_push($bhag_details, $row['added_by']);
				array_push($bhag_details, $row['is_updated']);
				array_push($bhag_details, $row['is_deleted']);
			}
		}
		else
		{
			; 	// do NOTHING, let empty array go to caller function / API
			//	echo 'Error???' . nl2br(PHP_EOL);
		}
		
		return $bhag_details;
	}
	 
	
	function get_nagar_name_by_id($ngr_id)
	{
		global 					$dbo2;
		
		$nagar_id_given		=	intval($ngr_id);
        
        $tbl_nm	    		=	'jm_blr_rs_nagar';	
				
		$nagar_nm			=	'';
		
		//	Query definition
        $query	 =	"SELECT name FROM $tbl_nm WHERE id = ?";		
 
		// Preparing the query
		$stmt 			= $dbo2->prepare($query);
		
		// Query execution
		$stmt->execute( [$nagar_id_given] );
		
		//	Fetching the results
		$nagar_nm 	= $stmt->fetchColumn();
		
		return $nagar_nm;
	}

	function get_vasathi_name_by_id($vsthi_id)
	{
		global 					$dbo2;
		
		$vasathi_id_given		=	intval($vsthi_id);
        
        $tbl_nm	    		=	'jm_blr_rs_vasathi';	
				
		$vasathi_name	 	=	'';
		
		//	Query definition
        $query	 =	"SELECT vasathi_nm FROM $tbl_nm WHERE id = ?";		
 
		// Preparing the query
		$stmt 			= $dbo2->prepare($query);
		
		// Query execution
		$stmt->execute( [$vasathi_id_given] );
		
		//	Fetching the results
		$vasathi_name 	= $stmt->fetchColumn();
		
		return $vasathi_name;
	}
	
	function show_branch_type_by_id($brn_id)
	{
		if ($brn_id == 1)
		{
			$branch_type_nm = 'Shakha';
		}
		else if ($brn_id == 2)
		{
			$branch_type_nm = 'IT Milan';
		}
		else if ($brn_id == 3)
		{
			$branch_type_nm = 'Anya';
		}
		
		return $branch_type_nm;
	}
?>