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
        <div id='tab4' class="col-md-10">
            <h2 class="text-center mb-4" style="float:center;">4th Semester</h2>
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

                    $tbl_nm 	=   'result_cse_sem4';

                    $query = "SELECT * FROM $tbl_nm WHERE u_usn = '$_SESSION[u_usn]';"; 

                    $q = mysqli_query($con2, $query);   
            ?>
            <?php

                $row = mysqli_fetch_assoc($q);

                echo "<tr>";
                echo "<td>". "18MAT41". "</td>";
                echo "<td>". "COMPLEX ANALYSIS, PROBABILITY AND STATISTICS". "</td>";
                echo "<td>" . $row['sub41_in'] . "</td>";
                echo "<td>" . $row['sub41_ex'] . "</td>";
                echo "<td>" . $row['sub41_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS42". "</td>";
                echo "<td>". "DESIGN AND ANALYSIS OF ALGORITHMS". "</td>";
                echo "<td>" . $row['sub42_in'] . "</td>";
                echo "<td>" . $row['sub42_ex'] . "</td>";
                echo "<td>" . $row['sub42_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS43". "</td>";
                echo "<td>". "OPERATING SYSTEMS". "</td>";
                echo "<td>" . $row['sub43_in'] . "</td>";
                echo "<td>" . $row['sub43_ex'] . "</td>";
                echo "<td>" . $row['sub43_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS44". "</td>";
                echo "<td>". "MICROCONTROLLER AND EMBEDDED SYSTEMS". "</td>";
                echo "<td>" . $row['sub44_in'] . "</td>";
                echo "<td>" . $row['sub44_ex'] . "</td>";
                echo "<td>" . $row['sub44_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS45". "</td>";
                echo "<td>". "OBJECT ORIENTED CONCEPTS". "</td>";
                echo "<td>" . $row['sub45_in'] . "</td>";
                echo "<td>" . $row['sub45_ex'] . "</td>";
                echo "<td>" . $row['sub45_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CS46 ". "</td>";
                echo "<td>". "DATA COMMUNICATION". "</td>";
                echo "<td>" . $row['sub46_in'] . "</td>";
                echo "<td>" . $row['sub46_ex'] . "</td>";
                echo "<td>" . $row['sub46_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CSL47". "</td>";
                echo "<td>". "DESIGN AND ANALYSIS OF ALGORITHMS LABORATORY". "</td>";
                echo "<td>" . $row['sub47_in'] . "</td>";
                echo "<td>" . $row['sub47_ex'] . "</td>";
                echo "<td>" . $row['sub47_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>". "18CSL48". "</td>";
                echo "<td>". "MICROCONTROLLER AND EMBEDDED SYSTEMS LAB". "</td>";
                echo "<td>" . $row['sub48_in'] . "</td>";
                echo "<td>" . $row['sub48_ex'] . "</td>";
                echo "<td>" . $row['sub48_total'] . "</td>";
            echo "</tr>";
                        echo "<tr>";
                echo "<td>". "18KVK49 / 18KAK50". "</td>";
                echo "<td>". "VYAVAHARIKA KANNADA / ADALITHA KANNADA". "</td>";
                echo "<td>" . $row['sub49_in'] . "</td>";
                echo "<td>" . $row['sub49_ex'] . "</td>";
                echo "<td>" . $row['sub49_total'] . "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<th colspan='1'>". "Total : " . $row['sem4_total'] . "</th>";
                echo "<th colspan='2'>". "SGPA : " . $row['sem4_sgpa'] . "</th>";
                echo "<th colspan='2'>". "CGPA : " . $row['sem4_cgpa'] . "</th>";
             echo "</tr>";
             echo "<tr>";
                echo "<th colspan='1'>" . "CSE " . "</th>";
                echo "<th colspan='2'>" . "4th Semester " . "</th>";
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
                var sTable = document.getElementById('tab4').innerHTML;

                var style = "<style>";
                style = style + "table {width: 100%;font: 22px Calibri;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
                style = style + "padding: 2px 3px;text-align: center;}";
                style = style + "</style>";

                var win = window.open('', '', 'height=700,width=700');

                win.document.write('<html><head>');
                win.document.write('<title>4th semester</title>');
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
           