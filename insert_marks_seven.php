<?php
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';

    global $dbo1;
    $u_usn = $_SESSION['u_usn'];

    $sub71_in = $_POST['sub71_in'];
    $sub71_ex = $_POST['sub71_ex'];
    $sub71_total = $_POST['sub71_total'];
    $sub72_in = $_POST['sub72_in'];
    $sub72_ex = $_POST['sub72_ex'];
    $sub72_total = $_POST['sub72_total'];
    $sub73_in = $_POST['sub73_in'];
    $sub73_ex = $_POST['sub73_ex'];
    $sub73_total = $_POST['sub73_total'];
    $sub74_in = $_POST['sub74_in'];
    $sub74_ex = $_POST['sub74_ex'];
    $sub74_total = $_POST['sub74_total'];
    $sub75_in = $_POST['sub75_in'];
    $sub75_ex = $_POST['sub75_ex'];
    $sub75_total = $_POST['sub75_total'];
    $sub76_in = $_POST['sub76_in'];
    $sub76_ex = $_POST['sub76_ex'];
    $sub76_total = $_POST['sub76_total'];
    $sub77_in = $_POST['sub77_in'];
    $sub77_ex = $_POST['sub77_ex'];
    $sub77_total = $_POST['sub77_total'];
    $sub78_in = $_POST['sub78_in'];
    $sub78_ex = $_POST['sub78_ex'];
    $sub78_total = $_POST['sub78_total'];

    $sem7_total = $sub71_total + $sub72_total + $sub73_total + $sub74_total + $sub75_total + $sub76_total + $sub77_total + $sub78_total;

    if($sub71_total >= 90 && $sub71_total <= 100)
        $credit1 = 10;
    else if($sub71_total >= 80 && $sub71_total < 90) 
            $credit1 = 9;
        else if($sub71_total >=70 && $sub71_total <80)
            $credit1 = 8;
            else if($sub71_total > 60 &&$sub71_total <= 70 )
                    $credit1 = 7;
                else if($sub71_total > 45 && $sub71_total <= 60)
                    $credit1 = 6;
                    else if($sub71_total > 40 &&$sub71_total <= 45)
                        $credit1 = 4;
                        else 
                            $credit1 = 0;

    if($sub72_total >= 90 && $sub72_total <= 100)
            $credit2 = 10;
        else if($sub72_total >= 80 && $sub72_total < 90) 
                $credit2 = 9;
            else if($sub72_total >=70 && $sub72_total <80)
                $credit2 = 8;
                else if($sub72_total > 60 &&$sub72_total <= 70 )
                        $credit2 = 7;
                    else if($sub72_total > 45 && $sub72_total <= 60)
                        $credit2 = 6;
                        else if($sub72_total > 40 &&$sub72_total <= 45)
                            $credit2 = 4;
                            else 
                                $credit2 = 0;

    if($sub73_total >= 90 && $sub73_total <= 100)
            $credit3 = 10;
        else if($sub73_total >= 80 && $sub73_total < 90) 
                $credit3 = 9;
            else if($sub73_total >=70 && $sub73_total <80)
                $credit3 = 8;
                else if($sub73_total > 60 &&$sub73_total <= 70 )
                        $credit3 = 7;
                    else if($sub73_total > 45 && $sub73_total <= 60)
                        $credit3 = 6;
                        else if($sub73_total > 40 &&$sub73_total <= 45)
                            $credit3 = 4;
                            else 
                                $credit3 = 0;

    if($sub74_total >= 90 && $sub74_total <= 100)
            $credit4 = 10;
        else if($sub74_total >= 80 && $sub74_total < 90) 
                $credit4 = 9;
            else if($sub74_total >=70 && $sub74_total <80)
                $credit4 = 8;
                else if($sub74_total > 60 &&$sub74_total <= 70 )
                        $credit4 = 7;
                    else if($sub74_total > 45 && $sub74_total <= 60)
                        $credit4 = 6;
                        else if($sub74_total > 40 &&$sub74_total <= 45)
                            $credit4 = 4;
                            else 
                                $credit4 = 0;

    if($sub75_total >= 90 && $sub75_total <= 100)
            $credit5 = 10;
        else if($sub75_total >= 80 && $sub75_total < 90) 
                $credit5 = 9;
            else if($sub75_total >=70 && $sub75_total <80)
                $credit5 = 8;
                else if($sub75_total > 60 &&$sub75_total <= 70 )
                        $credit5 = 7;
                    else if($sub75_total > 45 && $sub75_total <= 60)
                        $credit5 = 6;
                        else if($sub75_total > 40 &&$sub75_total <= 45)
                            $credit5 = 4;
                            else 
                                $credit5 = 0;

    if($sub76_total >= 90 && $sub76_total <= 100)
            $credit6 = 10;
        else if($sub76_total >= 80 && $sub76_total < 90) 
                $credit6 = 9;
            else if($sub76_total >=70 && $sub76_total <80)
                $credit6 = 8;
                else if($sub76_total > 60 &&$sub76_total <= 70 )
                        $credit6 = 7;
                    else if($sub76_total > 45 && $sub76_total <= 60)
                        $credit6 = 6;
                        else if($sub76_total > 40 &&$sub76_total <= 45)
                            $credit6 = 4;
                            else 
                                $credit6 = 0;

    if($sub77_total >= 90 && $sub77_total <= 100)
            $credit7 = 10;
        else if($sub77_total >= 80 && $sub77_total < 90) 
                $credit7 = 9;
            else if($sub77_total >=70 && $sub77_total <80)
                $credit7 = 8;
                else if($sub77_total > 60 &&$sub77_total <= 70 )
                        $credit7 = 7;
                    else if($sub77_total > 45 && $sub77_total <= 60)
                        $credit7 = 6;
                        else if($sub77_total > 40 &&$sub77_total <= 45)
                            $credit7 = 4;
                            else 
                                $credit7 = 0;

    if($sub78_total >= 90 && $sub78_total <= 100)
            $credit8 = 10;
        else if($sub78_total >= 80 && $sub78_total < 90) 
                $credit8 = 9;
            else if($sub78_total >=70 && $sub78_total <80)
                $credit8 = 8;
                else if($sub78_total > 60 &&$sub78_total <= 70 )
                        $credit8 = 7;
                    else if($sub78_total > 45 && $sub78_total <= 60)
                        $credit8 = 6;
                        else if($sub78_total > 40 &&$sub78_total <= 45)
                            $credit8 = 4;
                            else 
                                $credit8 = 0;
        
        $sem7_sgpa = (($credit1 * 3) + ($credit2 * 4) + ($credit3 * 4) + ($credit4 * 3) + ($credit5 * 3) + ($credit6 * 3) + ($credit7 * 2) + ($credit8 * 2)) / 24;

        $sql = "SELECT `sem1_sgpa` FROM `result_cse_sem1` WHERE `u_usn` = '$u_usn'";
        $result = $con2->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo $sgpa = $row['sem1_sgpa'];       
            }
        }

        echo $sql2 = "SELECT `sem2_sgpa` FROM `result_cse_sem2` WHERE `u_usn` = '$u_usn'";
        $result2 = $con2->query($sql2);

        if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            echo $sgpa2 = $row['sem2_sgpa'];       
        }
        }


        echo $sql3 = "SELECT `sem3_sgpa` FROM `result_cse_sem3` WHERE `u_usn` = '$u_usn'";
        $result3 = $con2->query($sql3);

        if ($result3->num_rows > 0) {
        while($row = $result3->fetch_assoc()) {
            echo $sgpa3 = $row['sem3_sgpa'];       
        }
        }

        $sql4 = "SELECT `sem4_sgpa` FROM `result_cse_sem4` WHERE `u_usn` = '$u_usn'";
        $result4 = $con2->query($sql4);

        if ($result4->num_rows > 0) {
        while($row = $result4->fetch_assoc()) {
            echo $sgpa4 = $row['sem4_sgpa'];       
        }
        }

        echo $sql5 = "SELECT `sem5_sgpa` FROM `result_cse_sem5` WHERE `u_usn` = '$u_usn'";
        $result5 = $con2->query($sql5);

        if ($result5->num_rows > 0) {
        while($row = $result5->fetch_assoc()) {
            echo $sgpa5 = $row['sem5_sgpa'];       
        }
        }

        $sql6 = "SELECT `sem6_sgpa` FROM `result_cse_sem6` WHERE `u_usn` = '$u_usn'";
        $result6 = $con2->query($sql6);

        if ($result6->num_rows > 0) {
        while($row = $result6->fetch_assoc()) {
            echo $sgpa6 = $row['sem6_sgpa'];       
        }
        }

        $sem7_cgpa = ( $sgpa + $sgpa2 + $sgpa3 + $sgpa4 + $sgpa5 + $sgpa6  + $sem7_sgpa) / 7;
    
        try{

            $dbo1->beginTransaction(); 

            echo $sql = "INSERT INTO `result_cse_sem7` 
                    (`u_usn`, `sub71_in`, `sub71_ex`, `sub71_total`,
                    `sub72_in`, `sub72_ex`, `sub72_total`, 
                    `sub73_in`, `sub73_ex`, `sub73_total`, 
                    `sub74_in`, `sub74_ex`, `sub74_total`,
                    `sub75_in`, `sub75_ex`, `sub75_total`, 
                    `sub76_in`, `sub76_ex`, `sub76_total`, 
                    `sub77_in`, `sub77_ex`, `sub77_total`, 
                    `sub78_in`, `sub78_ex`, `sub78_total`,
                    `sem7_total`, `sem7_sgpa`, `sem7_cgpa`) 
                    VALUES ('$u_usn', $sub71_in, $sub71_ex, $sub71_total,
                    $sub72_in, $sub72_ex, $sub72_total, 
                    $sub73_in, $sub73_ex, $sub73_total,
                    $sub74_in, $sub74_ex, $sub74_total,
                    $sub75_in, $sub75_ex, $sub75_total,
                    $sub76_in, $sub76_ex, $sub76_total, 
                    $sub77_in, $sub77_ex, $sub77_total,
                    $sub78_in, $sub78_ex, $sub78_total,
                    $sem7_total, $sem7_sgpa, $sem7_cgpa)";

            $stmt = $dbo1->prepare($sql);

            $stmt->execute();
            $lastRow = $dbo1->lastInsertId('$result_cse_sem7'); 
            $dbo1->commit();

            }
            catch(PDOException $e)
            {

            $lastRow = -1; 
            $dbo1->rollback(); 

            }
        redirect('view_result.php'); 
?>
                        

