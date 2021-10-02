<?php
 
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';

    global $dbo1;

    include 'infra/session.php';
    include 'infra/session-details.php';


    echo $u_usn = $_SESSION['u_usn'];

        $sub21_in = $_POST['sub21_in'];
        $sub21_ex = $_POST['sub21_ex'];
        $sub21_total = $_POST['sub21_total'];
        $sub22_in = $_POST['sub22_in'];
        $sub22_ex = $_POST['sub22_ex'];
        $sub22_total = $_POST['sub22_total'];
        $sub23_in = $_POST['sub23_in'];
        $sub23_ex = $_POST['sub23_ex'];
        $sub23_total = $_POST['sub23_total'];
        $sub24_in = $_POST['sub24_in'];
        $sub24_ex = $_POST['sub24_ex'];
        $sub24_total = $_POST['sub24_total'];
        $sub25_in = $_POST['sub25_in'];
        $sub25_ex = $_POST['sub25_ex'];
        $sub25_total = $_POST['sub25_total'];
        $sub26_in = $_POST['sub26_in'];
        $sub26_ex = $_POST['sub26_ex'];
        $sub26_total = $_POST['sub26_total'];
        $sub27_in = $_POST['sub27_in'];
        $sub27_ex = $_POST['sub27_ex'];
        $sub27_total = $_POST['sub27_total'];
        $sub28_in = $_POST['sub28_in'];
        $sub28_ex = $_POST['sub28_ex'];
        $sub28_total = $_POST['sub28_total'];

        $sem2_total = $sub21_total + $sub22_total + $sub23_total + $sub24_total + $sub25_total + $sub26_total + $sub27_total + $sub28_total;

        if($sub21_total >= 90 && $sub21_total <= 100)
            $credit1 = 10;
        else if($sub21_total >= 80 && $sub21_total < 90) 
                $credit1 = 9;
            else if($sub21_total >=70 && $sub21_total <80)
                $credit1 = 8;
                else if($sub21_total > 60 &&$sub21_total <= 70 )
                        $credit1 = 7;
                    else if($sub21_total > 45 && $sub21_total <= 60)
                        $credit1 = 6;
                        else if($sub21_total > 40 &&$sub21_total <= 45)
                            $credit1 = 4;
                            else 
                                $credit1 = 0;

            
            if($sub22_total >= 90 && $sub22_total <= 100)
                    $credit2 = 10;
                else if($sub22_total >= 80 && $sub22_total < 90) 
                        $credit2 = 9;
                    else if($sub22_total >=70 && $sub22_total <80)
                        $credit2 = 8;
                        else if($sub22_total > 60 &&$sub22_total <= 70 )
                                $credit2 = 7;
                            else if($sub22_total > 45 && $sub22_total <= 60)
                                $credit2 = 6;
                                else if($sub22_total > 40 &&$sub22_total <= 45)
                                    $credit2 = 4;
                                    else 
                                        $credit2 = 0;
                        
            if($sub23_total >= 90 && $sub23_total <= 100)
                    $credit3 = 10;
                else if($sub23_total >= 80 && $sub23_total < 90) 
                        $credit3 = 9;
                    else if($sub23_total >=70 && $sub23_total <80)
                        $credit3 = 8;
                        else if($sub23_total > 60 &&$sub23_total <= 70 )
                                $credit3 = 7;
                            else if($sub23_total > 45 && $sub23_total <= 60)
                                $credit3 = 6;
                                else if($sub23_total > 40 &&$sub23_total <= 45)
                                    $credit3 = 4;
                                    else 
                                        $credit3 = 0;
                        
            if($sub24_total >= 90 && $sub24_total <= 100)
                    $credit4 = 10;
                else if($sub24_total >= 80 && $sub24_total < 90) 
                        $credit4 = 9;
                    else if($sub24_total >=70 && $sub24_total <80)
                        $credit4 = 8;
                        else if($sub24_total > 60 &&$sub24_total <= 70 )
                                $credit4 = 7;
                            else if($sub24_total > 45 && $sub24_total <= 60)
                                $credit4 = 6;
                                else if($sub24_total > 40 &&$sub24_total <= 45)
                                    $credit4 = 4;
                                    else 
                                        $credit4 = 0;
            
            if($sub25_total >= 90 && $sub25_total <= 100)
                    $credit5 = 10;
                else if($sub25_total >= 80 && $sub25_total < 90) 
                        $credit5 = 9;
                    else if($sub25_total >=70 && $sub25_total <80)
                        $credit5 = 8;
                        else if($sub25_total > 60 &&$sub25_total <= 70 )
                                $credit5 = 7;
                            else if($sub25_total > 45 && $sub25_total <= 60)
                                $credit5 = 6;
                                else if($sub25_total > 40 &&$sub25_total <= 45)
                                    $credit5 = 4;
                                    else 
                                        $credit5 = 0;
            
            if($sub26_total >= 90 && $sub26_total <= 100)
                    $credit6 = 10;
                else if($sub26_total >= 80 && $sub26_total < 90) 
                        $credit6 = 9;
                    else if($sub26_total >=70 && $sub26_total <80)
                        $credit6 = 8;
                        else if($sub26_total > 60 &&$sub26_total <= 70 )
                                $credit6 = 7;
                            else if($sub26_total > 45 && $sub26_total <= 60)
                                $credit6 = 6;
                                else if($sub26_total > 40 &&$sub26_total <= 45)
                                    $credit6 = 4;
                                    else 
                                        $credit6 = 0;
            
            if($sub27_total >= 90 && $sub27_total <= 100)
                    $credit7 = 10;
                else if($sub27_total >= 80 && $sub27_total < 90) 
                        $credit7 = 9;
                    else if($sub27_total >=70 && $sub27_total <80)
                        $credit7 = 8;
                        else if($sub27_total > 60 &&$sub27_total <= 70 )
                                $credit7 = 7;
                            else if($sub27_total > 45 && $sub27_total <= 60)
                                $credit7 = 6;
                                else if($sub27_total > 40 &&$sub27_total <= 45)
                                    $credit7 = 4;
                                    else 
                                        $credit7 = 0;
            
            if($sub28_total >= 90 && $sub28_total <= 100)
                    $credit8 = 10;
                else if($sub28_total >= 80 && $sub28_total < 90) 
                        $credit8 = 9;
                    else if($sub28_total >=70 && $sub28_total <80)
                        $credit8 = 8;
                        else if($sub28_total > 60 &&$sub28_total <= 70 )
                                $credit8 = 7;
                            else if($sub28_total > 45 && $sub28_total <= 60)
                                $credit8 = 6;
                                else if($sub28_total > 40 &&$sub28_total <= 45)
                                    $credit8 = 4;
                                    else 
                                        $credit8 = 0;

        $sem2_sgpa = (($credit1 * 4) + ($credit2 * 4) + ($credit3 * 3) + ($credit4 * 3) + ($credit5 * 3) + ($credit6 * 1) + ($credit7 * 1) + ($credit8 * 1) ) / 20;

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
        echo $sem2_cgpa = (( $sgpa + $sem2_sgpa) / 2) ;
        try{

            $dbo1->beginTransaction();

            echo $sql = "
                INSERT INTO `result_cse_sem2`
                    (`u_usn`, `sub21_in`, `sub21_ex`, `sub21_total`,
                    `sub22_in`, `sub22_ex`, `sub22_total`, 
                    `sub23_in`, `sub23_ex`, `sub23_total`, 
                    `sub24_in`, `sub24_ex`, `sub24_total`,
                    `sub25_in`, `sub25_ex`, `sub25_total`, 
                    `sub26_in`, `sub26_ex`, `sub26_total`, 
                    `sub27_in`, `sub27_ex`, `sub27_total`, 
                    `sub28_in`, `sub28_ex`, `sub28_total`,
                    `sem2_total`, `sem2_sgpa`, `sem2_cgpa`) 
                    VALUES ('$u_usn', $sub21_in, $sub21_ex, $sub21_total,
                    $sub22_in, $sub22_ex, $sub22_total, 
                    $sub23_in, $sub23_ex, $sub23_total,
                    $sub24_in, $sub24_ex, $sub24_total,
                    $sub25_in, $sub25_ex, $sub25_total,
                    $sub26_in, $sub26_ex, $sub26_total, 
                    $sub27_in, $sub27_ex, $sub27_total,
                    $sub28_in, $sub28_ex, $sub28_total,
                    $sem2_total, $sem2_sgpa, $sem2_cgpa)"; 
            
                    $stmt = $dbo1->prepare($sql);

                    $stmt->execute();
                    $lastRow = $dbo1->lastInsertId('$result_cse_sem2'); 
                    $dbo1->commit();

                }
                catch(PDOException $e)
                {
            
                    $lastRow = -1; 
                    $dbo1->rollback(); 
                    
                }

    redirect('view_result.php'); 
?>