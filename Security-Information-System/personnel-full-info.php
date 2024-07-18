<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full Information</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
<!-- <br> -->
<?php
require "db-connection.php";
if(isset($_POST["submit"]))
{
     $id = $_POST["id"];

$sql = "SELECT * FROM `police` WHERE `police`.id ='$id'";
    $result = mysqli_query($db_connect, $sql);
    if($result == true){

        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $unique_id = $row['unique_id'];
        $name = $row['name'];
        $image = $row['image'];
        $sex = $row['sex'];
        $department = $row['department'];
        $rank = $row['rank'];
        $dob = $row['dob'];
        $age = $row['age'];
        $nationality = $row['nationality'];
        $state = $row['state'];
        $lga = $row['lga'];
        $phone = $row['phone'];
        $qualification = $row['qualification'];
        $dor = $row['date_of_recruitment'];
        $remark = $row['remark'];
        $height = $row['height'];
        $status = $row['status'];


    echo "<table class='text-center table-bordered alert alert-secondary table'>" . //'table-striped' class can also be added.

    "<thead>" . 
    "<br>" .
    " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='police.php' class='bi bi-arrow-left-circle offset-0 text-secondary fs-1'></a> " .
    "<span class='offset-4 position-absolute alert alert-primary'>Full information for <b>$rank $name</b></span>".
    "<form action='update-personnel-info.php' method='post'>
    <input type='hidden' name='id' value=' ".$row['id']." '>
    &nbsp;<input type='submit' name='update' value='Update Record' 
    class='btn btn-primary p-2 fw-semibold offset-10' style='margin-top:-3rem'>
    </form>" . "<br><br>" . "&nbsp;&nbsp;&nbsp;Recruited On : <b>$dor</b>" .
    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='uploads/$image' alt='...' style='width:150px;border:2px solid dodgerblue' class='offset-3 rounded-circle'>" .
    "<br><br>".
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>ID</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Name</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Sex</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Age</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Date Of Birth</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Marital Status</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Nationality</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>State Of Origin</th>" .
   
    "</thead>" .
    "<tbody>" .
    "<tr>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>" .
    "" . $unique_id . "" .
    "</td>" .
    "<td class='bg-light p-3' style='border: 2px solid white'>" .
    "". $name. "" .
    "</td>" .
    "<td class=' p-3 bg-light' style='border: 2px solid white'>" .
    "" . $sex . "" .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $age .
    "</td>" .
   
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $dob .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $status .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $nationality .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $state .
    "</td>" .
    
    "</tr>" .
    "</tbody>" .
    "<thead>" .
    "<tbody>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>LGA</th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Height</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Phone Number</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Department <span class='fw-lighter'></span></th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Rank</th>" .
    "<th class=' p-3' style='border: 4px solid white'>Qualification</th>" .
    "<th class='p-3' style='border: 4px solid white'>Remark</th>" .
    "<th class='bg-dark p-3 bg-gradient text-warning' style='border: 4px solid white'>Action</th>" .
    "</thead>" .
    "<tr>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $lga . "" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $height . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $phone . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $department . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $rank . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $qualification . "" .
    "</td>" .
    "<td class=' p-5 bg-light' style='border: 4px solid white'>" .
    "" . $remark. "".
    "</td>" .
    
    "<td class='bg-light p-4' style='border: 4px solid white'>" .
    "<a href='#delete' data-bs-toggle='modal' class='bi bi-trash-fill text-danger fs-3'></a>" .
    "</td>" .
    "</tr>" .
    "</tbody>" .
      
    "</table>"; 
    
  }
  
}
elseif(isset($_GET["id"]))
{
  $id= $_GET["id"];
      $sql = "SELECT * FROM `police` WHERE `police`.id ='$id'";
      $result = mysqli_query($db_connect, $sql);
      if($result == true){
        
        $row = mysqli_fetch_assoc($result);
        
        $id = $row['id'];
        $unique_id = $row['unique_id'];
        $name = $row['name'];
        $image = $row['image'];
        $sex = $row['sex'];
        $department = $row['department'];
        $rank = $row['rank'];
        $dob = $row['dob'];
        $age = $row['age'];
        $nationality = $row['nationality'];
        $state = $row['state'];
        $lga = $row['lga'];
        $phone = $row['phone'];
        $qualification = $row['qualification'];
        $dor = $row['date_of_recruitment'];
        $remark = $row['remark'];
        $height = $row['height'];
        $status = $row['status'];

        echo "<table class='text-center table-bordered alert alert-secondary table'>" . //'table-striped' class can also be added.

    "<thead>" . 
    "<br>" .
    " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='police.php' class='bi bi-arrow-left-circle offset-0 text-secondary fs-1'></a> " .
    "<span class='offset-4 position-absolute alert alert-primary'>Full information for <b>$rank $name</b></span>".
    "<form action='update-personnel-info.php' method='post'>
    <input type='hidden' name='id' value=' ".$row['id']." '>
    &nbsp;<input type='submit' name='update' value='Update Record' 
    class='btn btn-primary p-2 fw-semibold offset-10' style='margin-top:-3rem'>
    </form>" . "<br><br>" . "&nbsp;&nbsp;&nbsp;Recruited On : <b>$dor</b>" .
    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='uploads/$image' alt='...' style='width:150px;border:2px solid dodgerblue' class='offset-3 rounded-circle'>" .
    "<br><br>".
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>ID</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Name</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Sex</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Age</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Date Of Birth</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Marital Status</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Nationality</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>State Of Origin</th>" .
   
    "</thead>" .
    "<tbody>" .
    "<tr>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>" .
    "" . $unique_id . "" .
    "</td>" .
    "<td class='bg-light p-3' style='border: 2px solid white'>" .
    "". $name. "" .
    "</td>" .
    "<td class=' p-3 bg-light' style='border: 2px solid white'>" .
    "" . $sex . "" .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $age .
    "</td>" .
   
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $dob .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $status .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $nationality .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $state .
    "</td>" .
    
    "</tr>" .
    "</tbody>" .
    "<thead>" .
    "<tbody>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>LGA</th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Height</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Phone Number</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Department <span class='fw-lighter'></span></th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Rank</th>" .
    "<th class=' p-3' style='border: 4px solid white'>Qualification</th>" .
    "<th class='p-3' style='border: 4px solid white'>Remark</th>" .
    "<th class='bg-dark p-3 bg-gradient text-warning' style='border: 4px solid white'>Action</th>" .
    "</thead>" .
    "<tr>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $lga . "" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $height . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $phone . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $department . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $rank . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $qualification . "" .
    "</td>" .
    "<td class=' p-5 bg-light' style='border: 4px solid white'>" .
    "" . $remark. "".
    "</td>" .
    
    "<td class='bg-light p-4' style='border: 4px solid white'>" .
    "<a href='#delete' data-bs-toggle='modal' class='bi bi-trash-fill text-danger fs-3'></a>" .
    "</td>" .
    "</tr>" .
    "</tbody>" .
      
    "</table>"; 
    
  }
  
}
    
   else if(isset($_POST["search"]))
  {
      $unique_id = $_POST["unique_id"];
      $sql = "SELECT * FROM `police` WHERE `police`.unique_id ='$unique_id'";
    $result = mysqli_query($db_connect, $sql);
    if($result){

        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $unique_id = $row['unique_id'];
        $name = $row['name'];
        $image = $row['image'];
        $sex = $row['sex'];
        $department = $row['department'];
        $rank = $row['rank'];
        $dob = $row['dob'];
        $age = $row['age'];
        $nationality = $row['nationality'];
        $state = $row['state'];
        $lga = $row['lga'];
        $phone = $row['phone'];
        $qualification = $row['qualification'];
        $dor = $row['date_of_recruitment'];
        $remark = $row['remark'];
        $height = $row['height'];
        $status = $row['status'];


    echo "<table class='text-center table-bordered alert alert-secondary table'>" . //'table-striped' class can also be added.

    "<thead>" . 
    "<br>" .
    " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='police.php' class='bi bi-arrow-left-circle offset-0 text-secondary fs-1'></a> " .
    "<span class='offset-4 position-absolute alert alert-primary'>Full information for <b>$rank $name</b></span>".
    "<form action='update-personnel-info.php' method='post'>
    <input type='hidden' name='id' value=' ".$row['id']." '>
    &nbsp;<input type='submit' name='update' value='Update Record' 
    class='btn btn-primary p-2 fw-semibold offset-10' style='margin-top:-3rem'>
    </form>" . "<br><br>" . "&nbsp;&nbsp;&nbsp;Recruited On : <b>$dor</b>" .
    "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='uploads/$image' alt='...' style='width:150px;border:2px solid dodgerblue' class='offset-3 rounded-circle'>" .
    "<br><br>".
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>ID</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Name</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Sex</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Age</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Date Of Birth</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Marital Status</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Nationality</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>State Of Origin</th>" .
   
    "</thead>" .
    "<tbody>" .
    "<tr>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>" .
    "" . $unique_id . "" .
    "</td>" .
    "<td class='bg-light p-3' style='border: 2px solid white'>" .
    "". $name. "" .
    "</td>" .
    "<td class=' p-3 bg-light' style='border: 2px solid white'>" .
    "" . $sex . "" .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $age .
    "</td>" .
   
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $dob .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $status .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $nationality .
    "</td>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $state .
    "</td>" .
    
    "</tr>" .
    "</tbody>" .
    "<thead>" .
    "<tbody>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>LGA</th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Height</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Phone Number</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Department <span class='fw-lighter'></span></th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Rank</th>" .
    "<th class=' p-3' style='border: 4px solid white'>Qualification</th>" .
    "<th class='p-3' style='border: 4px solid white'>Remark</th>" .
    "<th class='bg-dark p-3 bg-gradient text-warning' style='border: 4px solid white'>Action</th>" .
    "</thead>" .
    "<tr>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $lga . "" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $height . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $phone . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $department . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $rank . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $qualification . "" .
    "</td>" .
    "<td class=' p-5 bg-light' style='border: 4px solid white'>" .
    "" . $remark. "".
    "</td>" .
    
    "<td class='bg-light p-4' style='border: 4px solid white'>" .
    "<a href='#delete' data-bs-toggle='modal' class='bi bi-trash-fill text-danger fs-3'></a>" .
    "</td>" .
    "</tr>" .
    "</tbody>" .
      
    "</table>"; 
    
  }
  
}

?>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" onclick="printScreen()" class="btn btn-primary p-3 offset-5">Print Information</button>
<script>
function printScreen(){
 x = document.getElementById("info");
 x += window.print();
}
</script>
<div class="container">
<div class="row">
<div class="modal fade" role="dialog" id="delete">
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form action="set-dept-time.php" method="post" autocomplete="off">
<div class="form-group shadow p-5 bg-light">
<p class="fs-6 lead fw-bold">Are you sure to delete this record?</p>
<a href="#" class="bi bi-x-circle fs-2 offset-2 text-danger" data-bs-dismiss="modal"></a>
<?php 

print("<a href='delete-personnel.php?delete_id=$id' class='bi bi-check-circle fs-2 text-success offset-4'></a>");

?>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-sm-4"></div>
</div>
</div>
</div>
</div>
</div>


<script src="bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script> 
</body>
</html>