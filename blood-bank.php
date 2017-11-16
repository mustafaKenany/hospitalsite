<?php
session_start();
if ($_SESSION['user_section']=="Blood Bank Dept") 
{
    include_once 'header.php';
    // we must include blood section
}
else
{
    header("Location: indexPage.php");
    exit();
}
?>

<?php
include_once 'footer.php';
?>