
<div class="modal fade" id="exampleissemone" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">1st Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise.php">
                    <table style="overflow-x:auto;" class="table">
                        <tr> 
                            <th><h4>Code </h4></th>
                            <th><h4>Subject name </h4></th>
                            <th><h4> Internal </h4></th>
                            <th><h4> External </h4></th>
                            <th> <h4>Total </h4></th>
                        </tr>
                        <tr>
                            <td><h6>18MAT11</h6> </td>
                            <td class="cell-breakWord"><h6>CALCULUS AND LINEAR ALGEBRA</h6>	 </td>
                            <td><input type="text" class="form-control" name="sub11_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub11_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub11_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18PHY12</h6> </td>
                            <td class="cell-breakWord"> <h6>ENGINEERING PHYSICS</h6> </td>
                            <td><input type="text" class="form-control" name="sub12_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub12_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub12_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18ELE13 </h6></td>
                            <td class="cell-breakWord"><h6> BASIC ELECTRICAL ENGINEERING </h6></td>
                            <td><input type="text" class="form-control" name="sub13_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub13_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub13_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CIV14</h6> </td>
                            <td class="cell-breakWord"><h6>ELEMENTS OF CIVIL ENGINEERING AND MECHANICS</h6> </td>
                            <td><input type="text" class="form-control" name="sub14_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub14_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub14_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18EGDL15</h6></td>
                            <td class="cell-breakWord"><h6>ENGINEERING GRAPHICS</h6> </td>
                            <td><input type="text" class="form-control" name="sub15_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub15_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub15_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18PHYL16 </h6></td>
                            <td class="cell-breakWord"> <h6>ENGINEERING PHYSICS LABORATORY</h6> </td>
                            <td><input type="text" class="form-control" name="sub16_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub16_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub16_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18ELEL17 </h6></td>
                            <td class="cell-breakWord"> <h6> BASIC ELECTRICAL ENGINEERING LABORATORY </h6></td>
                            <td><input type="text" class="form-control" name="sub17_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub17_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub17_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6>18EGH18</h6> </td>
                            <td class="cell-breakWord"> <h6>TECHNICAL ENGLISH-I </h6></td>
                            <td><input type="text" class="form-control" name="sub18_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub18_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub18_total" placeholder="" required></td>
                        </tr>
                    </table>
                            
                        <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------------------->

<div class="modal fade" id="exampleissemtwo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">2nd Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise_two.php">
                    <table class="table">
                        <tr> 
                            <th><h4>Code </h4></th>
                            <th><h4>Subject name </h4></th>
                            <th><h4> Internal </h4></th>
                            <th><h4> External </h4></th>
                            <th> <h4>Total </h4></th>
                        </tr>
                        <tr>
                            <td><h6>18MAT21</h6> </td>
                            <td class="cell-breakWord"><h6>ADVANCED CALCULUS AND NUMERICAL METHODS</h6>	 </td>
                            <td><input type="text" class="form-control" name="sub21_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub21_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub21_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CHE22</h6> </td>
                            <td class="cell-breakWord"> <h6>ENGINEERING CHEMISTRY</h6> </td>
                            <td><input type="text" class="form-control" name="sub22_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub22_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub22_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CPS23 </h6></td>
                            <td class="cell-breakWord"><h6> C PROGRAMMING FOR PROBLEM SOLVING </h6></td>
                            <td><input type="text" class="form-control" name="sub23_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub23_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub23_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18ELN24</h6> </td>
                            <td class="cell-breakWord"><h6>BASIC ELECTRONICS</h6> </td>
                            <td><input type="text" class="form-control" name="sub24_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub24_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub24_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18ME25</h6></td>
                            <td class="cell-breakWord"><h6>ELEMENTS OF MECHANICAL ENGINEERING</h6> </td>
                            <td><input type="text" class="form-control" name="sub25_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub25_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub25_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CHEL26 </h6></td>
                            <td class="cell-breakWord"> <h6>ENGINEERING CHEMISTRY LABORATORY</h6> </td>
                            <td><input type="text" class="form-control" name="sub26_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub26_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub26_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CPL27 </h6></td>
                            <td class="cell-breakWord"> <h6> C PROGRAMMING LABORATORY </h6></td>
                            <td><input type="text" class="form-control" name="sub27_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub27_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub27_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6>18EGH28</h6> </td>
                            <td class="cell-breakWord"> <h6>TECHNICAL ENGLISH-II</h6></td>
                            <td><input type="text" class="form-control" name="sub28_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub28_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub28_total" placeholder="" required></td>
                        </tr>
                    </table>
                        <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------------------------------------->


