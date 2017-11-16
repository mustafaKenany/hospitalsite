<?php
session_start();
if ($_SESSION['user_section']=="Emergency Dept") 
{
    include_once 'header.php';    
}
else
{
    header("Location: indexPage.php");
    exit();
}
?>

<div class="container">

    <form action="include/emergency.inc.php" method="POST" >
        <div class="row">
            <legend>Perosnal Information</legend>
            <div class="form-group col-sm">
                <label for="P_Name">Patient Full Name</label>
                <input type="text" name="P_Name" id="P_Name" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group col-sm">
                <label for="P_Age">Patient Age</label>
                <input type="text" name="P_Age" id="P_Age" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group col-sm">
                <label for="P_Date">Patient Birthday</label>
                <input type="date" name="P_Date" id="P_Date" class="form-control birthday" autocomplete="off" required data-field="date">
               
            </div>
       </div>
       <div class="row">
            <div class="form-group col-sm">
                <label for="P_Address">Patient Address</label>
                <input type="text" name="P_Address" id="P_Address" class="form-control" autocomplete="off" required>
                
            </div>
            <div class="form-group col-sm">
                <label for="P_mobile">Mobile</label>
                <input type="tel" name="P_mobile" id="P_mobile" class="form-control" autocomplete="off" required>
            </div>
       </div>
        <div class="row">
            <legend>Medical Information</legend>
            <div class="form-group col-sm">
                <label for="P_bloodtype">Blood type</label>
                <select name="P_bloodtype" id="P_bloodtype" class="form-control bloodType"></select>
                <!-- <input type="text" name="P_bloodType" id="P_bloodType" class="form-control" autocomplete="off" required> -->
            </div>
            <div class="form-group col-sm">
                <label for="P_sex">sex</label>
                <select name="P_sex" id="P_sex" class="form-control sex"></select>
                <!-- <input type="text" name="P_sex" id="P_sex" class="form-control" autocomplete="off" required> -->
            </div>
            <div class="form-group col-sm">
                <label for="P_Status">Patient status</label>
                <input type="text" name="P_Status" id="P_Status" class="form-control" autocomplete="off" required>
            </div>
       </div>
       <input type="submit" value="Submit" class="btn btn-danger" name="EmergencySubmit" id="EmergencySubmit">
       <input type="reset" value="Clear" class="btn btn-success">
    </form>    
    
</div>

<?php
include_once 'footer.php';
?>