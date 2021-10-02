<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Login Now</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="dbworkers/process-login.php">
                        <div class="form-group">
                            <label class="mb-2">USN</label>
                            <input name="u_usn" type="text" class="form-control" id="validationDefault01" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input name="u_pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                        </div>
                        <div class="radio">
                                <h5 class="text-left" style="color:blue;">Role:</h5>
                                <input type="radio" name="user_role" value="cse" class="custom-radio" required>&nbsp;CSE&nbsp;&nbsp;&nbsp;&nbsp;</input>
                                <input type="radio" name="user_role" value="ise" class="custom-radio" required>&nbsp;ISE</input>
                                <!--<input type="radio" name="user_role" value="ece" class="custom-radio" required>&nbsp;ECE</input>
                                <input type="radio" name="user_role" value="me" class="custom-radio" required>&nbsp;ME</input>	
                                <input type="radio" name="user_role" value="cv" class="custom-radio" required>&nbsp;CV</input>-->
                        </div>
                        <button name="user_login" type="submit" class="btn btn-primary submit mb-4">Login</button>
                        <p class="text-center pb-4">
                            <a class="nav-link request text-uppercase font-weight-bold" href="login.php" data-toggle="modal" data-target="#emailModel">Forgot Password?</a></li>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4" style="padding-bottom:1px;">Register Now</h5>
                    <form action="insert-user.php" method="POST" autocomplete="off" name="user_login">
                        
                        <div class="form-group">
                            <label style="color:Blue"><bold>Name</bold></label>
                            <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label style="color:Blue">USN</label>
                            <input name="usn" type="text" class="form-control" id="validationDefault01" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label class="mb-2" style="color:Blue">Password</label>
                            <input name="password" type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="data">
                            <label style="color:Blue">Role:&nbsp;&nbsp;</label> 
                                <input type="radio" name="user_role" value="cse" class="custom-radio" required>&nbsp;CSE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</input>
                                <input type="radio" name="user_role" value="ise" class="custom-radio" required>&nbsp;ISE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</input>
                                <!--<input type="radio" name="user_role" value="ece" class="custom-radio" required>&nbsp;ECE&nbsp;&nbsp;&nbsp;&nbsp;</input>
                                <input type="radio" name="user_role" value="me" class="custom-radio" required>&nbsp;ME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</input>	
                                <input type="radio" name="user_role" value="cv" class="custom-radio" required>&nbsp;CV</input>-->
                        </div>
                        <button name="user_login" type="submit" onclick="alert('Registered successfully. Please login now.....')" class="btn btn-primary submit mb-4">Register</button>
                        
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="emailModel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Recover your Account</h5>
                    <form autocomplete="off" name="user_login" method="POST"  action="reset_password.php">
                        <div class="form-group">
                            <label class="mb-2">USN</label>
                            <input name="u_usn" type="text" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">New Password</label>
                            <input type="password" class="form-control" name="u_password" aria-describedby="emailHelp" placeholder="" required="">
                        </div>   
                        <a href="reset_password.php?u_usn=$row['u_usn']&u_password=$row['u_password']"><button name="user_login" type="submit" class="btn btn-primary submit mb-4">Submit</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

