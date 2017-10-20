<?php
include_once 'header.php';
?>
    
<div class="jumbotron" style="background-color: transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <?php
                    if (!isset($_SESSION['U_login']))
                    {
                        echo '<h1 class="display-3">Hello, Dears!</h1>
                        <p class="lead text-capitalize text-center" style="font-weight: 500"> welcome in our Site</p>
        
                        <p class="lead text-center" style="font-family:"Changa", sans-serif;">if you are in our team login to work, Or you can visit our site to show our services and sections</p>
                        <p class="lead">
                          <a class="btn btn-success btn-lg" href="signIn.php" role="button">Login</a>
                          <a class="btn btn-primary btn-lg" href="signUp.php" role="button">SignUp</a>
                        </p>';
                    }
                ?>
                
            </div>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>












