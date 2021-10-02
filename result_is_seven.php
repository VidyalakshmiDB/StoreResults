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
        
            <h2 class="text-center mb-4 col-md-10">7th Semester</h2>
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

                    $tbl_nm 	=   'result_ise_sem7';

                    $query = "SELECT * FROM $tbl_nm WHERE u_usn = '$_SESSION[u_usn]';"; 

                    $q = mysqli_query($con2, $query);   
            ?>
            <?php

                 $row = mysqli_fetch_assoc($q);
                 echo "<tr>";
                 echo "<td>". "18IS71". "</td>";
                 echo "<td>". "ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING". "</td>";
                 echo "<td>" . $row['sub71_in'] . "</td>";
                 echo "<td>" . $row['sub71_ex'] . "</td>";
                 echo "<td>" . $row['sub71_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS72". "</td>";
                 echo "<td>". "BIG DATA AND ANALYTICS". "</td>";
                 echo "<td>" . $row['sub72_in'] . "</td>";
                 echo "<td>" . $row['sub72_ex'] . "</td>";
                 echo "<td>" . $row['sub72_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS731". "</td>";
                 echo "<td>". "PROFESSIONAL ELECTIVE-2". "</td>";
                 echo "<td>" . $row['sub73_in'] . "</td>";
                 echo "<td>" . $row['sub73_ex'] . "</td>";
                 echo "<td>" . $row['sub73_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS732". "</td>";
                 echo "<td>". "PROFESSIONAL ELECTIVE-3". "</td>";
                 echo "<td>" . $row['sub74_in'] . "</td>";
                 echo "<td>" . $row['sub74_ex'] . "</td>";
                 echo "<td>" . $row['sub74_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS734". "</td>";
                 echo "<td>". "OPEN ELECTIVE-B". "</td>";
                 echo "<td>" . $row['sub75_in'] . "</td>";
                 echo "<td>" . $row['sub75_ex'] . "</td>";
                 echo "<td>" . $row['sub75_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". "18IS741". "</td>";
                 echo "<td>". "ARTIFICAL INTELLIGENCE AND MACHINE LEARNING LABORATORY". "</td>";
                 echo "<td>" . $row['sub76_in'] . "</td>";
                 echo "<td>" . $row['sub76_ex'] . "</td>";
                 echo "<td>" . $row['sub76_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". " ". "</td>";
                 echo "<td>". "PROJECT WORK PHASE-1". "</td>";
                 echo "<td>" . $row['sub77_in'] . "</td>";
                 echo "<td>" . $row['sub77_ex'] . "</td>";
                 echo "<td>" . $row['sub77_total'] . "</td>";
             echo "</tr>";
             echo "<tr>";
                 echo "<td>". " ". "</td>";
                 echo "<td>". "INT - INTERNSHIP". "</td>";
                 echo "<td>" . $row['sub78_in'] . "</td>";
                 echo "<td>" . $row['sub78_ex'] . "</td>";
                 echo "<td>" . $row['sub78_total'] . "</td>";
             echo "</tr>";
                echo "<tr>";
                    echo "<th colspan='1'>". "Total : " . $row['sem7_total'] . "</th>";
                    echo "<th colspan='2'>". "SGPA : " . $row['sem7_sgpa'] . "</th>";
                    echo "<th colspan='2'>". "CGPA : " . $row['sem7_cgpa'] . "</th>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th colspan='1'>" . "ISE " . "</th>";
                    echo "<th colspan='2'>" . "7th Semester " . "</th>";
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
                win.document.write('<title>7th semester</title>');
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
           