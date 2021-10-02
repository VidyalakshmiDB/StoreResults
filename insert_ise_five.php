<?php
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';

    global $dbo1;
    $u_usn = $_SESSION['u_usn'];
    $sub51_in = $_POST['sub51_in'];
    $sub51_ex = $_POST['sub51_ex'];
    $sub51_total = $_POST['sub51_total'];
    $sub52_in = $_POST['sub52_in'];
    $sub52_ex = $_POST['sub52_ex'];
    $sub52_total = $_POST['sub52_total'];
    $sub53_in = $_POST['sub53_in'];
    $sub53_ex = $_POST['sub53_ex'];
    $sub53_total = $_POST['sub53_total'];
    $sub54_in = $_POST['sub54_in'];
    $sub54_ex = $_POST['sub54_ex'];
    $sub54_total = $_POST['sub54_total'];
    $sub55_in = $_POST['sub55_in'];
    $sub55_ex = $_POST['sub55_ex'];
    $sub55_total = $_POST['sub55_total'];
    $sub56_in = $_POST['sub56_in'];
    $sub56_ex = $_POST['sub56_ex'];
    $sub56_total = $_POST['sub56_total'];
    $sub57_in = $_POST['sub57_in'];
    $sub57_ex = $_POST['sub57_ex'];
    $sub57_total = $_POST['sub57_total'];
    $sub58_in = $_POST['sub58_in'];
    $sub58_ex = $_POST['sub58_ex'];
    $sub58_total = $_POST['sub58_total'];
    $sub59_in = $_POST['sub59_in'];
    $sub59_ex = $_POST['sub59_ex'];
    $sub59_total = $_POST['sub59_total'];
    $sem5_total = $sub51_total + $sub52_total + $sub53_total + $sub54_total + $sub55_total + $sub56_total + $sub57_total + $sub58_total + $sub59_total;

    if($sub51_total >= 90 && $sub51_total <= 100)
        $credit1 = 10;
    else if($sub51_total >= 80 && $sub51_total < 90) 
            $credit1 = 9;
        else if($sub51_total >=70 && $sub51_total <80)
            $credit1 = 8;
            else if($sub51_total > 60 &&$sub51_total <= 70 )
                    $credit1 = 7;
                else if($sub51_total > 45 && $sub51_total <= 60)
                    $credit1 = 6;
                    else if($sub51_total > 40 &&$sub51_total <= 45)
                        $credit1 = 4;
                        else 
                            $credit1 = 0;

        if($sub52_total >= 90 && $sub52_total <= 100)
                $credit2 = 10;
            else if($sub52_total >= 80 && $sub52_total < 90) 
                    $credit2 = 9;
                else if($sub52_total >=70 && $sub52_total <80)
                    $credit2 = 8;
                    else if($sub52_total > 60 &&$sub52_total <= 70 )
                            $credit2 = 7;
                        else if($sub52_total > 45 && $sub52_total <= 60)
                            $credit2 = 6;
                            else if($sub52_total > 40 &&$sub52_total <= 45)
                                $credit2 = 4;
                                else 
                                    $credit2 = 0;

        if($sub53_total >= 90 && $sub53_total <= 100)
                $credit3 = 10;
            else if($sub53_total >= 80 && $sub53_total < 90) 
                    $credit3 = 9;
                else if($sub53_total >=70 && $sub53_total <80)
                    $credit3 = 8;
                    else if($sub53_total > 60 &&$sub53_total <= 70 )
                            $credit3 = 7;
                        else if($sub53_total > 45 && $sub53_total <= 60)
                            $credit3 = 6;
                            else if($sub53_total > 40 &&$sub53_total <= 45)
                                $credit3 = 4;
                                else 
                                    $credit3 = 0;

        if($sub54_total >= 90 && $sub54_total <= 100)
                $credit4 = 10;
            else if($sub54_total >= 80 && $sub54_total < 90) 
                    $credit4 = 9;
                else if($sub54_total >=70 && $sub54_total <80)
                    $credit4 = 8;
                    else if($sub54_total > 60 &&$sub54_total <= 70 )
                            $credit4 = 7;
                        else if($sub54_total > 45 && $sub54_total <= 60)
                            $credit4 = 6;
                            else if($sub54_total > 40 &&$sub54_total <= 45)
                                $credit4 = 4;
                                else 
                                    $credit4 = 0;

        if($sub55_total >= 90 && $sub55_total <= 100)
                $credit5 = 10;
            else if($sub55_total >= 80 && $sub55_total < 90) 
                    $credit5 = 9;
                else if($sub55_total >=70 && $sub55_total <80)
                    $credit5 = 8;
                    else if($sub55_total > 60 &&$sub55_total <= 70 )
                            $credit5 = 7;
                        else if($sub55_total > 45 && $sub55_total <= 60)
                            $credit5 = 6;
                            else if($sub55_total > 40 &&$sub55_total <= 45)
                                $credit5 = 4;
                                else 
                                    $credit5 = 0;

        if($sub56_total >= 90 && $sub56_total <= 100)
                $credit6 = 10;
            else if($sub56_total >= 80 && $sub56_total < 90) 
                    $credit6 = 9;
                else if($sub56_total >=70 && $sub56_total <80)
                    $credit6 = 8;
                    else if($sub56_total > 60 &&$sub56_total <= 70 )
                            $credit6 = 7;
                        else if($sub56_total > 45 && $sub56_total <= 60)
                            $credit6 = 6;
                            else if($sub56_total > 40 &&$sub56_total <= 45)
                                $credit6 = 4;
                                else 
                                    $credit6 = 0;

        if($sub57_total >= 90 && $sub57_total <= 100)
                $credit7 = 10;
            else if($sub57_total >= 80 && $sub57_total < 90) 
                    $credit7 = 9;
                else if($sub57_total >=70 && $sub57_total <80)
                    $credit7 = 8;
                    else if($sub57_total > 60 &&$sub57_total <= 70 )
                            $credit7 = 7;
                        else if($sub57_total > 45 && $sub57_total <= 60)
                            $credit7 = 6;
                            else if($sub57_total > 40 &&$sub57_total <= 45)
                                $credit7 = 4;
                                else 
                                    $credit7 = 0;

        if($sub58_total >= 90 && $sub58_total <= 100)
                $credit8 = 10;
            else if($sub58_total >= 80 && $sub58_total < 90) 
                    $credit8 = 9;
                else if($sub58_total >=70 && $sub58_total <80)
                    $credit8 = 8;
                    else if($sub58_total > 60 &&$sub58_total <= 70 )
                            $credit8 = 7;
                        else if($sub58_total > 45 && $sub58_total <= 60)
                            $credit8 = 6;
                            else if($sub58_total > 40 &&$sub58_total <= 45)
                                $credit8 = 4;
                                else 
                                    $credit8 = 0;

        if($sub59_total >= 90 && $sub59_total <= 100)
            $credit9 = 10;
        else if($sub59_total >= 80 && $sub59_total < 90) 
                $credit9 = 9;
            else if($sub59_total >=70 && $sub59_total <80)
                $credit9 = 8;
                else if($sub59_total > 60 &&$sub59_total <= 70 )
                        $credit9 = 7;
                    else if($sub59_total > 45 && $sub59_total <= 60)
                        $credit9 = 6;
                        else if($sub59_total > 40 &&$sub59_total <= 45)
                            $credit9 = 4;
                            else 
                                $credit9 = 0;

        $sem5_sgpa = (($credit1 * 3) + ($credit2 * 4) + ($credit3 * 4) + ($credit4 * 3) + ($credit5 * 3) + ($credit6 * 3) + ($credit7 * 2) + ($credit8 * 2) + ($credit9 * 1)) / 25;

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
        //echo "a b c  ";
        echo $sem5_cgpa = ( $sgpa + $sgpa2 + $sgpa3 + $sgpa4 + $sem5_sgpa) / 5;
    
        try{

            $dbo1->beginTransaction(); 

            echo $sql = "INSERT INTO `result_ise_sem5` 
                (`u_usn`, `sub51_in`, `sub51_ex`, `sub51_total`,
                `sub52_in`, `sub52_ex`, `sub52_total`, 
                `sub53_in`, `sub53_ex`, `sub53_total`, 
                `sub54_in`, `sub54_ex`, `sub54_total`,
                `sub55_in`, `sub55_ex`, `sub55_total`, 
                `sub56_in`, `sub56_ex`, `sub56_total`, 
                `sub57_in`, `sub57_ex`, `sub57_total`, 
                `sub58_in`, `sub58_ex`, `sub58_total`,
                `sub59_in`, `sub59_ex`, `sub59_total`,
                `sem5_total`, `sem5_sgpa`, `sem5_cgpa`) 
                VALUES ('$u_usn', $sub51_in, $sub51_ex, $sub51_total,
                $sub52_in, $sub52_ex, $sub52_total, 
                $sub53_in, $sub53_ex, $sub53_total,
                $sub54_in, $sub54_ex, $sub54_total,
                $sub55_in, $sub55_ex, $sub55_total,
                $sub56_in, $sub56_ex, $sub56_total, 
                $sub57_in, $sub57_ex, $sub57_total,
                $sub58_in, $sub58_ex, $sub58_total,
                $sub59_in, $sub59_ex, $sub59_total,
                $sem5_total, $sem5_sgpa, $sem5_cgpa)";

                $stmt = $dbo1->prepare($sql);

                $stmt->execute();
                $lastRow = $dbo1->lastInsertId('$result_ise_sem5'); 
                $dbo1->commit();

            }
            catch(PDOException $e)
            {

                $lastRow = -1; 
                $dbo1->rollback(); 

            }
       redirect('view_result_ise.php'); 
    ?>