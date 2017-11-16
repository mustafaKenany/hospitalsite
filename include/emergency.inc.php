<?php
if(isset($_POST['EmergencySubmit']))
{
    include_once 'dbb.inc.php';
   $PatientName=mysqli_real_escape_string($conn,$_POST['P_Name']);
   $PatientAge=mysqli_real_escape_string($conn,$_POST['P_Age']);
   $PatientBirthday=mysqli_real_escape_string($conn,$_POST['P_Date']);
   $PatientAddress=mysqli_real_escape_string($conn,$_POST['P_Address']);
   $PatientMobile=mysqli_real_escape_string($conn,$_POST['P_mobile']);
   $PatientBloodType=mysqli_real_escape_string($conn,$_POST['P_bloodtype']);
   $Patientsex=mysqli_real_escape_string($conn,$_POST['P_sex']);
   $PatientSatus=mysqli_real_escape_string($conn,$_POST['P_Status']);

    // Check for Error Handler
    if ( empty($PatientName) || empty($PatientAge) || empty($PatientBirthday) || empty($PatientAddress) || empty($PatientMobile) || empty($PatientBloodType) || empty($PatientSatus) || empty($Patientsex))
    {
        header("Location: ../Emergency.php?EmptyFields");
        exit();
    }
    else
    {
         if(!preg_match("/^[a-zA-Z ]*$/",$PatientName) || !preg_match("/^[a-zA-Z ]*$/",$PatientSatus ) || !preg_match("/^[0-9]*$/",$PatientAge ) || !preg_match("/^[0-9]*$/",$PatientMobile ) )
        {
            header("Location: ../Emergency.php?InvalidInput");
            exit();
        }
        else
        {
            if(date('Y-m-d',$PatientBirthday) == $PatientBirthday)
            {
                echo "correct";
                exit();
            }
            //check if User select Blood Type
            if($PatientBloodType==="Select Type")
            {
                header("Location: ../Emergency.php?SelectBloodType");
                exit();
            }
            else
            {
                //check if user select sex
                if($Patientsex==="Select sex")
                {
                    header("Location: ../Emergency.php?SelectSex");
                    exit();
                }
                else
                {
                    $query = "select * from table_emergency where patinet_name='$PatientName' and patient_age='$PatientAge' and pateint_Birthday='$PatientBirthday'";
                    $result = mysqli_query($conn,$query);
                    $resultcheck = mysqli_num_rows($result);
                    if($resultcheck>0)
                    {
                        header("Location: ../Emergency.php?DuplicatedUser");
                        exit();
                        //we must here compare with date of Patient entered
                    }
                    else
                    {
                        // insert data
                        $query="insert into table_emergency (patient_Name, patient_age, patient_Birthday, patient_address, patient_mobile, patient_blood, patient_sex, patient_status) VALUES ('$PatientName', '$PatientAge' ,'$PatientBirthday', '$PatientAddress', '$PatientMobile', '$PatientBloodType', '$Patientsex' , '$PatientSatus') ";
                        if(mysqli_query($conn,$query))
                        {
                          header("Location: ../Emergency.php?Sucess");
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
    header("Location: ../Emergency.php?NotSubmit");
    exit();
}