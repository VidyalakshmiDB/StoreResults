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

    <?php include 'header_cse.php' ?>
        <div class="section-gap container">
        <div class="row " style="padding-left:40px;padding-right:40px;">
        
            <h2 class="text-center mb-4 col-md-10">5th Semester</h2>
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

                    $tbl_nm 	=   'result_cse_sem5';

                    $query = "SELECT * FROM $tbl_nm WHERE u_usn = '$_SESSION[u_usn]';"; 

                    $q = mysqli_query($con2, $query);   
            ?>
            <?php

                 $row = mysqli_fetch_assoc($q);
            echo "<tr>";
                    echo "<td>". "18CS51". "</td>";
                    echo "<td>". "MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY". "</td>";
                    echo "<td>" . $row['sub51_in'] . "</td>";
                    echo "<td>" . $row['sub51_ex'] . "</td>";
                    echo "<td>" . $row['sub51_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CS52". "</td>";
                    echo "<td>". "COMPUTER NETWORKS AND SECURITY". "</td>";
                    echo "<td>" . $row['sub52_in'] . "</td>";
                    echo "<td>" . $row['sub52_ex'] . "</td>";
                    echo "<td>" . $row['sub52_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CS53". "</td>";
                    echo "<td>". "DATABASE MANAGEMENT SYSTEMS". "</td>";
                    echo "<td>" . $row['sub53_in'] . "</td>";
                    echo "<td>" . $row['sub53_ex'] . "</td>";
                    echo "<td>" . $row['sub53_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CS54". "</td>";
                    echo "<td>". "AUTOMATA THEORY AND COMPUTABILITY". "</td>";
                    echo "<td>" . $row['sub54_in'] . "</td>";
                    echo "<td>" . $row['sub54_ex'] . "</td>";
                    echo "<td>" . $row['sub54_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CS55". "</td>";
                    echo "<td>". "UNIX PROGRAMMING". "</td>";
                    echo "<td>" . $row['sub55_in'] . "</td>";
                    echo "<td>" . $row['sub55_ex'] . "</td>";
                    echo "<td>" . $row['sub55_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CS56 ". "</td>";
                    echo "<td>". "COMPUTER NETWORK LABORATORY". "</td>";
                    echo "<td>" . $row['sub56_in'] . "</td>";
                    echo "<td>" . $row['sub56_ex'] . "</td>";
                    echo "<td>" . $row['sub56_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CSL57". "</td>";
                    echo "<td>". "DBMS LABORATORY WITH MINI PROJECT". "</td>";
                    echo "<td>" . $row['sub57_in'] . "</td>";
                    echo "<td>" . $row['sub57_ex'] . "</td>";
                    echo "<td>" . $row['sub57_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CSL58". "</td>";
                    echo "<td>". "MICROCONTROLLER AND EMBEDDED SYSTEMS LAB". "</td>";
                    echo "<td>" . $row['sub58_in'] . "</td>";
                    echo "<td>" . $row['sub58_ex'] . "</td>";
                    echo "<td>" . $row['sub58_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". "18CSL59". "</td>";
                    echo "<td>". "ENVIRONMENTAL STUDIES". "</td>";
                    echo "<td>" . $row['sub59_in'] . "</td>";
                    echo "<td>" . $row['sub59_ex'] . "</td>";
                    echo "<td>" . $row['sub59_total'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th colspan='1'>". "Total : " . $row['sem5_total'] . "</th>";
                    echo "<th colspan='2'>". "SGPA : " . $row['sem5_sgpa'] . "</th>";
                    echo "<th colspan='2'>". "CGPA : " . $row['sem5_cgpa'] . "</th>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th colspan='1'>" . "CSE " . "</th>";
                    echo "<th colspan='2'>" . "5th Semester " . "</th>";
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
           