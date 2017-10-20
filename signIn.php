<?php
include_once 'header.php';
?>
    
<div class="jumbotron" style="background-color: transparent">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h1 class="display-3 text-center">Hello, Dears!</h1>
                <p class="lead text-capitalize text-center" style="font-weight: 500"> welcome in our Site</p>

                <p class="lead" style="font-family:'Changa', sans-serif;">Please, Login here to begin work or SignUp form 
                    <a href="signUp.php">Here</a>
                </p>
            </div>
        </div>

        <form action="include/signIn.inc.php" method="POST" autocomplete="off" name="LoginForm">            
            <div class="form-group col-md-6 col-xs-12">
                <label for="username" class="form-control-label">UserName</label>
                <input type="text" name="login_userName" id="login_userName" class="form-control" placeholder="Enter your UserName" aria-label="Enter your UserName" required autocomplete="off">
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="password" class="form-control-label">Password</label>
                <input type="password" name="login_userPassword" id="login_userPassword" class="form-control" placeholder="Enter Your Password" aria-label="Enter Your Password" required autocomplete="off">
            </div>
            <input type="submit" name="signIn_submit" id="signIn_submit" value="Login" class="btn btn-danger">
        </form>

    </div> <!--End Container-->
</div> <!--End Jumbtron-->

<?php
include_once 'footer.php';
?>











