<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Medical Site</title>

<link rel="stylesheet" href="puplic\css\bootstrap.min.css">
<link rel="stylesheet" href="puplic\css\font-awesome.min.css">
<link rel="stylesheet" href="puplic\css\style.css">

</head>
<body>
<header>
  <?php
    if (!isset($_SESSION['U_login']))
    {
      echo '<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
                <a class="navbar-brand" href="indexPage.php">Medical city</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>      
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto nav justify-content-end">
                        <li class="nav-item active">
                          <a class="nav-link" href="indexPage.php">Home <span class="sr-only">(current)</span></a>
                        <li class="nav-item">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
                        <li class="nav-item">
                        <li class="nav-item">
                          <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                        <li class="nav-item">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
                        <li class="nav-item">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sections
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Emergency Dept.</a>
                            <a class="dropdown-item" href="#">X-Ray Dept.</a>
                            <a class="dropdown-item" href="#">CT scan Dept.</a>
                            <a class="dropdown-item" href="#">MRI Dept.</a>
                            <a class="dropdown-item" href="#">Blood Bank Dept.</a>
                            <a class="dropdown-item" href="#">Head mangers</a>
                          </div>
                        </li>
                    </ul>';
      
    echo '<ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
              <a href="signIn.php" class="nav-link"> <i class="fa fa-user" aria-hidden="true"></i> sign in</a>
            </li>
            <li class="nav-item">
              <a href="signUp.php" class="nav-link "> <i class="fa fa-lock" aria-hidden="true"></i> sign up</a>
            </li>
          </ul>';
    echo '<form class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger  my-2 my-sm-0" type="submit">Search</button>
           </form>';
    }
    else
    {
      echo '<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
      <a class="navbar-brand" href="indexPage.php">Medical city</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav mr-auto nav justify-content-end">';

          switch($_SESSION['user_section'])
          {
            case "Emergency Dept":
            echo '<li class="nav-item active"> <a class="nav-link" href="emergency.php">New Patient <span class="sr-only">(current)</span></a> </li>';
            
            break;
            case "X-Ray Dept":
           
            break;
            case "Blood Bank Dept":
            echo '<li class="nav-item active"> <a class="nav-link" href="blood-bank.php">New Patient <span class="sr-only">(current)</span></a> </li>';           
            break;
            case "CT Scan Dept":
            
            break;
            case "MRI Scan Dept":
            
            break;
          }        
              

      echo'<li class="nav-item">
                <a class="nav-link" href="search.php">Search <span class="sr-only">(current)</span></a>
            </li>
         </ul>';
      echo '<div style="padding-right:10px">Hello '.$_SESSION['UserFirstName'].' You are login</div>';
      echo '<ul class="nav navbar-nav navbar-right">
              <li class="nav-item">
              <a href="include/logOut.inc.php" class="nav-link btn btn-outline-success">Log out</a>
              </li>
            </ul>';
    }
  ?>
</div>
</nav>
</header>

