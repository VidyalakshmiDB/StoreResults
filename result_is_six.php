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

        <title>Store my Results</title>
        <style>
            .wrapper{
                padding-left:50px;
                width: 600px;
                margin: 0 auto;
            }
            button .btn{
                color: white;
            }
        </style>

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
		</head>
		
	<body>

    <?php include 'header_ise.php' ?>
        <div class="section-gap container">
        <div class="row " style="padding-left:40px;padding-right:40px;">
            <h2 class="text-center mb-4 col-md-10">6th Semester</h2>
            <div id='tab5' class="col-md-10">
            <table class="table table-condensed table-striped table-hover table-responsive">
                <thead>
                                <tr> 
                                    <th> Code </th>
                                    <th> Subject name </th>
                                    <th> Internal </th>
                                    <th> External </th>
                                    <th> Total </th>
                                </tr>
                </thead>
            <?php
                    global 			$con2;

                    $tbl_nm 	=   'result_ise_sem6';

                    $query = "SELECT * FROM $tbl_nm WHERE u_usn = '$_SESSION[u_usn]';"; 

                    $q = mysqli_query($con2, $query);   
            ?>
            <?php

                 $row = mysqli_fetch_assoc($q);

                 echo "<tr>";
                 echo "<td>". "18IS61". "</td>";
                 echo "<td>". "MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY ". "</td>";
                 echo "<td>" . $row['sub61_in'] . "</td>";
                 echo "<td>" . $row['sub61_ex'] . "</td>";
                 echo "<td>" . $row['sub61_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS62". "</td>";
                 echo "<td>". "FILE STRUCTURES". "</td>";
                 echo "<td>" . $row['sub62_in'] . "</td>";
                 echo "<td>" . $row['sub62_ex'] . "</td>";
                 echo "<td>" . $row['sub62_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS63". "</td>";
                 echo "<td>". "WEB TECHNOLOGY AND ITS APPLICATIONS". "</td>";
                 echo "<td>" . $row['sub63_in'] . "</td>";
                 echo "<td>" . $row['sub63_ex'] . "</td>";
                 echo "<td>" . $row['sub63_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS644". "</td>";
                 echo "<td>". "PROFESSIONAL ELECTIVE-1". "</td>";
                 echo "<td>" . $row['sub64_in'] . "</td>";
                 echo "<td>" . $row['sub64_ex'] . "</td>";
                 echo "<td>" . $row['sub64_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS641". "</td>";
                 echo "<td>". "OPEN ELECTIVE-A". "</td>";
                 echo "<td>" . $row['sub65_in'] . "</td>";
                 echo "<td>" . $row['sub65_ex'] . "</td>";
                 echo "<td>" . $row['sub65_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18ME653". "</td>";
                 echo "<td>". "SOFTWARE TESTING LABORATORY". "</td>";
                 echo "<td>" . $row['sub66_in'] . "</td>";
                 echo "<td>" . $row['sub66_ex'] . "</td>";
                 echo "<td>" . $row['sub66_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18CV651". "</td>";
                 echo "<td>". "FILE STRUCTURES LABORATORY WITH MINI PROJECT". "</td>";
                 echo "<td>" . $row['sub67_in'] . "</td>";
                 echo "<td>" . $row['sub67_ex'] . "</td>";
                 echo "<td>" . $row['sub67_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18ISL66". "</td>";
                 echo "<td>". "MOBILE APPLICATION DEVELOPMENT". "</td>";
                 echo "<td>" . $row['sub68_in'] . "</td>";
                 echo "<td>" . $row['sub68_ex'] . "</td>";
                 echo "<td>" . $row['sub68_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                echo "<th colspan='1'>". "Total : " . $row['sem6_total'] . "</th>";
                echo "<th colspan='2'>". "SGPA : " . $row['sem6_sgpa'] . "</th>";
                echo "<th colspan='2'>". "CGPA : " . $row['sem6_cgpa'] . "</th>";
            echo "</tr>";
             echo "<tr>";
                    echo "<th colspan='1'>" . "ISE " . "</th>";
                    echo "<th colspan='2'>" . "6th Semester " . "</th>";
                    echo "<th colspan='2'>" . $row['u_usn']. "</th>";
                echo "</tr>";

            ?>
            </table>
            <p><input type="button" value="Download" id="btPrint" onclick="createPDF()"/></p>
        </div>
        </div>
        </div>

    <?php include 'footer.php' ?>
        <script>
            function createPDF() {
                var sTable = document.getElementById('tab5').innerHTML;

                var style = "<style>";
                style = style + "table {width: 100%;font: 22px Calibri;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
                style = style + "padding: 2px 3px;text-align: center;}";
                style = style + "</style>";

                var win = window.open('', '', 'height=700,width=700');

                win.document.write('<html><head>');
                win.document.write('<title>5th semester</title>');
                win.document.write(style);
                win.document.write('</head>');
                win.document.write('<body>');
                win.document.write(sTable); 
                win.document.write('</body></html>');

                win.document.close(); 

                win.print();
            }
        </script>

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
           