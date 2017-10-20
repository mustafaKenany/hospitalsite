<?php

$dbserverName ="localhost";
$dbName="medicalsite";
$dbUserName="root";
$dbUserPassword="";

$conn = mysqli_connect($dbserverName,$dbUserName,$dbUserPassword,$dbName);


if (!$conn) 
{
   echo "Connection is Erorr".mysqli_error_list();
}
?>