<div class="modal fade" id="exampleissemthree" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">3rd Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise_three.php">
                        <table class="table">
                        <tr> 
                            <th> Code </th>
                            <th> Subject name </th>
                            <th> Internal </th>
                            <th> External </th>
                            <th> Total </th>
                        </tr>
                        <tr>
                            <td><h6>18MAT31</h6> </td>
                            <td class="cell-breakWord"><h6>TRANSFORM CALCULUS,FOURIER SERIES & NUM TECH</h6>	 </td>
                            <td><input type="text" class="form-control" name="sub31_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub31_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub31_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS32</h6> </td>
                            <td class="cell-breakWord"> <h6>DATA STRUCTURES AND APPLICATIONS</h6> </td>
                            <td><input type="text" class="form-control" name="sub32_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub32_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub32_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS33 </h6></td>
                            <td class="cell-breakWord"><h6> ANALOG AND DIGITAL ELECTRONICS </h6></td>
                            <td><input type="text" class="form-control" name="sub33_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub33_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub33_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS34</h6> </td>
                            <td class="cell-breakWord"><h6>COMPUTER ORGANIZATION</h6> </td>
                            <td><input type="text" class="form-control" name="sub34_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub34_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub34_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS35</h6></td>
                            <td class="cell-breakWord"><h6>SOFTWARE ENGINEERING</h6> </td>
                            <td><input type="text" class="form-control" name="sub35_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub35_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub35_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS36 </h6></td>
                            <td class="cell-breakWord"> <h6>Discrete Mathematical Structures</h6> </td>
                            <td><input type="text" class="form-control" name="sub36_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub36_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub36_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CSL37 </h6></td>
                            <td class="cell-breakWord"> <h6> ANALOG AND DIGITAL ELECTRONICS LABORATORY </h6></td>
                            <td><input type="text" class="form-control" name="sub37_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub37_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub37_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CSL38 </h6></td>
                            <td class="cell-breakWord"> <h6> Data Strutures LABORATORY </h6></td>
                            <td><input type="text" class="form-control" name="sub38_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub38_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub38_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6>18CPC39</h6> </td>
                            <td class="cell-breakWord"> <h6>CONST. OF INDIA, PROF. ETHICS & CYBER LAW</h6></td>
                            <td><input type="text" class="form-control" name="sub39_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub39_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub39_total" placeholder="" required></td>
                        </tr>
                    </table>
                    <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------------------------------------------------------->

<div class="modal fade" id="exampleissemfour" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">4th Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise_four.php">
                    <table class="table">
                        <tr> 
                            <th> Code </th>
                            <th> Subject name </th>
                            <th> Internal </th>
                            <th> External </th>
                            <th> Total </th>
                        </tr>
                        <tr>
                            <td><h6>18MAT41</h6> </td>
                            <td class="cell-breakWord"><h6>COMPLEX ANALYSIS, PROBABILITY AND STATISTICS</h6>	 </td>
                            <td><input type="text" class="form-control" name="sub41_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub41_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub41_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS42</h6> </td>
                            <td class="cell-breakWord"> <h6>DESIGN AND ANALYSIS OF ALGORITHMS</h6> </td>
                            <td><input type="text" class="form-control" name="sub42_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub42_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub42_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS43 </h6></td>
                            <td class="cell-breakWord"><h6> OPERATING SYSTEMS </h6></td>
                            <td><input type="text" class="form-control" name="sub43_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub43_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub43_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS44</h6> </td>
                            <td class="cell-breakWord"><h6>MICROCONTROLLER AND EMBEDDED SYSTEMS</h6> </td>
                            <td><input type="text" class="form-control" name="sub44_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub44_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub44_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS45</h6></td>
                            <td class="cell-breakWord"><h6>OBJECT ORIENTED CONCEPTS</h6> </td>
                            <td><input type="text" class="form-control" name="sub45_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub45_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub45_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS46 </h6></td>
                            <td class="cell-breakWord"> <h6>DATA COMMUNICATION</h6> </td>
                            <td><input type="text" class="form-control" name="sub46_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub46_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub46_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CSL47 </h6></td>
                            <td class="cell-breakWord"> <h6> DESIGN AND ANALYSIS OF ALGORITHMS LABORATORY</h6></td>
                            <td><input type="text" class="form-control" name="sub47_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub47_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub47_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6>18CSL48 </h6> </td>
                            <td class="cell-breakWord"> <h6>MICROCONTROLLER AND EMBEDDED SYSTEMS LAB</h6></td>
                            <td><input type="text" class="form-control" name="sub48_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub48_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub48_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6>18KVK49 / 18KAK50</h6> </td>
                            <td class="cell-breakWord"> <h6>VYAVAHARIKA KANNADA / ADALITHA KANNADA</h6></td>
                            <td><input type="text" class="form-control" name="sub49_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub49_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub49_total" placeholder="" required></td>
                        </tr>
                    </table>
                    <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------------------------->

