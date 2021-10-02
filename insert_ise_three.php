<?php
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';
    error_reporting(0);
    global $dbo1;

    $u_usn = $_SESSION['u_usn'];
    $sub31_in = $_POST['sub31_in'];
    $sub31_ex = $_POST['sub31_ex'];
    $sub31_total = $_POST['sub31_total'];
    $sub32_in = $_POST['sub32_in'];
    $sub32_ex = $_POST['sub32_ex'];
    $sub32_total = $_POST['sub32_total'];
    $sub33_in = $_POST['sub33_in'];
    $sub33_ex = $_POST['sub33_ex'];
    $sub33_total = $_POST['sub33_total'];
    $sub34_in = $_POST['sub34_in'];
    $sub34_ex = $_POST['sub34_ex'];
    $sub34_total = $_POST['sub34_total'];
    $sub35_in = $_POST['sub35_in'];
    $sub35_ex = $_POST['sub35_ex'];
    $sub35_total = $_POST['sub35_total'];
    $sub36_in = $_POST['sub36_in'];
    $sub36_ex = $_POST['sub36_ex'];
    $sub36_total = $_POST['sub36_total'];
    $sub37_in = $_POST['sub37_in'];
    $sub37_ex = $_POST['sub37_ex'];
    $sub37_total = $_POST['sub37_total'];
    $sub38_in = $_POST['sub38_in'];
    $sub38_ex = $_POST['sub38_ex'];
    $sub38_total = $_POST['sub38_total'];
    echo $sub39_in = $_POST['sub39_in'];
    echo $sub39_ex = $_POST['sub39_ex'];
    echo $sub39_total = $_POST['sub39_total'];

    $sem3_total = $sub31_total + $sub32_total + $sub33_total + $sub34_total + $sub35_total + $sub36_total + $sub37_total + $sub38_total + $sub39_total;

    if($sub31_total >= 90 && $sub31_total <= 100)
        $credit1 = 10;
    else if($sub31_total >= 80 && $sub31_total < 90) 
            $credit1 = 9;
        else if($sub31_total >=70 && $sub31_total <80)
            $credit1 = 8;
            else if($sub31_total > 60 &&$sub31_total <= 70 )
                    $credit1 = 7;
                else if($sub31_total > 45 && $sub31_total <= 60)
                    $credit1 = 6;
                    else if($sub31_total > 40 &&$sub31_total <= 45)
                        $credit1 = 4;
                        else 
                            $credit1 = 0;

    if($sub32_total >= 90 && $sub32_total <= 100)
            $credit2 = 10;
        else if($sub32_total >= 80 && $sub32_total < 90) 
                $credit2 = 9;
            else if($sub32_total >=70 && $sub32_total <80)
                $credit2 = 8;
                else if($sub32_total > 60 &&$sub32_total <= 70 )
                        $credit2 = 7;
                    else if($sub32_total > 45 && $sub32_total <= 60)
                        $credit2 = 6;
                        else if($sub32_total > 40 &&$sub32_total <= 45)
                            $credit2 = 4;
                            else 
                                $credit2 = 0;

    if($sub33_total >= 90 && $sub33_total <= 100)
            $credit3 = 10;
        else if($sub33_total >= 80 && $sub33_total < 90) 
                $credit3 = 9;
            else if($sub33_total >=70 && $sub33_total <80)
                $credit3 = 8;
                else if($sub33_total > 60 &&$sub33_total <= 70 )
                        $credit3 = 7;
                    else if($sub33_total > 45 && $sub33_total <= 60)
                        $credit3 = 6;
                        else if($sub33_total > 40 &&$sub33_total <= 45)
                            $credit3 = 4;
                            else 
                                $credit3 = 0;

    if($sub34_total >= 90 && $sub34_total <= 100)
            $credit4 = 10;
        else if($sub34_total >= 80 && $sub34_total < 90) 
                $credit4 = 9;
            else if($sub34_total >=70 && $sub34_total <80)
                $credit4 = 8;
                else if($sub34_total > 60 &&$sub34_total <= 70 )
                        $credit4 = 7;
                    else if($sub34_total > 45 && $sub34_total <= 60)
                        $credit4 = 6;
                        else if($sub34_total > 40 &&$sub34_total <= 45)
                            $credit4 = 4;
                            else 
                                $credit4 = 0;

    if($sub35_total >= 90 && $sub35_total <= 100)
            $credit5 = 10;
        else if($sub35_total >= 80 && $sub35_total < 90) 
                $credit5 = 9;
            else if($sub35_total >=70 && $sub35_total <80)
                $credit5 = 8;
                else if($sub35_total > 60 &&$sub35_total <= 70 )
                        $credit5 = 7;
                    else if($sub35_total > 45 && $sub35_total <= 60)
                        $credit5 = 6;
                        else if($sub35_total > 40 &&$sub35_total <= 45)
                            $credit5 = 4;
                            else 
                                $credit5 = 0;

    if($sub36_total >= 90 && $sub36_total <= 100)
            $credit6 = 10;
        else if($sub36_total >= 80 && $sub36_total < 90) 
                $credit6 = 9;
            else if($sub36_total >=70 && $sub36_total <80)
                $credit6 = 8;
                else if($sub36_total > 60 &&$sub36_total <= 70 )
                        $credit6 = 7;
                    else if($sub36_total > 45 && $sub36_total <= 60)
                        $credit6 = 6;
                        else if($sub36_total > 40 &&$sub36_total <= 45)
                            $credit6 = 4;
                            else 
                                $credit6 = 0;

    if($sub37_total >= 90 && $sub37_total <= 100)
            $credit7 = 10;
        else if($sub37_total >= 80 && $sub37_total < 90) 
                $credit7 = 9;
            else if($sub37_total >=70 && $sub37_total <80)
                $credit7 = 8;
                else if($sub37_total > 60 &&$sub37_total <= 70 )
                        $credit7 = 7;
                    else if($sub37_total > 45 && $sub37_total <= 60)
                        $credit7 = 6;
                        else if($sub37_total > 40 &&$sub37_total <= 45)
                            $credit7 = 4;
                            else 
                                $credit7 = 0;

    if($sub38_total >= 90 && $sub38_total <= 100)
            $credit8 = 10;
        else if($sub38_total >= 80 && $sub38_total < 90) 
                $credit8 = 9;
            else if($sub38_total >=70 && $sub38_total <80)
                $credit8 = 8;
                else if($sub38_total > 60 && $sub38_total <= 70 )
                        $credit8 = 7;
                    else if($sub38_total > 45 && $sub38_total <= 60)
                        $credit8 = 6;
                        else if($sub38_total > 40 && $sub38_total <= 45)
                            $credit8 = 4;
                            else 
                                $credit8 = 0;

    if($sub39_total >= 90 && $sub39_total <= 100)
            $credit9 = 10;
        else if($sub39_total >= 80 && $sub39_total < 90) 
                $credit9 = 9;
            else if($sub39_total >=70 && $sub39_total <80)
                $credit9 = 8;
                else if($sub39_total > 60 && $sub39_total <= 70 )
                        $credit9 = 7;
                    else if($sub39_total > 45 && $sub39_total <= 60)
                        $credit9 = 6;
                        else if($sub39_total > 40 && $sub39_total <= 45)
                            $credit9 = 4;
                            else 
                                $credit9 = 0;
    
    
    $sem3_sgpa = (($credit1 * 3) + ($credit2 * 4) + ($credit3 * 3) + ($credit4 * 3) + ($credit5 * 3) + ($credit6 * 3) + ($credit7 * 2) + ($credit8 * 2) + ($credit9 * 1)) / 24;

    $sql = "SELECT `sem1_sgpa` FROM `result_ise_sem1` WHERE `u_usn` = '$u_usn'";
    $result = $con2->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           echo $sgpa = $row['sem1_sgpa'];       
        }
    }

    $sql2 = "SELECT `sem2_sgpa` FROM `result_ise_sem2` WHERE `u_usn` = '$u_usn'";
    $result2 = $con2->query($sql2);

    if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        echo $sgpa2 = $row['sem2_sgpa'];       
    }
    }

    $sem3_cgpa = ( $sgpa + $sgpa2 + $sem3_sgpa) / 3;

    try{

        $dbo1->beginTransaction();
        
        echo $sql = "INSERT INTO `result_ise_sem3` 
            (`u_usn`, `sub31_in`, `sub31_ex`, `sub31_total`,
            `sub32_in`, `sub32_ex`, `sub32_total`, 
            `sub33_in`, `sub33_ex`, `sub33_total`, 
            `sub34_in`, `sub34_ex`, `sub34_total`,
            `sub35_in`, `sub35_ex`, `sub35_total`, 
            `sub36_in`, `sub36_ex`, `sub36_total`, 
            `sub37_in`, `sub37_ex`, `sub37_total`, 
            `sub38_in`, `sub38_ex`, `sub38_total`,
            `sub39_in`, `sub39_ex`, `sub39_total`,
            `sem3_total`, `sem3_sgpa`, `sem3_cgpa`) 
            VALUES ('$u_usn', $sub31_in, $sub31_ex, $sub31_total,
            $sub32_in, $sub32_ex, $sub32_total, 
            $sub33_in, $sub33_ex, $sub33_total,
            $sub34_in, $sub34_ex, $sub34_total,
            $sub35_in, $sub35_ex, $sub35_total,
            $sub36_in, $sub36_ex, $sub36_total, 
            $sub37_in, $sub37_ex, $sub37_total,
            $sub38_in, $sub38_ex, $sub38_total,
            $sub39_in, $sub39_ex, $sub39_total,
            $sem3_total, $sem3_sgpa, $sem3_cgpa)";
        
            $stmt = $dbo1->prepare($sql);

            $stmt->execute();
            $lastRow = $dbo1->lastInsertId('$result_ise_sem3'); 
            $dbo1->commit();

        }
        catch(PDOException $e)
        {

            $lastRow = -1; 
            $dbo1->rollback(); 
            
    }

    redirect('view_result_ise.php'); 
?>
                            


