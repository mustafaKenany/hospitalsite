<?php
include_once 'header.php';

?>
    
<div class="jumbotron" style="background-color: transparent">
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-xs-12 text-center">
                <h1 class="display-3">Hello, Dears!</h1>
                <p class="lead text-capitalize " style="font-weight: 500"> welcome in our Site</p>

                <p class="lead" style="font-family:'Changa', sans-serif;">if you are in our team login from 
                    <a href="signIn.php">here</a>,
                     Or you can visit our site to show our services and sections and If we like you SignUp.
                </p>
            </div>
        </div>
        
        <form action="include/signup.inc.php" method="POST" autocomplete="off" name="SignUpForm">
            <div class="row">
                
                <legend>Information</legend>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="signup_fuserName" class="form-control-label">FirstName</label> 
                    <input type="text" name="signup_fuserName" id="signup_ufserName" class="form-control" required autocomplete="off">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="signup_LuserName" class="form-control-label">LastName</label>
                    <input type="text" name="signup_LuserName" id="signup_LuserName" class="form-control" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    <label for="signup_userPassword1" class="form-control-label">Password</label>
                    <input type="password" name="signup_userPassword1" id="signup_userPassword1" class="form-control" required autocomplete="off">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="signup_userPassword2" class="form-control-label">Confirm Password</label>
                    <input type="password" name="signup_userPassword2" id="signup_userPassword2" class="form-control" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    <label for="signup_userEmail" class="form-control-label">Email</label>
                    <input type="text" name="signup_userEmail" id="signup_userEmail" class="form-control" required autocomplete="off">
                </div>
            </div>

            <div class="form-row">
                <legend>Sections</legend>
                <div class="form-group col-md-6 col-xs-12">
                    <div class="btn-group btn-group-vertical" data-toggle="buttons">
                        <label class="btn active">
                        <input type="radio" name='userField' value="Emergency Dept" checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>Emergency Dept.</span>

                    </label>
                        <label class="btn">
                        <input type="radio" name='userField' value="X-Ray Dept"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> X-Ray Dept.</span>
                    </label>
                        <label class="btn">
                        <input type="radio" name='userField' value="Blood Bank Dept"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> Blood Bank Dept.</span>
                    </label>
                        <label class="btn">
                        <input type="radio" name='userField' value="CT Scan Dept"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> CT Scan Dept.</span>
                    </label>
                        <label class="btn">
                        <input type="radio" name='userField' value="MRI Scan Dept"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> MRI Scan Dept.</span>
                    </label>
                    </div>
                </div>
            </div>
            <input type="submit" value="SignUp" class="btn btn-danger" name="signup_Submit" id="signup_Submit">
            
        </form>

    </div> <!--End Container-->
</div>     <!--End Jumbtron-->

<?php
include_once 'footer.php';
?>











