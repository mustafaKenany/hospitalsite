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

    <form action="" method="POST" >
        <div class="form-row">
            <legend>Perosnal Information</legend>
            <div class="form-group col-md-6 col-xs-12">
                <label for="P_Name">Enter Patient Full Name</label>
                <input type="text" name="P_Name" id="P_Name" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group col-md-3 col-xs-12">
                <label for="P_Age">Enter Patient Age</label>
                <input type="text" name="P_Age" id="P_Age" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group col-md-3 col-xs-12">
                <label for="P_Date">Enter Patient Birthday</label>
                <input type="text" name="P_Date" id="P_Date" class="form-control" autocomplete="off" required>
            </div>
       </div>
       <div class="form-group">
            <label for="P_Address">Patient Address</label>
            <input type="text" name="P_Address" id="P_Address" class="form-control" autocomplete="off" required>
       </div>
        <div class="form-row">
            <legend>Medical Information</legend>
            <div class="form-group col-md-4 col-xs-12">
                <label for="P_bloodtype">Blood type</label>
                <input type="text" name="P_bloodType" id="P_bloodType" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <label for="P_sex">sex</label>
                <input type="text" name="P_sex" id="P_sex" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group col-md-4 col-xs-12">
                <label for="P_Status">Patient status</label>
                <input type="text" name="P_Status" id="P_Status" class="form-control" autocomplete="off" required>
            </div>
           <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-danger">
                <input type="reset" value="Clear" class="btn btn-success">
           </div>
       </div>
    </form>    
    
</div>

<?php
include_once 'footer.php';
?>