<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add personnel</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <script src="main.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<!-- <div class="modal fade" role="dialog" id="add-guests"> -->
<div class="col-md-2">
<br>
<br>
<a href="police.php" class="bi bi-arrow-left-circle-fill text-secondary fs-1"></a>
</div>
<div class="col-lg-8">
<!-- <div class="modal-dialog"> -->
<!-- <div class="modal-content"> -->
<div class="modal-body">
<span class="bi bi-plus-circle fs-2 offset-11"></span>
<div class="modal-header bg-dark text-light">
Register New Personnels
</div>
<form action="add-personnels.php" method="post" autocomplete="off" enctype="multipart/form-data" class="shadow p-4">
<div class="form-group">
<div class="container">
<div class="row">
<div class="col-md-6">
<input type="text" name="unique_id" class="form-control" placeholder="ID">
<br>
<input type="text" name="name" class="form-control" placeholder="Full Names">
<br>
<input type="date" name="dob" class="form-control" placeholder="Date Of Birth">
<br>
<input type="number" name="age" class="form-control" placeholder="Age">
<br>
<select type="text" name="status" class="form-control form-select" placeholder="Status">
<option value="Marital Status" disabled>Marital Status</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
 </select>
<br>
<input type="text" name="height" class="form-control" placeholder="Height">
<br>
<input type="text" name="nationality" class="form-control" placeholder="Nationality">
<br>
<input type="text" name="state" class="form-control" placeholder="State of origin">
<br>
</div>
<div class="col-md-6">
<input type="number" name="phone" class="form-control" placeholder="Phone Number">
<br>
<select type="text" name="sex" class="form-control form-select" placeholder="Gender">
<option value="Gender" disabled>Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
 </select>
<br>
<input type="text" name="qualification" class="form-control" placeholder="Highest Qualification">
<br>
<input type="text" name="department" class="form-control" placeholder="Department">
<br>
<input type="text" name="rank" class="form-control" placeholder="Rank">
<br>
<input type="text" name="remark" class="form-control" placeholder="Remark">
<br>
<input type="text" name="LGA" class="form-control" placeholder="LGA">
<br>
<input type="file" name="image" class="form-control" placeholder="Image">
<br>

<input type="submit" name="submit" class="btn btn-primary w-100" value="Save">

</div>
</div>
</div>
</div>
</form>
<?php
require 'db-connection.php';
require "functions.php";
require 'add-personnels-controller.php';
// $add_guests = addGuest($db_connect);
?>
</div>
</div>
<br>

<div class="col-md-2"></div>
<!-- </div> -->
</div>
</div>
    
</body>
</html>