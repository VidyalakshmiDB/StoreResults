<?php
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';

    global $dbo1;
    $u_usn = $_SESSION['u_usn'];

    $sub81_in = $_POST['sub81_in'];
    $sub81_ex = $_POST['sub81_ex'];
    $sub81_total = $_POST['sub81_total']; 
    $sub82_in = $_POST['sub82_in'];
    $sub82_ex = $_POST['sub82_ex'];
    $sub82_total = $_POST['sub82_total'];
    $sub83_in = $_POST['sub83_in'];
    $sub83_ex = $_POST['sub83_ex'];
    $sub83_total = $_POST['sub83_total']; 
    $sub84_in = $_POST['sub84_in'];
    $sub84_ex = $_POST['sub84_ex'];
    $sub84_total = $_POST['sub84_total']; 
    $sub85_in = $_POST['sub85_in'];
    $sub85_ex = $_POST['sub85_ex'];
    $sub85_total = $_POST['sub85_total']; 
    
    $sem8_total = $sub81_total + $sub82_total + $sub83_total + $sub84_total + $sub85_total;

    if($sub81_total >= 90 && $sub81_total <= 100)
        $credit1 = 10;
    else if($sub81_total >= 80 && $sub81_total < 90) 
            $credit1 = 9;
        else if($sub81_total >=70 && $sub81_total <80)
            $credit1 = 8;
            else if($sub81_total > 60 &&$sub81_total <= 70 )
                    $credit1 = 7;
                else if($sub81_total > 45 && $sub81_total <= 60)
                    $credit1 = 6;
                    else if($sub81_total > 40 &&$sub81_total <= 45)
                        $credit1 = 4;
                        else 
                            $credit1 = 0;

    if($sub82_total >= 90 && $sub82_total <= 100)
            $credit2 = 10;
        else if($sub82_total >= 80 && $sub82_total < 90) 
                $credit2 = 9;
            else if($sub82_total >=70 && $sub82_total <80)
                $credit2 = 8;
                else if($sub82_total > 60 &&$sub82_total <= 70 )
                        $credit2 = 7;
                    else if($sub82_total > 45 && $sub82_total <= 60)
                        $credit2 = 6;
                        else if($sub82_total > 40 &&$sub82_total <= 45)
                            $credit2 = 4;
                            else 
                                $credit2 = 0;

    if($sub83_total >= 90 && $sub83_total <= 100)
            $credit3 = 10;
        else if($sub83_total >= 80 && $sub83_total < 90) 
                $credit3 = 9;
            else if($sub83_total >=70 && $sub83_total <80)
                $credit3 = 8;
                else if($sub83_total > 60 &&$sub83_total <= 70 )
                        $credit3 = 7;
                    else if($sub83_total > 45 && $sub83_total <= 60)
                        $credit3 = 6;
                        else if($sub83_total > 40 &&$sub83_total <= 45)
                            $credit3 = 4;
                            else 
                                $credit3 = 0;

    if($sub84_total >= 90 && $sub84_total <= 100)
            $credit4 = 10;
        else if($sub84_total >= 80 && $sub84_total < 90) 
                $credit4 = 9;
            else if($sub84_totall >=70 && $sub84_total <80)
                $credit4 = 8;
                else if($sub84_total > 60 &&$sub84_total <= 70 )
                        $credit4 = 7;
                    else if($sub84_total > 45 && $sub84_total <= 60)
                        $credit4 = 6;
                        else if($sub84_total > 40 &&$sub84_total <= 45)
                            $credit4 = 4;
                            else 
                                $credit4 = 0;

    if($sub85_total >= 90 && $sub85_total <= 100)
            $credit5 = 10;
        else if($sub85_total >= 80 && $sub85_total < 90) 
                $credit5 = 9;
            else if($sub85_totall >=70 && $sub85_total <80)
                $credit5 = 8;
                else if($sub85_total > 60 &&$sub85_total <= 70 )
                        $credit5 = 7;
                    else if($sub85_total > 45 && $sub85_total <= 60)
                        $credit5 = 6;
                        else if($sub85_total > 40 &&$sub85_total <= 45)
                            $credit5 = 4;
                            else 
                                $credit5 = 0;


        $sem8_sgpa = (($credit1 * 3) + ($credit2 * 3) + ($credit3 * 3) + ($credit4 * 3) + ($credit5 * 3)) / 15;

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

        $sql6 = "SELECT `sem6_sgpa` FROM `result_ise_sem6` WHERE `u_usn` = '$u_usn'";
        $result6 = $con2->query($sql6);

        if ($result6->num_rows > 0) {
        while($row = $result6->fetch_assoc()) {
            echo $sgpa6 = $row['sem6_sgpa'];       
        }
        }


        $sql7 = "SELECT `sem7_sgpa` FROM `result_ise_sem7` WHERE `u_usn` = '$u_usn'";
        $result7 = $con2->query($sql7);

        if ($result7->num_rows > 0) {
        while($row = $result7->fetch_assoc()) {
            echo $sgpa7 = $row['sem7_sgpa'];       
        }
        }
    
        $sem8_cgpa = ( $sgpa + $sgpa2 + $sgpa3 + $sgpa4 + $sgpa5 + $sgpa6 + $sgpa7 + $sem8_sgpa) / 8;
    
        try{

            $dbo1->beginTransaction(); 

            echo $sql = "INSERT INTO `result_ise_sem8` 
                    (`u_usn`, `sub81_in`, `sub81_ex`, `sub81_total`,
                    `sub82_in`, `sub82_ex`, `sub82_total`, 
                `sub83_in`, `sub83_ex`, `sub83_total`, 
                `sub84_in`, `sub84_ex`, `sub84_total`,
                    `sub85_in`, `sub85_ex`, `sub85_total`, 
                    `sem8_total`, `sem8_sgpa`, `sem8_cgpa`) 
                    VALUES ('$u_usn', $sub81_in, $sub81_ex, $sub81_total,
                    $sub82_in, $sub82_ex, $sub82_total, 
                $sub83_in, $sub83_ex, $sub83_total,
                    $sub84_in, $sub84_ex, $sub84_total,
                $sub85_in, $sub85_ex, $sub85_total,
                    $sem8_total, $sem8_sgpa, $sem8_cgpa)";

            $stmt = $dbo1->prepare($sql);

            $stmt->execute();
            $lastRow = $dbo1->lastInsertId('$result_ise_sem8'); 
            $dbo1->commit();

            }
            catch(PDOException $e)
            {

            $lastRow = -1; 
            $dbo1->rollback(); 

            }
        //redirect('view_result_ise.php'); 
?>
                        