<div class="modal fade" id="exampleissemfive" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">5th Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise_five.php">
                    <table class="table">
                        <tr> 
                            <th> Code </th>
                            <th> Subject name </th>
                            <th> Internal </th>
                            <th> External </th>
                            <th> Total </th>
                        </tr>
                        <tr>
                            <td><h6>18CS51</h6> </td>
                            <td class="cell-breakWord"><h6> MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY</h6>	 </td>
                            <td><input type="text" class="form-control" name="sub51_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub51_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub51_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS52</h6> </td>
                            <td class="cell-breakWord"> <h6>COMPUTER NETWORKS AND SECURITY</h6> </td>
                            <td><input type="text" class="form-control" name="sub52_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub52_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub52_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS53 </h6></td>
                            <td class="cell-breakWord"><h6> DATABASE MANAGEMENT SYSTEMS </h6></td>
                            <td><input type="text" class="form-control" name="sub53_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub53_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub53_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS54</h6> </td>
                            <td class="cell-breakWord"><h6>AUTOMATA THEORY AND COMPUTABILITY</h6> </td>
                            <td><input type="text" class="form-control" name="sub54_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub54_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub54_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS55</h6></td>
                            <td class="cell-breakWord"><h6>APPLICATION DEVELOPMENT USING PYTHON</h6> </td>
                            <td><input type="text" class="form-control" name="sub55_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub55_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub55_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CS56 </h6></td>
                            <td class="cell-breakWord"> <h6>UNIX PROGRAMMING</h6> </td>
                            <td><input type="text" class="form-control" name="sub56_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub56_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub56_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18CSL57 </h6></td>
                            <td class="cell-breakWord"> <h6> COMPUTER NETWORK LABORATORY</h6></td>
                            <td><input type="text" class="form-control" name="sub57_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub57_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub57_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6>18CSL58 </h6> </td>
                            <td class="cell-breakWord"> <h6> DBMS LABORATORY WITH MINI PROJECT</h6></td>
                            <td><input type="text" class="form-control" name="sub58_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub58_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub58_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6>18CIV59 </h6> </td>
                            <td class="cell-breakWord"> <h6> ENVIRONMENTAL STUDIES</h6></td>
                            <td><input type="text" class="form-control" name="sub59_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub59_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub59_total" placeholder="" required></td>
                        </tr>
                    </table>
                    <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------>

<div class="modal fade" id="exampleissemsix" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">6th Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise_six.php">
                    <table class="table">
                    <tr> 
                        <th><h4>Code </h4></th>
                        <th><h4>Subject name </h4></th>
                        <th><h4> Internal </h4></th>
                        <th><h4> External </h4></th>
                        <th> <h4>Total </h4></th>
                    </tr>
                    <tr>
                        <td><h6>18IS61</h6> </td>
                        <td class="cell-breakWord"><h6> MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY</h6>	 </td>
                        <td><input type="text" class="form-control" name="sub61_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub61_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub61_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6>18IS62</h6> </td>
                        <td class="cell-breakWord"> <h6>FILE STRUCTURES</h6> </td>
                        <td><input type="text" class="form-control" name="sub62_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub62_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub62_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6>18IS63 </h6></td>
                        <td class="cell-breakWord"><h6>WEB TECHNOLOGY AND ITS APPLICATIONS </h6></td>
                        <td><input type="text" class="form-control" name="sub63_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub63_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub63_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6>18IS644</h6> </td>
                        <td class="cell-breakWord"><h6>PROFESSIONAL ELECTIVE - 1</h6> </td>
                        <td><input type="text" class="form-control" name="sub64_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub64_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub64_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6>18IS641 </h6></td>
                        <td class="cell-breakWord"><h6>OPEN ELECTIVE-A</h6> </td>
                        <td><input type="text" class="form-control" name="sub65_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub65_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub65_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6>18ME653 </h6></td>
                        <td class="cell-breakWord"> <h6>SOFTWARE TESTING LABORATORY</h6> </td>
                        <td><input type="text" class="form-control" name="sub66_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub66_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub66_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6>18CV651 </h6></td>
                        <td class="cell-breakWord"> <h6> FILE STRUCTURES LABORATORY WITH MINI PROJECT</h6></td>
                        <td><input type="text" class="form-control" name="sub67_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub67_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub67_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td> <h6>18ISL66 </h6> </td>
                        <td class="cell-breakWord"> <h6> MOBILE APPLICATION DEVELOPMENT</h6></td>
                        <td><input type="text" class="form-control" name="sub68_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub68_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub68_total" placeholder="" required></td>
                    </tr>
                </table>
                    <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------------->

