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
    $result = $db_connect->query("SELECT * FROM `police` WHERE police.id = '$id'");
    if($result == true)
    {
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
    }
}
echo "
<a href='personnel-full-info.php?id=$id' class='bi bi-arrow-left-circle-fill text-light fs-1'></a>
";
?>
</div>
<div class="col-md-4">
<!-- <div class="modal-dialog"> -->
<!-- <div class="modal-content"> -->
<div class="modal-body">
<span class="bi bi-pencil-square text-light fs-2 offset-11"></span>
<div class="modal-header bg-dark text-light">
Update Personnel Information 
</div>
<form action="update-pController.php" method="post" autocomplete="off" class="shadow p-4" style="background:white">
<div class="form-group">
<!-- <div class="container"> -->
<!-- <div class="row"> -->

<input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" placeholder="id">
<?php echo "<img src='uploads/$image' style='width:100px' class='rounded-circle offset-4'>" ?>
<br>
<br>
<input type="text" name="unique_id" class="form-control" value="<?php echo $unique_id ?>" placeholder="Personnel ID">
<br>
<input type="text" name="name" class="form-control" value="<?php echo $name ?>" placeholder="Name">
<br>
<input type="number" name="age" class="form-control" value="<?php echo $age ?>" placeholder="Age">
<br>
<input type="text" name="dob" class="form-control" value="<?php echo $dob ?>" placeholder="Date of birth">
<br>
<select type="text" name="sex" class="form-control form-select" value="<?php echo $sex ?>" placeholder="Gender">
<option value="Gender" disabled>Male</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
 </select>
<br>
<input type="number" name="phone" class="form-control" value="<?php echo $phone ?>" placeholder="Phone number">
<br>
<input type="text" name="rank" class="form-control" value="<?php echo $rank ?>" placeholder="Rank">
<br>
<input type="text" name="department" class="form-control" value="<?php echo $department ?>" placeholder="Department">
<br>
<input type="text" name="qualification" class="form-control" value="<?php echo $qualification ?>" placeholder="Qualification">
<br>
<input type="text" name="height" class="form-control" value="<?php echo $height ?>" placeholder="Height">
<br>
<input type="text" name="remark" class="form-control" value="<?php echo $remark ?>" placeholder="Remark">
<br>
<select type="text" name="status" class="form-control form-select" value="<?php echo $status ?>" placeholder="Stutus">
<option value="Marital Status" disabled>Marital Status</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
 </select>
<br>
<input type="text" name="nationality" class="form-control" value="<?php echo $nationality ?>" placeholder="Nationality">
<br>
<input type="text" name="state" class="form-control" value="<?php echo $state ?>" placeholder="State Of Origin">
<br>
<input type="text" name="lga" class="form-control" value="<?php echo $lga ?>" placeholder="LGA">
<br>
<input type="submit" name="change" class="btn btn-primary w-100 offset-0" value="Save">

</div>
</form>
</div>
<br>

</div>
<br>

<div class="col-md-4"></div>
<!-- </div> -->
</div>
</div>
    
</body>
</html>