<?php
session_start();
if (isset($_SESSION['user_section'])) 
{
    include_once 'header.php';   
    include_once 'include/dbb.inc.php'; 
   
    switch($_SESSION['user_section'])
    {
      case "Emergency Dept":
      $query="select * from table_emergency";
      $result = mysqli_query($conn,$query);
      break;
      case "X-Ray Dept":
      echo $_SESSION['user_section'];
      break;
      case "Blood Bank Dept":
      $query="select * from table_bloodbank";
      $result = mysqli_query($conn,$query);
      break;
      case "CT Scan Dept":
      echo $_SESSION['user_section'];
      break;
      case "MRI Scan Dept":
      echo $_SESSION['user_section'];
      break;
    }
}
else
{
    header("Location: indexPage.php");
    exit();
}
?>
<div class="container">

<table class="table table-hover table-bordered ">
    <thead class="thead-inverse">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FullName</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile</th>
            <th scope="col">BloodType</th>
            <th scope="col">Sex</th>
            <th scope="col">Status</th>
            <th>Procedure</th>
        </tr>
    </thead>
    <tbody>
        
           <?php   while($row = mysqli_fetch_array($result)) {?>

        <tr>
            <td><?php echo $row['Patient_id']; ?></td>
            <td><?php echo $row['patient_name']; ?></td>
            <td><?php echo $row['patient_age']; ?></td>
            <td><?php echo $row['patient_address']; ?></td>
            <td><?php echo $row['Patient_mobile']; ?></td>
            <td><?php echo $row['patient_blood']; ?></td>
            <td><?php echo $row['patient_sex']; ?></td>
            <td><?php echo $row['patient_status']; ?></td>
            <td>
                <input type="button" value="Edit" id="Edit" name="Edit" class="btn btn-success">
                <input type="button" value="Remove" id="Remove" name="Remove" class="btn btn-danger"><br/>
                <input type="button" value="Show" id="show" name="show" class="btn btn-secondary">
                <input type="button" value="Tansfer" id="Tansfer" name="Tansfer" class="btn btn-outline-danger" style="margin:5px;">
            </td>
        </tr>
           <?php } ?>
    </tbody>
</table>
</div>

