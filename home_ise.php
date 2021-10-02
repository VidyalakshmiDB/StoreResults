<?php
	error_reporting(0);
    include 'infra/session.php';
	include 'infra/session-details.php';
?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
	
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		
		<title>Store my results</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	

        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">				
        <link rel="stylesheet" href="css/nice-select.css">							
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">				
        <link rel="stylesheet" href="css/main.css">
        <style>
            .btn-info{
                margin:5px;
                padding:0px 100px 0px 100px;
                font-size: 20px;
            }
            </style>
		</head>
		
	<body>
		<?php include 'header_ise.php' ?>
		
        <div class="section-gap container col-sm-9">
            <h3>Welcome......</h3>
            <p>Please click on the buttons to update the marks.</p>
        <div class="container text-center col-sm-6" >

            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemone"><button type="button" class="btn btn-info" style="font-size:15px;">1st/2nd semester<br> (Physics cycle)</button></a>
                
            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemtwo"><button type="button" class="btn btn-info" style="font-size:15px;">1st/2nd semester <br>(Chemistry cycle)</button></a>
                
            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemthree"><button type="button" class="btn btn-info">3rd semester</button></a>

            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemfour"><button type="button" class="btn btn-info">4th semester</button></a>

            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemfive"><button type="button" class="btn btn-info">5th semester</button></a>

            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemsix"><button type="button" class="btn btn-info">6th semester</button></a>

            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemseven"><button type="button" class="btn btn-info">7th semester</button></a>

            <a href="buttons_ise.php" data-toggle="modal" data-target="#exampleissemeight"><button type="button" class="btn btn-info">8th semester</button></a>
        </div>   
        </div>

        <?php include 'buttons_ise.php' ?>
		
		<?php include 'footer.php' ?>
		
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
		<script src="js/jquery-ui.js"></script>					
		<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>						
		<script src="js/jquery.nice-select.min.js"></script>					
		<script src="js/owl.carousel.min.js"></script>							
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
	
</html>