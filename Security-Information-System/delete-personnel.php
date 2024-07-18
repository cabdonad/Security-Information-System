<?php 
require_once "db-connection.php";

if(isset($_GET["delete_id"])){
    $id = $_GET["delete_id"];
    $result = mysqli_query($db_connect, "DELETE FROM `police` WHERE `police`.id = '$id'");
    if($result == true){
        header("Location: dashboard.php?deleted+successfully");
    }
}

else if(isset($_GET["delete_crime"]))
{
    $crime_id = $_GET["delete_crime"];
    $result = mysqli_query($db_connect, "DELETE FROM `crimes` WHERE crimes.id = '$crime_id'");
    if($result == true){
        header("Location: dashboard.php?deleted+successfully");
    }
}