<?php
require 'db-connection.php';
 if(isset($_POST["save"]))
 {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $crime = $_POST['crime'];
    $status = $_POST['status'];
    $description = $_POST['description'];
    $doc = $_POST['crime_date'];
    $time = $_POST['time'];
    $Nationality = $_POST['nationality'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    

         $result = mysqli_query($db_connect, "UPDATE `crimes` SET  `name` ='$name', `age` ='$age', `sex` ='$sex', `status` ='$status', `nationality` = '$Nationality', `stateOfOrigin` = '$state', `LGA` = '$lga', `crime_type` = '$crime', `crime_description` = '$description', `date_of_crime` = '$time' WHERE `crimes`.id = '$id'");
         if($result == true)
         {
            header("Location: full-crimes-info.php?id=$id");
        }else{
            header("Location: full-crimes-info.php?id?=$id");

         }
     }
