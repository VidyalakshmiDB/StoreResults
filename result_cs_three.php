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

            <h2 class="text-center mb-4 col-md-10">3rd Semester</h2>
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

                    $tbl_nm 	=   'result_cse_sem3';

                    $query = "SELECT * FROM $tbl_nm WHERE u_usn = '$_SESSION[u_usn]';"; 

                    $q = mysqli_query($con2, $query);   
            ?>
            <?php

                $row = mysqli_fetch_assoc($q);

                echo "<tr>";
                echo "<td>". "18MAT31". "</td>";
                echo "<td>". "TRANSFORM CALCULUS,FOURIER SERIES & NUM TECH". "</td>";
                echo "<td>" . $row['sub31_in'] . "</td>";
                echo "<td>" . $row['sub31_ex'] . "</td>";
                echo "<td>" . $row['sub31_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS32". "</td>";
                echo "<td>". "DATA STRUCTURES AND APPLICATIONS". "</td>";
                echo "<td>" . $row['sub32_in'] . "</td>";
                echo "<td>" . $row['sub32_ex'] . "</td>";
                echo "<td>" . $row['sub32_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS33". "</td>";
                echo "<td>". "ANALOG AND DIGITAL ELECTRONICS". "</td>";
                echo "<td>" . $row['sub33_in'] . "</td>";
                echo "<td>" . $row['sub33_ex'] . "</td>";
                echo "<td>" . $row['sub33_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS34". "</td>";
                echo "<td>". "COMPUTER ORGANIZATION". "</td>";
                echo "<td>" . $row['sub34_in'] . "</td>";
                echo "<td>" . $row['sub34_ex'] . "</td>";
                echo "<td>" . $row['sub34_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS35". "</td>";
                echo "<td>". "SOFTWARE ENGINEERING". "</td>";
                echo "<td>" . $row['sub35_in'] . "</td>";
                echo "<td>" . $row['sub35_ex'] . "</td>";
                echo "<td>" . $row['sub35_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS36 ". "</td>";
                echo "<td>". "Discrete Mathematical Structures". "</td>";
                echo "<td>" . $row['sub36_in'] . "</td>";
                echo "<td>" . $row['sub36_ex'] . "</td>";
                echo "<td>" . $row['sub36_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CSL37". "</td>";
                echo "<td>". "ANALOG AND DIGITAL ELECTRONICS LABORATORY ". "</td>";
                echo "<td>" . $row['sub37_in'] . "</td>";
                echo "<td>" . $row['sub37_ex'] . "</td>";
                echo "<td>" . $row['sub37_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CSL38". "</td>";
                echo "<td>". "DATA STRUCTURES LABORATORY". "</td>";
                echo "<td>" . $row['sub38_in'] . "</td>";
                echo "<td>" . $row['sub38_ex'] . "</td>";
                echo "<td>" . $row['sub38_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CPC39". "</td>";
                echo "<td>". "CONST. OF INDIA, PROF. ETHICS & CYBER LAW". "</td>";
                echo "<td>" . $row['sub39_in'] . "</td>";
                echo "<td>" . $row['sub39_ex'] . "</td>";
                echo "<td>" . $row['sub39_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th colspan='1'>". "Total : " . $row['sem3_total'] . "</th>";
                echo "<th colspan='2'>". "SGPA : " . $row['sem3_sgpa'] . "</th>";
                echo "<th colspan='2'>". "CGPA : " . $row['sem3_cgpa'] . "</th>";
             echo "</tr>";
             echo "<tr>";
                        echo "<th colspan='1'>" . "CSE " . "</th>";
                        echo "<th colspan='2'>" . "3rd Semester " . "</th>";
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
                win.document.write('<title>3rd semester</title>');
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