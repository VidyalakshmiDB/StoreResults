<?php
    include "DB/dbconfig.php";
    include "lib/form-manip.php";
    include 'infra/session.php';
    include 'infra/session-details.php';

    global $dbo1;

    echo $u_usn = $_SESSION['u_usn'];

    $sub11_in        =      $_POST['sub11_in'];
    $sub11_ex        =      $_POST['sub11_ex'];
    $sub11_total     =      $_POST['sub11_total'];
    $sub12_in        =      $_POST['sub12_in'];
    $sub12_ex        =      $_POST['sub12_ex'];
    $sub12_total     =      $_POST['sub12_total'];
    $sub13_in        =      $_POST['sub13_in'];
    $sub13_ex        =      $_POST['sub13_ex'];
    $sub13_total     =      $_POST['sub13_total'];
    $sub14_in        =      $_POST['sub14_in'];
    $sub14_ex        =      $_POST['sub14_ex'];
    $sub14_total     =      $_POST['sub14_total'];
    $sub15_in        =      $_POST['sub15_in'];
    $sub15_ex        =      $_POST['sub15_ex'];
    $sub15_total     =      $_POST['sub15_total'];
    $sub16_in        =      $_POST['sub16_in'];
    $sub16_ex        =      $_POST['sub16_ex'];
    $sub16_total     =      $_POST['sub16_total'];
    $sub17_in        =      $_POST['sub17_in'];
    $sub17_ex        =      $_POST['sub17_ex'];
    $sub17_total     =      $_POST['sub17_total'];
    $sub18_in        =      $_POST['sub18_in'];
    $sub18_ex        =      $_POST['sub18_ex'];
    $sub18_total     =      $_POST['sub18_total'];

    $sem1_total = $sub11_total + $sub12_total + $sub13_total + $sub14_total + $sub15_total + $sub16_total+ $sub17_total + $sub18_total;

    if($sub11_total >= 90 && $sub11_total <= 100)
        $credit1 = 10;
    else if($sub11_total >= 80 && $sub11_total < 90) 
            $credit1 = 9;
        else if($sub11_total >=70 && $sub11_total <80)
            $credit1 = 8;
            else if($sub11_total >= 60 && $sub11_total < 70 )
                    $credit1 = 7;
                else if($sub11_total >= 45 && $sub11_total < 60)
                    $credit1 = 6;
                    else if($sub11_total >= 40 && $sub11_total < 45)
                        $credit1 = 4;
                        else 
                            $credit1 = 0;

    if($sub12_total >= 90 && $sub12_total <= 100)
        $credit2 = 10;
    else if($sub12_total >= 80 && $sub12_total < 90) 
            $credit2 = 9;
        else if($sub12_total >=70 && $sub12_total <80)
            $credit2 = 8;
            else if($sub12_total >= 60 && $sub12_total < 70 )
                    $credit2 = 7;
                else if($sub12_total >= 45 && $sub12_total < 60)
                    $credit2 = 6;
                    else if($sub12_total >= 40 && $sub12_total < 45)
                        $credit2 = 4;
                        else 
                            $credit2 = 0; 
                    
    if($sub13_total >= 90 && $sub13_total <= 100)
        $credit3 = 10;
    else if($sub13_total >= 80 && $sub13_total < 90) 
            $credit3 = 9;
        else if($sub13_total >=70 && $sub13_total <80)
            $credit3 = 8;
            else if($sub13_total >= 60 && $sub13_total < 70 )
                    $credit3 = 7;
                else if($sub13_total >= 45 && $sub13_total < 60)
                    $credit3 = 6;
                    else if($sub13_total >= 40 && $sub13_total < 45)
                        $credit3 = 4;
                        else 
                            $credit3 = 0;
    
    if($sub14_total >= 90 && $sub14_total <= 100)
        $credit4 = 10;
    else if($sub14_total >= 80 && $sub14_total < 90) 
            $credit4 = 9;
        else if($sub14_total >=70 && $sub14_total <80)
            $credit4 = 8;
            else if($sub14_total >= 60 && $sub14_total < 70 )
                    $credit4 = 7;
                else if($sub14_total >= 45 && $sub14_total < 60)
                    $credit4 = 6;
                    else if($sub14_total >= 40 && $sub14_total < 45)
                        $credit4 = 4;
                        else 
                            $credit4 = 0;

    if($sub15_total >= 90 && $sub15_total <= 100)
        $credit5 = 10;
    else if($sub15_total >= 80 && $sub15_total < 90) 
            $credit5 = 9;
        else if($sub15_total >=70 && $sub15_total <80)
            $credit5 = 8;
            else if($sub15_total >= 60 && $sub15_total < 70 )
                    $credit5 = 7;
                else if($sub15_total >= 45 && $sub15_total < 60)
                    $credit5 = 6;
                    else if($sub15_total >= 40 && $sub15_total < 45)
                        $credit5 = 4;
                        else 
                            $credit5 = 0;
        
    if($sub16_total >= 90 && $sub16_total <= 100)
    $credit6 = 10;
    else if($sub16_total >= 80 && $sub16_total < 90) 
            $credit6 = 9;
        else if($sub16_total >=70 && $sub16_total <80)
            $credit6 = 8;
            else if($sub16_total >= 60 && $sub16_total < 70 )
                    $credit6 = 7;
                else if($sub16_total >= 45 && $sub16_total < 60)
                    $credit6 = 6;
                    else if($sub16_total >= 40 && $sub16_total < 45)
                        $credit6 = 4;
                        else 
                            $credit6 = 0;

    if($sub17_total >= 90 && $sub17_total <= 100)
        $credit7 = 10;
    else if($sub17_total >= 80 && $sub17_total < 90) 
            $credit7 = 9;
        else if($sub17_total >=70 && $sub17_total <80)
            $credit7 = 8;
            else if($sub17_total >= 60 && $sub17_total < 70 )
                    $credit7 = 7;
                else if($sub17_total >= 45 && $sub17_total < 60)
                    $credit7 = 6;
                    else if($sub17_total >= 40 && $sub17_total < 45)
                        $credit7 = 4;
                        else 
                            $credit7 = 0;
        

    if($sub18_total >= 90 && $sub18_total <= 100)
        $credit8 = 10;
    else if($sub18_total >= 80 && $sub18_total < 90) 
            $credit8 = 9;
        else if($sub18_total >=70 && $sub18_total <80)
            $credit8 = 8;
            else if($sub18_total >= 60 && $sub18_total < 70 )
                    $credit8 = 7;
                else if($sub18_total >= 45 && $sub18_total < 60)
                    $credit8 = 6;
                    else if($sub18_total >= 40 && $sub18_total < 45)
                        $credit8 = 4;
                        else 
                            $credit8 = 0;
    
    $sem1_sgpa = (($credit1 * 4) + ($credit2 * 4) + ($credit3 * 3) + ($credit4 * 3) + ($credit5 * 3) + ($credit6 * 1) + ($credit7 * 1) + ($credit8 * 1) ) / 20;


    try{

        $dbo1->beginTransaction();

        echo $sql = "INSERT INTO `result_cse_sem1` (`u_usn`, `sub11_in`, `sub11_ex`, `sub11_total`, `sub12_in`, `sub12_ex`, `sub12_total`, `sub13_in`, `sub13_ex`, `sub13_total`, `sub14_in`, `sub14_ex`, `sub14_total`, `sub15_in`, `sub15_ex`, `sub15_total`, `sub16_in`, `sub16_ex`, `sub16_total`, `sub17_in`, `sub17_ex`, `sub17_total`, `sub18_in`, `sub18_ex`, `sub18_total`, `sem1_total`, `sem1_sgpa`) 
        VALUES ('$u_usn', '$sub11_in', '$sub11_ex', '$sub11_total', '$sub12_in', '$sub12_ex', '$sub12_total', $sub13_in, $sub13_ex, $sub13_total, $sub14_in, $sub14_ex, $sub14_total,$sub15_in, $sub15_ex, $sub15_total, $sub16_in, $sub16_ex, $sub16_total, $sub17_in, $sub17_ex, $sub17_total, $sub18_in, $sub18_ex, $sub18_total, $sem1_total, $sem1_sgpa)";
		
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
