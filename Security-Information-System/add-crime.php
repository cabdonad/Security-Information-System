<?php require_once "db-connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add crime</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body class="bg-secondary">


<div class="container">
<div class="row">
<!-- <div class="modal fade" role="dialog" id="add-guests"> -->
<div class="col-md-4">
<br>
<br>
<?php
echo "
<a href='crimes.php' class='bi bi-arrow-left-circle-fill text-light fs-1'></a>
";

?>
</div>
<div class="col-md-4">
<!-- <div class="modal-dialog"> -->
<!-- <div class="modal-content"> -->
<div class="modal-body">
<span class="bi bi-plus-circle text-light fs-2 offset-11"></span>
<div class="modal-header bg-dark text-light">
Add crime records
</div>
<form action="add-crime.php" method="post" enctype="multipart/form-data" autocomplete="off" class="shadow p-4" style="background:white">
<div class="form-group">
<!-- <div class="container"> -->
<!-- <div class="row"> -->

<input type="text" name="name" class="form-control" placeholder="Name">
<br>
<input type="number" name="age" class="form-control" placeholder="Age">
<br>
<select type="text" name="sex" class="form-control form-select"  placeholder="Gender">
<option value="Gender" disabled>Male</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
 </select>
<br>
<input type="text" name="nationality" class="form-control"  placeholder="Nationality">
<br>
<input type="text" name="state" class="form-control"  placeholder="State Of Oriigin">
<br>
<input type="text" name="LGA" class="form-control"  placeholder="LGA">
<br>
<select type="text" name="status" class="form-control form-select"  placeholder="Stutus">
<option value="Marital Status" disabled>Marital Status</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
 </select>

<br>
<input type="text" name="crime" class="form-control"  placeholder="Crime type">
<br>
<textarea type="text" name="description" class="form-control" placeholder="Description" cols="10" rows="10"></textarea>
<br>
<input type="date" name="crime_date" class="form-control" placeholder="Date of crime">
<br>
<input type="text" name="time" class="form-control" placeholder="Time of crime commit">
<br>
<input type="file" name="image" class="form-control" placeholder="Image">
<br>
<input type="submit" name="save" class="btn btn-danger w-50 offset-0" value="Save">

</div>
</form>
<?php
require 'db-connection.php';
require 'functions.php';
require 'add-crimes-controller.php';
?>
</div>
</div>
<br>

<div class="col-md-4"></div>
<!-- </div> -->
</div>
</div>
    
</body>
</html>