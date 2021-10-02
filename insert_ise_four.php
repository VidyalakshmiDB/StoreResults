<?php
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';

    global $dbo1;
    $u_usn = $_SESSION['u_usn'];
    $sub41_in = $_POST['sub41_in'];
    $sub41_ex = $_POST['sub41_ex'];
    $sub41_total = $_POST['sub41_total'];
    $sub42_in = $_POST['sub42_in'];
    $sub42_ex = $_POST['sub42_ex'];
    $sub42_total = $_POST['sub42_total'];
    $sub43_in = $_POST['sub43_in'];
    $sub43_ex = $_POST['sub43_ex'];
    $sub43_total = $_POST['sub43_total'];
    $sub44_in = $_POST['sub44_in'];
    $sub44_ex = $_POST['sub44_ex'];
    $sub44_total = $_POST['sub44_total'];
    $sub45_in = $_POST['sub45_in'];
    $sub45_ex = $_POST['sub45_ex'];
    $sub45_total = $_POST['sub45_total'];
    $sub46_in = $_POST['sub46_in'];
    $sub46_ex = $_POST['sub46_ex'];
    $sub46_total = $_POST['sub46_total'];
    $sub47_in = $_POST['sub47_in'];
    $sub47_ex = $_POST['sub47_ex'];
    $sub47_total = $_POST['sub47_total'];
    $sub48_in = $_POST['sub48_in'];
    $sub48_ex = $_POST['sub48_ex'];
    $sub48_total = $_POST['sub48_total'];
    $sub49_in = $_POST['sub49_in'];
    $sub49_ex = $_POST['sub49_ex'];
    $sub49_total = $_POST['sub49_total'];

    $sem4_total = $sub41_total + $sub42_total + $sub43_total + $sub44_total + $sub45_total + $sub46_total + $sub47_total + $sub48_total + $sub49_total;

    if($sub41_total >= 90 && $sub41_total <= 100)
        $credit1 = 10;
    else if($sub41_total >= 80 && $sub41_total < 90) 
            $credit1 = 9;
        else if($sub41_total >=70 && $sub41_total <80)
            $credit1 = 8;
            else if($sub41_total > 60 &&$sub41_total <= 70 )
                    $credit1 = 7;
                else if($sub41_total > 45 && $sub41_total <= 60)
                    $credit1 = 6;
                    else if($sub41_total > 40 &&$sub41_total <= 45)
                        $credit1 = 4;
                        else 
                            $credit1 = 0;

    if($sub42_total >= 90 && $sub42_total <= 100)
            $credit2 = 10;
        else if($sub42_total >= 80 && $sub42_total < 90) 
                $credit2 = 9;
            else if($sub42_total >=70 && $sub42_total <80)
                $credit2 = 8;
                else if($sub42_total > 60 &&$sub42_total <= 70 )
                        $credit2 = 7;
                    else if($sub42_total > 45 && $sub42_total <= 60)
                        $credit2 = 6;
                        else if($sub42_total > 40 &&$sub42_total <= 45)
                            $credit2 = 4;
                            else 
                                $credit2 = 0;

    if($sub43_total >= 90 && $sub43_total <= 100)
            $credit3 = 10;
        else if($sub43_total >= 80 && $sub43_total < 90) 
                $credit3 = 9;
            else if($sub43_total >=70 && $sub43_total <80)
                $credit3 = 8;
                else if($sub43_total > 60 &&$sub43_total <= 70 )
                        $credit3 = 7;
                    else if($sub43_total > 45 && $sub43_total <= 60)
                        $credit3 = 6;
                        else if($sub43_total > 40 &&$sub43_total <= 45)
                            $credit3 = 4;
                            else 
                                $credit3 = 0;

    if($sub44_total >= 90 && $sub44_total <= 100)
            $credit4 = 10;
        else if($sub44_total >= 80 && $sub44_total < 90) 
                $credit4 = 9;
            else if($sub44_total >=70 && $sub44_total <80)
                $credit4 = 8;
                else if($sub44_total > 60 &&$sub44_total <= 70 )
                        $credit4 = 7;
                    else if($sub44_total > 45 && $sub44_total <= 60)
                        $credit4 = 6;
                        else if($sub44_total > 40 &&$sub44_total <= 45)
                            $credit4 = 4;
                            else 
                                $credit4 = 0;

    if($sub45_total >= 90 && $sub45_total <= 100)
            $credit5 = 10;
        else if($sub45_total >= 80 && $sub45_total < 90) 
                $credit5 = 9;
            else if($sub45_total >=70 && $sub45_total <80)
                $credit5 = 8;
                else if($sub45_total > 60 &&$sub45_total <= 70 )
                        $credit5 = 7;
                    else if($sub45_total > 45 && $sub45_total <= 60)
                        $credit5 = 6;
                        else if($sub45_total > 40 &&$sub45_total <= 45)
                            $credit5 = 4;
                            else 
                                $credit5 = 0;

    if($sub46_total >= 90 && $sub46_total <= 100)
            $credit6 = 10;
        else if($sub46_total >= 80 && $sub46_total < 90) 
                $credit6 = 9;
            else if($sub46_total >=70 && $sub46_total <80)
                $credit6 = 8;
                else if($sub46_total > 60 &&$sub46_total <= 70 )
                        $credit6 = 7;
                    else if($sub46_total > 45 && $sub46_total <= 60)
                        $credit6 = 6;
                        else if($sub46_total > 40 &&$sub46_total <= 45)
                            $credit6 = 4;
                            else 
                                $credit6 = 0;

    if($sub47_total >= 90 && $sub47_total <= 100)
            $credit7 = 10;
        else if($sub47_total >= 80 && $sub47_total < 90) 
                $credit7 = 9;
            else if($sub47_total >=70 && $sub47_total <80)
                $credit7 = 8;
                else if($sub47_total > 60 &&$sub47_total <= 70 )
                        $credit7 = 7;
                    else if($sub47_total > 45 && $sub47_total <= 60)
                        $credit7 = 6;
                        else if($sub47_total > 40 &&$sub47_total <= 45)
                            $credit7 = 4;
                            else 
                                $credit7 = 0;

    if($sub48_total >= 90 && $sub48_total <= 100)
            $credit8 = 10;
        else if($sub48_total >= 80 && $sub48_total < 90) 
                $credit8 = 9;
            else if($sub48_total >=70 && $sub48_total <80)
                $credit8 = 8;
                else if($sub48_total > 60 &&$sub48_total <= 70 )
                        $credit8 = 7;
                    else if($sub48_total > 45 && $sub48_total <= 60)
                        $credit8 = 6;
                        else if($sub48_total > 40 &&$sub48_total <= 45)
                            $credit8 = 4;
                            else 
                                $credit8 = 0;

    if($sub49_total >= 90 && $sub48_total <= 100)
        $credit9 = 10;
    else if($sub49_total >= 80 && $sub48_total < 90) 
            $credit9 = 9;
        else if($sub49_total >=70 && $sub48_total <80)
            $credit9 = 8;
            else if($sub49_total > 60 &&$sub48_total <= 70 )
                    $credit9 = 7;
                else if($sub49_total > 45 && $sub48_total <= 60)
                    $credit9 = 6;
                    else if($sub49_total > 40 &&$sub48_total <= 45)
                        $credit9 = 4;
                        else 
                            $credit9 = 0;

    $sem4_sgpa = (($credit1 * 3) + ($credit2 * 4) + ($credit3 * 3) + ($credit4 * 3) + ($credit5 * 3) + ($credit6 * 3) + ($credit7 * 2) + ($credit8 * 2) + ($credit9 * 1)) / 24;

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

    $sem4_cgpa = ( $sgpa + $sgpa2 + $sgpa3 + $sem4_sgpa) / 4;

    try{

        $dbo1->beginTransaction();

        echo $sql = "INSERT INTO `result_ise_sem4` 
            (`u_usn`, `sub41_in`, `sub41_ex`, `sub41_total`,
            `sub42_in`, `sub42_ex`, `sub42_total`, 
            `sub43_in`, `sub43_ex`, `sub43_total`, 
            `sub44_in`, `sub44_ex`, `sub44_total`,
            `sub45_in`, `sub45_ex`, `sub45_total`, 
            `sub46_in`, `sub46_ex`, `sub46_total`, 
            `sub47_in`, `sub47_ex`, `sub47_total`, 
            `sub48_in`, `sub48_ex`, `sub48_total`,
            `sem4_total`, `sem4_sgpa`, `sem4_cgpa`) 
            VALUES ('$u_usn', $sub41_in, $sub41_ex, $sub41_total,
            $sub42_in, $sub42_ex, $sub42_total, 
            $sub43_in, $sub43_ex, $sub43_total,
            $sub44_in, $sub44_ex, $sub44_total,
            $sub45_in, $sub45_ex, $sub45_total,
            $sub46_in, $sub46_ex, $sub46_total, 
            $sub47_in, $sub47_ex, $sub47_total,
            $sub48_in, $sub48_ex, $sub48_total,
            $sem4_total, $sem4_sgpa, $sem4_cgpa)";

            $stmt = $dbo1->prepare($sql);

            $stmt->execute();
            $lastRow = $dbo1->lastInsertId('$result_ise_sem4'); 
            $dbo1->commit();

        }
        catch(PDOException $e)
        {

            $lastRow = -1; 
            $dbo1->rollback(); 

        }


    redirect('view_result_ise.php'); 
?>