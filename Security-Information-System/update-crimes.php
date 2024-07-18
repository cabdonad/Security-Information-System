<?php require_once "db-connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Page</title>
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
if(isset($_POST["update"]))
{
    $id = $_POST['id'];
    $result = $db_connect->query("SELECT * FROM `crimes` WHERE crimes.id = '$id'");
    if($result == true)
    {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $name = $row['name'];
        $image = $row['image'];
        $sex = $row['sex'];
        $age = $row['age'];
        $crime = $row['crime_type'];
        $status = $row['status'];
        $description = $row['crime_description'];
        $doc = $row['date_of_crime'];
        $time = $row['time_of_crime'];
        $date = $row['date'];
        $Nationality = $row['nationality'];
        $state = $row['stateOfOrigin'];
        $lga = $row['LGA'];

    }
}
echo "
<a href='full-crimes-info.php?id=$id' class='bi bi-arrow-left-circle-fill text-light fs-1'></a>
";

?>
</div>
<div class="col-md-4">
<!-- <div class="modal-dialog"> -->
<!-- <div class="modal-content"> -->
<div class="modal-body">
<span class="bi bi-plus-circle text-light fs-2 offset-11"></span>
<div class="modal-header bg-dark text-light">
Update crime record
</div>
<form action="update-crimes-controller.php" method="post" 
 autocomplete="off" class="shadow p-4" style="background:white">
 <br>
 <?php echo "<img src='uploads/$image' style='width:100px' class='rounded-circle offset-4'>" ?>
<br>
<div class="form-group">


<input type="hidden" name="id" class="form-control" placeholder="ID" value="<?php echo $id ?>">
<br>
<input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $name ?>">
<br>
<input type="number" name="age" class="form-control" placeholder="Age" value="<?php echo $age ?>">
<br>
<select type="text" name="sex"  class="form-control form-select"  placeholder="Gender" value="<?php echo $sex ?>">
<option value="Gender" disabled>Male</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
 </select>
<br>
<input type="text" name="nationality" class="form-control"  placeholder="Nationality" value="<?php echo $Nationality ?>">
<br>
<select type="text" name="status" class="form-control form-select"  placeholder="Stutus" value="<?php echo $status ?>">
<option value="Marital Status" disabled>Marital Status</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
 </select>

<br>
<input type="text" name="crime" class="form-control"  placeholder="Crime type" value="<?php echo $crime ?>">
<br>
<textarea type="text" name="description" class="form-control" placeholder="Description" cols="10" rows="10"><?php echo $description ?></textarea>
<br>
<input type="date" name="crime_date" class="form-control" placeholder="Date of crime" value="<?php echo $doc ?>">
<br>
<input type="text" name="time" class="form-control" placeholder="Time of crime commit" value="<?php echo $time ?>">
<br>
<input type="text" name="state" class="form-control" placeholder="State of origin" value="<?php echo $state ?>">
<br>
<input type="text" name="lga" class="form-control" placeholder="LGA" value="<?php echo $lga ?>">
<br>
<input type="submit" name="save" class="btn btn-danger w-50 offset-0" value="Save">

</div>
</form>
<?php

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