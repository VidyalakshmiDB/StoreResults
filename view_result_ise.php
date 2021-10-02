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
    
    <?php include 'header_ise.php'?>
        <div class="section-gap container">
        <div class="row " style="padding-left:40px;padding-right:40px;">
        
            <h2 class="text-center mb-4 col-md-10">1st Semester</h2>
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

                    $tbl_nm 	=   'result_ise_sem1';

                    $query = "SELECT * FROM $tbl_nm WHERE u_usn = '$_SESSION[u_usn]';"; 

                    $q = mysqli_query($con2, $query);   
            ?>
            <?php

                $row = mysqli_fetch_assoc($q);

                    echo "<tr>";
                        echo "<td>". "18MAT11". "</td>";
                        echo "<td>". "CALCULUS AND LINEAR ALGEBRA". "</td>";
                        echo "<td>" . $row['sub11_in'] . "</td>";
                        echo "<td>" . $row['sub11_ex'] . "</td>";
                        echo "<td>" . $row['sub11_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>". "18PHY12". "</td>";
                        echo "<td>". "ENGINEERING PHYSICS". "</td>";
                        echo "<td>" . $row['sub12_in'] . "</td>";
                        echo "<td>" . $row['sub12_ex'] . "</td>";
                        echo "<td>" . $row['sub12_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>". "18ELE13". "</td>";
                        echo "<td>". "BASIC ELECTRICAL ENGINEERING". "</td>";
                        echo "<td>" . $row['sub13_in'] . "</td>";
                        echo "<td>" . $row['sub13_ex'] . "</td>";
                        echo "<td>" . $row['sub13_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>". "18CIV14". "</td>";
                        echo "<td>". "ELEMENTS OF CIVIL ENGINEERING AND MECHANICS". "</td>";
                        echo "<td>" . $row['sub14_in'] . "</td>";
                        echo "<td>" . $row['sub14_ex'] . "</td>";
                        echo "<td>" . $row['sub14_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>". "18EGDL15". "</td>";
                        echo "<td>". "ENGINEERING GRAPHICS". "</td>";
                        echo "<td>" . $row['sub15_in'] . "</td>";
                        echo "<td>" . $row['sub15_ex'] . "</td>";
                        echo "<td>" . $row['sub15_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>". "18PHYL16". "</td>";
                        echo "<td>". "ENGINEERING PHYSICS LABORATORY". "</td>";
                        echo "<td>" . $row['sub16_in'] . "</td>";
                        echo "<td>" . $row['sub16_ex'] . "</td>";
                        echo "<td>" . $row['sub16_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>". "18ELEL17". "</td>";
                        echo "<td>". "BASIC ELECTRICAL ENGINEERING LABORATORY". "</td>";
                        echo "<td>" . $row['sub17_in'] . "</td>";
                        echo "<td>" . $row['sub17_ex'] . "</td>";
                        echo "<td>" . $row['sub17_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>". "18EGH18". "</td>";
                        echo "<td>". "TECHNICAL ENGLISH-I". "</td>";
                        echo "<td>" . $row['sub18_in'] . "</td>";
                        echo "<td>" . $row['sub18_ex'] . "</td>";
                        echo "<td>" . $row['sub18_total'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<th colspan='1'>". "Total : " . $row['sem1_total'] . "</th>";
                        echo "<th colspan='2'>". "SGPA : " . $row['sem1_sgpa'] . "</th>";
                        echo "<th colspan='2'>". "CGPA : " . $row['sem1_sgpa'] . "</th>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<th colspan='1'>" . "ISE " . "</th>";
                        echo "<th colspan='2'>" . "1st Semester " . "</th>";
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
                win.document.write('<title>1st semester</title>');
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