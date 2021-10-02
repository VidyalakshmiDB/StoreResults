<?php
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';

    global $dbo1;
    $u_usn = $_SESSION['u_usn'];

    $sub61_in = $_POST['sub61_in'];
    $sub61_ex = $_POST['sub61_ex'];
    $sub61_total = $_POST['sub61_total'];
    $sub62_in = $_POST['sub62_in'];
    $sub62_ex = $_POST['sub62_ex'];
    $sub62_total = $_POST['sub62_total']; 
    $sub63_in = $_POST['sub63_in'];
    $sub63_ex = $_POST['sub63_ex'];
    $sub63_total = $_POST['sub63_total'];
    $sub64_in = $_POST['sub64_in'];
    $sub64_ex = $_POST['sub64_ex'];
    $sub64_total = $_POST['sub64_total'];
    $sub65_in = $_POST['sub65_in'];
    $sub65_ex = $_POST['sub65_ex'];
    $sub65_total = $_POST['sub65_total'];
    $sub66_in = $_POST['sub66_in'];
    $sub66_ex = $_POST['sub66_ex'];
    $sub66_total = $_POST['sub66_total'];
    $sub67_in = $_POST['sub67_in'];
    $sub67_ex = $_POST['sub67_ex'];
    $sub67_total = $_POST['sub67_total'];
    $sub68_in = $_POST['sub68_in'];
    $sub68_ex = $_POST['sub68_ex'];
    $sub68_total = $_POST['sub68_total'];
    $sem6_total = $sub61_total + $sub62_total + $sub63_total + $sub64_total + $sub65_total + $sub66_total + $sub67_total + $sub68_total;


    if($sub61_total >= 90 && $sub61_total <= 100)
        $credit1 = 10;
    else if($sub61_total >= 80 && $sub61_total < 90) 
            $credit1 = 9;
        else if($sub61_total >=70 && $sub61_total <80)
            $credit1 = 8;
            else if($sub61_total > 60 &&$sub61_total <= 70 )
                    $credit1 = 7;
                else if($sub61_total > 45 && $sub61_total <= 60)
                    $credit1 = 6;
                    else if($sub61_total > 40 &&$sub61_total <= 45)
                        $credit1 = 4;
                        else 
                            $credit1 = 0;

    if($sub62_total >= 90 && $sub62_total <= 100)
            $credit2 = 10;
        else if($sub62_total >= 80 && $sub62_total < 90) 
                $credit2 = 9;
            else if($sub62_total >=70 && $sub62_total <80)
                $credit2 = 8;
                else if($sub62_total > 60 &&$sub62_total <= 70 )
                        $credit2 = 7;
                    else if($sub62_total > 45 && $sub62_total <= 60)
                        $credit2 = 6;
                        else if($sub62_total > 40 &&$sub62_total <= 45)
                            $credit2 = 4;
                            else 
                                $credit2 = 0;

    if($sub63_total >= 90 && $sub63_total <= 100)
            $credit3 = 10;
        else if($sub63_total >= 80 && $sub63_total < 90) 
                $credit3 = 9;
            else if($sub63_total >=70 && $sub63_total <80)
                $credit3 = 8;
                else if($sub63_total > 60 &&$sub63_total <= 70 )
                        $credit3 = 7;
                    else if($sub63_total > 45 && $sub63_total <= 60)
                        $credit3 = 6;
                        else if($sub63_total > 40 &&$sub63_total <= 45)
                            $credit3 = 4;
                            else 
                                $credit3 = 0;

    if($sub64_total >= 90 && $sub64_total <= 100)
            $credit4 = 10;
        else if($sub64_total >= 80 && $sub64_total < 90) 
                $credit4 = 9;
            else if($sub64_total >=70 && $sub64_total <80)
                $credit4 = 8;
                else if($sub64_total > 60 &&$sub64_total <= 70 )
                        $credit4 = 7;
                    else if($sub64_total > 45 && $sub64_total <= 60)
                        $credit4 = 6;
                        else if($sub64_total > 40 &&$sub64_total <= 45)
                            $credit4 = 4;
                            else 
                                $credit4 = 0;

    if($sub65_total >= 90 && $sub65_total <= 100)
            $credit5 = 10;
        else if($sub65_total >= 80 && $sub65_total < 90) 
                $credit5 = 9;
            else if($sub65_total >=70 && $sub65_total <80)
                $credit5 = 8;
                else if($sub65_total > 60 &&$sub65_total <= 70 )
                        $credit5 = 7;
                    else if($sub65_total > 45 && $sub65_total <= 60)
                        $credit5 = 6;
                        else if($sub65_total > 40 &&$sub65_total <= 45)
                            $credit5 = 4;
                            else 
                                $credit5 = 0;

    if($sub66_total >= 90 && $sub66_total <= 100)
            $credit6 = 10;
        else if($sub66_total >= 80 && $sub66_total < 90) 
                $credit6 = 9;
            else if($sub66_total >=70 && $sub66_total <80)
                $credit6 = 8;
                else if($sub66_total > 60 &&$sub66_total <= 70 )
                        $credit6 = 7;
                    else if($sub66_total > 45 && $sub66_total <= 60)
                        $credit6 = 6;
                        else if($sub66_total > 40 &&$sub66_total <= 45)
                            $credit6 = 4;
                            else 
                                $credit6 = 0;

    if($sub67_total >= 90 && $sub67_total <= 100)
            $credit7 = 10;
        else if($sub67_total >= 80 && $su67_total < 90) 
                $credit7 = 9;
            else if($sub67_total >=70 && $sub67_total <80)
                $credit7 = 8;
                else if($sub67_total > 60 &&$sub67_total <= 70 )
                        $credit7 = 7;
                    else if($sub67_total > 45 && $sub67_total <= 60)
                        $credit7 = 6;
                        else if($sub67_total > 40 &&$sub67_total <= 45)
                            $credit7 = 4;
                            else 
                                $credit7 = 0;

    if($sub68_total >= 90 && $sub68_total <= 100)
            $credit8 = 10;
        else if($sub68_total >= 80 && $sub68_total < 90) 
                $credit8 = 9;
            else if($sub68_total >=70 && $sub68_total <80)
                $credit8 = 8;
                else if($sub68_total > 60 &&$sub68_total <= 70 )
                        $credit8 = 7;
                    else if($sub68_total > 45 && $sub68_total <= 60)
                        $credit8 = 6;
                        else if($sub68_total > 40 &&$sub68_total <= 45)
                            $credit8 = 4;
                            else 
                                $credit8 = 0;


        $sem6_sgpa = (($credit1 * 3) + ($credit2 * 4) + ($credit3 * 4) + ($credit4 * 3) + ($credit5 * 3) + ($credit6 * 3) + ($credit7 * 2) + ($credit8 * 2)) / 24;

        $sql = "SELECT `sem1_sgpa` FROM `result_ise_sem1` WHERE `u_usn` = '$u_usn'";
        $result = $con2->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo $sgpa = $row['sem1_sgpa'];       
            }
        }

        echo $sql2 = "SELECT `sem2_sgpa` FROM `result_ise_sem2` WHERE `u_usn` = '$u_usn'";
        $result2 = $con2->query($sql2);

        if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo $sgpa2 = $row['sem2_sgpa'];       
        }
        }


        echo $sql3 = "SELECT `sem3_sgpa` FROM `result_ise_sem3` WHERE `u_usn` = '$u_usn'";
        $result3 = $con2->query($sql3);

        if ($result3->num_rows > 0) {
        while($row = $result3->fetch_assoc()) {
            echo $sgpa3 = $row['sem3_sgpa'];       
        }
        }

        $sql4 = "SELECT `sem4_sgpa` FROM `result_ise_sem4` WHERE `u_usn` = '$u_usn'";
        $result4 = $con2->query($sql4);

        if ($result4->num_rows > 0) {
        while($row = $result4->fetch_assoc()) {
            echo $sgpa4 = $row['sem4_sgpa'];       
        }
        }

        echo $sql5 = "SELECT `sem5_sgpa` FROM `result_ise_sem5` WHERE `u_usn` = '$u_usn'";
        $result5 = $con2->query($sql5);

        if ($result5->num_rows > 0) {
        while($row = $result5->fetch_assoc()) {
            echo $sgpa5 = $row['sem5_sgpa'];       
        }
        }
        echo $sem6_cgpa = ( $sgpa + $sgpa2 + $sgpa3 + $sgpa4 + $sgpa5 + $sem6_sgpa) / 6;
    
        try{

            $dbo1->beginTransaction(); 

            echo $sql = "INSERT INTO `result_ise_sem6`
                        (`u_usn`, `sub61_in`, `sub61_ex`, `sub61_total`,
                        `sub62_in`, `sub62_ex`, `sub62_total`, 
                        `sub63_in`, `sub63_ex`, `sub63_total`, 
                        `sub64_in`, `sub64_ex`, `sub64_total`,
                        `sub65_in`, `sub65_ex`, `sub65_total`, 
                        `sub66_in`, `sub66_ex`, `sub66_total`, 
                        `sub67_in`, `sub67_ex`, `sub67_total`, 
                        `sub68_in`, `sub68_ex`, `sub68_total`,
                        `sem6_total`, `sem6_sgpa`, `sem6_cgpa`) 
                        VALUES ('$u_usn', $sub61_in, $sub61_ex, $sub61_total,
                        $sub62_in, $sub62_ex, $sub62_total, 
                        $sub63_in, $sub63_ex, $sub63_total,
                        $sub64_in, $sub64_ex, $sub64_total,
                        $sub65_in, $sub65_ex, $sub65_total,
                        $sub66_in, $sub66_ex, $sub66_total, 
                        $sub67_in, $sub67_ex, $sub67_total,
                        $sub68_in, $sub68_ex, $sub68_total,
                        $sem6_total, $sem6_sgpa, $sem6_cgpa)";
                    $stmt = $dbo1->prepare($sql);

                    $stmt->execute();
                    $lastRow = $dbo1->lastInsertId('$result_ise_sem6'); 
                    $dbo1->commit();

                }
                catch(PDOException $e)
                {

                    $lastRow = -1; 
                    $dbo1->rollback(); 

                }
            
       redirect('view_result_ise.php'); 
?>