<div class="modal fade" id="exampleissemseven" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">7th Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise_seven.php">
                    <table class="table">
                        <tr> 
                            <th><h4>Code </h4></th>
                            <th><h4>Subject name </h4></th>
                            <th><h4> Internal </h4></th>
                            <th><h4> External </h4></th>
                            <th> <h4>Total </h4></th>
                        </tr>
                        <tr>
                            <td><h6>18IS71</h6> </td>
                            <td class="cell-breakWord"><h6> ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING</h6>	 </td>
                            <td><input type="text" class="form-control" name="sub71_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub71_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub71_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18IS72</h6> </td>
                            <td class="cell-breakWord"> <h6>BIG DATA AND ANALYTICS</h6> </td>
                            <td><input type="text" class="form-control" name="sub72_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub72_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub72_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18IS731 </h6></td>
                            <td class="cell-breakWord"><h6>PROFESSIONAL ELECTIVE - 2 </h6></td>
                            <td><input type="text" class="form-control" name="sub73_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub73_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub73_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18IS732</h6> </td>
                            <td class="cell-breakWord"><h6>PROFESSIONAL ELECTIVE - 3</h6> </td>
                            <td><input type="text" class="form-control" name="sub74_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub74_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub74_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6> 18IS734 </h6></td>
                            <td class="cell-breakWord"><h6>OPEN ELECTIVE-B</h6> </td>
                            <td><input type="text" class="form-control" name="sub75_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub75_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub75_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6>18IS741 </h6></td>
                            <td class="cell-breakWord"> <h6>ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING LABORATORY</h6> </td>
                            <td><input type="text" class="form-control" name="sub76_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub76_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub76_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td><h6></h6></td>
                            <td class="cell-breakWord"> <h6> PROJECT WORK PHASE-1</h6></td>
                            <td><input type="text" class="form-control" name="sub77_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub77_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub77_total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td> <h6> </h6> </td>
                            <td class="cell-breakWord"> <h6> INT - INTERNSHIP</h6></td>
                            <td><input type="text" class="form-control" name="sub78_in" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub78_ex" placeholder="" required></td>
                            <td><input type="text" class="form-control" name="sub78_total" placeholder="" required></td>
                        </tr>
                    </table>
                    <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------------------->

<div class="modal fade" id="exampleissemeight" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered col-sm-10" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">8th Semester</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="insert_ise_eight.php">
                    <table class="table">
                    <tr> 
                        <th><h4>Code </h4></th>
                        <th><h4>Subject name </h4></th>
                        <th><h4> Internal </h4></th>
                        <th><h4> External </h4></th>
                        <th> <h4>Total </h4></th>
                    </tr>
                    <tr>
                        <td><h6>18IS81</h6> </td>
                        <td class="cell-breakWord"><h6> INTERNET OF THINGS AND APPLICATION</h6>	 </td>
                        <td><input type="text" class="form-control" name="sub81_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub81_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub81_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6>18IS821</h6> </td>
                        <td class="cell-breakWord"> <h6>PROFESSIONAL ELECTIVE-4</h6> </td>
                        <td><input type="text" class="form-control" name="sub82_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub82_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub82_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6></h6></td>
                        <td class="cell-breakWord"><h6>PROJECT WORK-PHASE-2</h6></td>
                        <td><input type="text" class="form-control" name="sub83_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub83_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub83_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6></h6> </td>
                        <td class="cell-breakWord"><h6>TECHNICAL SEMINAR</h6> </td>
                        <td><input type="text" class="form-control" name="sub84_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub84_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub84_total" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><h6></h6></td>
                        <td class="cell-breakWord"><h6>INTERNSHIP</h6> </td>
                        <td><input type="text" class="form-control" name="sub85_in" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub85_ex" placeholder="" required></td>
                        <td><input type="text" class="form-control" name="sub85_total" placeholder="" required></td>
                    </tr>
                </table>
                    <button name="user_login" type="submit" onclick="myFunction()" class="btn btn-primary submit mb-4" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

