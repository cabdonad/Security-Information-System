<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full Records</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>
<body>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='crimes.php' class='bi bi-arrow-left-circle offset-0 text-secondary fs-1'></a> 
<?php
require "db-connection.php";
if(isset($_POST["submit"]))
{
     $id = $_POST["id"];

$sql = "SELECT * FROM `crimes` WHERE `crimes`.id ='$id'";
    $result = mysqli_query($db_connect, $sql);
    if($result == true){

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



    echo "<table class='text-center table-bordered alert alert-secondary table'>" . //'table-striped' class can also be added.

    "<thead>" . 

    "<span class='offset-5 position-absolute alert alert-primary'>Added On :<b> $date</b></span>".
    "<form action='update-crimes.php' method='post' class=''>
    <input type='hidden' name='id' value=' ".$row['id']." '>
    &nbsp;<input type='submit' name='update' value='Update Crime' 
    class='btn btn-danger fw-semibold offset-10' style='margin-top:'>
    </form>" . "<br><br>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Image</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>ID</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Name</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Sex</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Age</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Marital Status</th>" .
   
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Nationality</th>" .
   
   
    "</thead>" .
    "<tbody>" .
    "<tr>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>" .
    "<img src='uploads/$image' alt='...' style='width:100px'>".
    "</td>" .
    "<td class='bg-light p-3' style='border: 2px solid white'>" .
    "". $id. "" .
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
    "" . $status .
    "</td>" .
   
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $Nationality .
    "</td>" .
   
    
    "</tr>" .
    "</tbody>" .
    "<thead>" .
    "<tbody>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>State Of Origin</th>" .
    "<th class=' p-3' style='border: 4px solid white'>LGA</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Crime Type</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Crime Description <span class='fw-lighter'></span></th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Date Of commit</th>" .
    "<th class=' p-3' style='border: 4px solid white'>Time Of Commit</th>" .
    "<th class='bg-dark p-3 bg-gradient text-warning' style='border: 4px solid white'>Action</th>" .
    "</thead>" .
    "<tr>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $state . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $lga . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $crime . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $description . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $doc . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $time . "" .
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
      $sql = "SELECT * FROM `crimes` WHERE `crimes`.id ='$id'";
    $result = mysqli_query($db_connect, $sql);
    if($result == true){

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

        echo "<table class='text-center table-bordered alert alert-secondary table'>" . //'table-striped' class can also be added.

    "<thead>" . 
    
    "<span class='offset-5 position-absolute alert alert-primary'>Added On :<b> $date</b></span>".
    "<form action='update-crimes.php' method='post' class=''>
    <input type='hidden' name='id' value=' ".$row['id']." '>
    &nbsp;<input type='submit' name='update' value='Update Crime' 
    class='btn btn-danger fw-semibold offset-10' style='margin-top:'>
    </form>" . "<br><br>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Image</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>ID</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Name</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Sex</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Age</th>" .
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Marital Status</th>" .
   
    "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Nationality</th>" .
   
   
    "</thead>" .
    "<tbody>" .
    "<tr>" .
    "<td class='p-3 bg-light' style='border: 2px solid white'>" .
    "<img src='uploads/$image' alt='...' style='width:100px'>".
    "</td>" .
    "<td class='bg-light p-3' style='border: 2px solid white'>" .
    "". $id. "" .
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
    "" . $status .
    "</td>" .
   
    "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
    "" . $Nationality .
    "</td>" .
   
    
    "</tr>" .
    "</tbody>" .
    "<thead>" .
    "<tbody>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>State Of Origin</th>" .
    "<th class=' p-3' style='border: 4px solid white'>LGA</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Crime Type</th>" .
    "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Crime Description <span class='fw-lighter'></span></th>" .
    "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Date Of commit</th>" .
    "<th class=' p-3' style='border: 4px solid white'>Time Of Commit</th>" .
    "<th class='bg-dark p-3 bg-gradient text-warning' style='border: 4px solid white'>Action</th>" .
    "</thead>" .
    "<tr>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $state . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $lga . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $crime . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $description . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $doc . "" .
    "</td>" .
    "<td class='p-5 bg-light' style='border: 4px solid white'>" .
    "" . $time . "" .
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
      $crime_search = $_POST["crime"];
      $sql = "SELECT * FROM `crimes` WHERE crimes.crime_type ='$crime_search'";
    $result = mysqli_query($db_connect, $sql);
    if($result){

        while($row = mysqli_fetch_assoc($result))
        {

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


        echo "<table class='text-center table-bordered alert alert-secondary table'>" . //'table-striped' class can also be added.

        "<thead>" . 
    
        "<span class='offset-5 position-absolute alert alert-primary'>Added On :<b> $date</b></span>".
        "<form action='update-crimes.php' method='post' class=''>
        <input type='hidden' name='id' value=' ".$row['id']." '>
        &nbsp;<input type='submit' name='update' value='Update Crime' 
        class='btn btn-danger fw-semibold offset-10' style='margin-top:'>
        </form>" . "<br><br>" .
        "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Image</th>" .
        "<th class='alert alert-secondary p-3' style='border: 2px solid white'>ID</th>" .
        "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Name</th>" .
        "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Sex</th>" .
        "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Age</th>" .
        "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Marital Status</th>" .
       
        "<th class='alert alert-secondary p-3' style='border: 2px solid white'>Nationality</th>" .
       
       
        "</thead>" .
        "<tbody>" .
        "<tr>" .
        "<td class='p-3 bg-light' style='border: 2px solid white'>" .
        "<img src='uploads/$image' alt='...' style='width:100px'>".
        "</td>" .
        "<td class='bg-light p-3' style='border: 2px solid white'>" .
        "". $id. "" .
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
        "" . $status .
        "</td>" .
       
        "<td class='p-3 bg-light' style='border: 2px solid white'>"  .
        "" . $Nationality .
        "</td>" .
       
        
        "</tr>" .
        "</tbody>" .
        "<thead>" .
        "<tbody>" .
        "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>State Of Origin</th>" .
        "<th class=' p-3' style='border: 4px solid white'>LGA</th>" .
        "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Crime Type</th>" .
        "<th class='p-3  alert alert-secondary' style='border: 2px solid white'>Crime Description <span class='fw-lighter'></span></th>" .
        "<th class='p-3 alert alert-secondary' style='border: 2px solid white'>Date Of commit</th>" .
        "<th class=' p-3' style='border: 4px solid white'>Time Of Commit</th>" .
        "<th class='bg-dark p-3 bg-gradient text-warning' style='border: 4px solid white'>Action</th>" .
        "</thead>" .
        "<tr>" .
        "<td class='p-5 bg-light' style='border: 4px solid white'>" .
        "" . $state . "" .
        "</td>" .
        "<td class='p-5 bg-light' style='border: 4px solid white'>" .
        "" . $lga . "" .
        "</td>" .
        "<td class='p-5 bg-light' style='border: 4px solid white'>" .
        "" . $crime . "" .
        "</td>" .
        "<td class='p-5 bg-light' style='border: 4px solid white'>" .
        "" . $description . "" .
        "</td>" .
        "<td class='p-5 bg-light' style='border: 4px solid white'>" .
        "" . $doc . "" .
        "</td>" .
        "<td class='p-5 bg-light' style='border: 4px solid white'>" .
        "" . $time . "" .
        "</td>" .
        "<td class='bg-light p-4' style='border: 4px solid white'>" .
        "<a href='#delete' data-bs-toggle='modal' class='bi bi-trash-fill text-danger fs-3'></a>" .
        "</td>" .
        "</tr>" .
        "</tbody>" .
    
        "</table>" .
        
        "<br>"; 
    
        
        }
       
      }
    }

?>

<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" onclick="printScreen()" class="btn btn-danger p-3 offset-5">Print Information</button>
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

print("<a href='delete-personnel.php?delete_crime=$id' class='bi bi-check-circle fs-2 text-success offset-4'></a>");

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