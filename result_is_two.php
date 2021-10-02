<?php
    include 'infra/session.php';
    include 'infra/session-details.php';
    error_reporting(0);
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
        
            <h2 class="text-center mb-4 col-md-10">2nd Semester</h2>
            <div id='tab' class="col-md-10">
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

                    $tbl_nm 	=   'result_ise_sem2';

                    $query = "SELECT * FROM $tbl_nm WHERE u_usn = '$_SESSION[u_usn]';"; 

                    $q = mysqli_query($con2, $query);   
            ?>
            <?php

                $row = mysqli_fetch_assoc($q);

                echo "<tr>";
                echo "<td>". "18MAT21". "</td>";
                echo "<td>". "ADVANCED CALCULUS AND NUMERICAL METHODS". "</td>";
                echo "<td>" . $row['sub21_in'] . "</td>";
                echo "<td>" . $row['sub21_ex'] . "</td>";
                echo "<td>" . $row['sub21_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CHE22". "</td>";
                echo "<td>". "ENGINEERING CHEMISTRY". "</td>";
                echo "<td>" . $row['sub22_in'] . "</td>";
                echo "<td>" . $row['sub22_ex'] . "</td>";
                echo "<td>" . $row['sub22_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CPS23". "</td>";
                echo "<td>". "C PROGRAMMING FOR PROBLEM SOLVING". "</td>";
                echo "<td>" . $row['sub23_in'] . "</td>";
                echo "<td>" . $row['sub23_ex'] . "</td>";
                echo "<td>" . $row['sub23_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18ELN24". "</td>";
                echo "<td>". "BASIC ELECTRONICS". "</td>";
                echo "<td>" . $row['sub24_in'] . "</td>";
                echo "<td>" . $row['sub24_ex'] . "</td>";
                echo "<td>" . $row['sub24_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18ME25". "</td>";
                echo "<td>". "ELEMENTS OF MECHANICAL ENGINEERING". "</td>";
                echo "<td>" . $row['sub25_in'] . "</td>";
                echo "<td>" . $row['sub25_ex'] . "</td>";
                echo "<td>" . $row['sub25_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CHEL26 ". "</td>";
                echo "<td>". "ENGINEERING CHEMISTRY LABORATORY". "</td>";
                echo "<td>" . $row['sub26_in'] . "</td>";
                echo "<td>" . $row['sub26_ex'] . "</td>";
                echo "<td>" . $row['sub26_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CPL27". "</td>";
                echo "<td>". "C PROGRAMMING LABORATORY ". "</td>";
                echo "<td>" . $row['sub27_in'] . "</td>";
                echo "<td>" . $row['sub27_ex'] . "</td>";
                echo "<td>" . $row['sub27_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18EGH28". "</td>";
                echo "<td>". "TECHNICAL ENGLISH-II". "</td>";
                echo "<td>" . $row['sub28_in'] . "</td>";
                echo "<td>" . $row['sub28_ex'] . "</td>";
                echo "<td>" . $row['sub28_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th colspan='1'>". "Total : " . $row['sem2_total'] . "</th>";
                echo "<th colspan='2'>". "SGPA : " . $row['sem2_sgpa'] . "</th>";
                echo "<th colspan='2'>". "CGPA : " . $row['sem2_cgpa'] . "</th>";
             echo "</tr>";
             echo "<tr>";
             echo "<th colspan='1'>" . "ISE " . "</th>";
             echo "<th colspan='2'>" . "2nd Semester " . "</th>";
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
                var sTable = document.getElementById('tab').innerHTML;

                var style = "<style>";
                style = style + "table {width: 100%;font: 22px Calibri;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
                style = style + "padding: 2px 3px;text-align: center;}";
                style = style + "</style>";

                var win = window.open('', '', 'height=700,width=700');

                win.document.write('<html><head>');
                win.document.write('<title>2nd semester</title>');
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