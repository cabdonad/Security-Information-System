<?php
require 'db-connection.php';
 if(isset($_POST["change"]))
 {
    $id = $_POST['id'];
    $unique_id = $_POST['unique_id'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $department = $_POST['department'];
    $rank = $_POST['rank'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $remark = $_POST['remark'];
    $height = $_POST['height'];
    $status = $_POST['status'];
    

         $result = mysqli_query($db_connect, "UPDATE `police` SET `unique_id` ='$unique_id', `name` ='$name', `dob` ='$dob', `sex` ='$sex', `age` ='$age', `status` ='$status', `height` ='$height', `nationality` = '$nationality', `state` ='$state', `lga` ='$lga', phone ='$phone', `qualification` = '$qualification', `department` = '$department', `rank` = '$rank', `remark` = '$remark' WHERE `police`.id = '$id'");
         if($result == true)
         {
            header("Location: personnel-full-info.php?id=$id");
        }else{
            header("Location: personnel-full-info.php?id?=$id");

         }
     }
