<?php
if (isset($_POST['signup_Submit'])) 
{
    include_once 'dbb.inc.php';
    //variables to hold data from html page

    $php_Fuser=mysqli_real_escape_string($conn,$_POST['signup_fuserName']);
    $php_Luser=mysqli_real_escape_string($conn,$_POST['signup_LuserName']);
    $php_Pwd1=mysqli_real_escape_string($conn,$_POST['signup_userPassword1']);
    $php_Pwd2=mysqli_real_escape_string($conn,$_POST['signup_userPassword2']);
    $php_userEmail=mysqli_real_escape_string($conn,$_POST['signup_userEmail']);
    $php_userSection = $_POST['userField'];
    
   
    // // Erorr handler
    // // Check for empty field
    if (empty($php_Fuser) || empty($php_Luser) || empty($php_Pwd1) || empty($php_Pwd2) || empty($php_userEmail))
    {
        $msgErorr ="There is Empty field";
        header("Location: ../signUp.php?message=Erorr");
        exit();
    }
    else
    {
        //if field not empty
        //check if input char is valid
        if (!preg_match("/^[a-zA-Z ]*$/",$php_Fuser) || !preg_match("/^[a-zA-Z ]*$/",$php_Luser))
        {
            header("Location: ../signUp.php?Invalidinput");
            exit();
            
        }
        else
        {
            //check if email is valid
            if (!filter_var($php_userEmail,FILTER_VALIDATE_EMAIL))
            {
                header("Location: ../signUp.php?EMAIL");
                
                exit();
            }
            else
            {
                $query = "select * from table_employee where email = '$php_userEmail' ";
                $result = mysqli_query($conn,$query);
                
                $resultcheck = mysqli_num_rows($result);
                if ($resultcheck>0)
                {
                    header("Location: ../signUp.php?EMailFound");
                    exit();
                }
                else
                {
                    if ($php_Pwd1 != $php_Pwd2)
                    {
                        header("Location: ../signUp.php?PWDErorr");
                        exit();
                    }
                    else
                    {
                        //Encrypt Password
                        $hashedPassword = password_hash($php_Pwd1,PASSWORD_DEFAULT);

                        //insert Data
                        $query="INSERT INTO table_employee (user_FirstName,user_LastName,user_Password,Email,user_Section) VALUES ('$php_Fuser','$php_Luser','$hashedPassword','$php_userEmail','$php_userSection')";
                        if (mysqli_query($conn, $query)) 
                        {
                            header("Location: ../signUp.php?Sucess");
                            exit();
                        } 
                        else
                        {
                            echo "Error: " . $query . "<br>" . mysqli_error($conn);
                            exit();
                        }
                        
                        
                    }
                }
            }
        }
    }
    
}
else
{
    header("Location: ../signUp.php");
    exit();
}
