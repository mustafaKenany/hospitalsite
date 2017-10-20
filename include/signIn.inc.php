<?php
session_start();
if (isset($_POST['signIn_submit'])) 
{
    include_once 'dbb.inc.php';
    $user_Login=mysqli_real_escape_string($conn,$_POST['login_userName']);
    $user_Password=mysqli_real_escape_string($conn,$_POST['login_userPassword']);
    
    //Erorr handler
    //check if empty field
    if (empty($user_Login) || empty($user_Password))
    {
        header("Location: ../signIn.php?ErorrLogin");
        exit();
    }
    else
    {
        //check if user is already in database
        $query = "select * from table_employee where Email='$user_Login'";
        $result = mysqli_query($conn,$query);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck < 1)
        {
            header("Location: ../signIn.php?Erorr");
            exit();
        }
        else
        {
            if ($row = mysqli_fetch_assoc($result))
            {
                //dehashing password
                $Pwd_check= password_verify($user_Password,$row['user_Password']);
                if ($Pwd_check == false)
                {
                    header("Location: ../signIn.php?Erorr");
                    exit();
                }
                elseif ($Pwd_check == true) 
                {
                   //login the system
                   $_SESSION['U_login'] = $row['Email'];
                   $_SESSION['Pwd_login'] = $row['user_Password'];
                   $_SESSION['user_section'] = $row['user_Section'];
                   $_SESSION['UserFirstName'] = $row['user_FirstName'];
                  switch($_SESSION['user_section'])
                  {
                    case "Emergency Dept":
                    header("Location: ..\Emergency.php");
                    break;
                    case "X-Ray Dept":
                    echo $_SESSION['user_section'];
                    break;
                    case "Blood Bank Dept":
                    header("Location: ..\blood-bank.php");
                    break;
                    case "CT Scan Dept":
                    echo $_SESSION['user_section'];
                    break;
                    case "MRI Scan Dept":
                    echo $_SESSION['user_section'];
                    break;

                }
                // header("Location: ../indexPage.php");
                }
                
            }
        }
    }
}
else
{
    header("Location: ../signIn.php");
    exit();
}