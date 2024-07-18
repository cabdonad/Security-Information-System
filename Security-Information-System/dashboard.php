<?php 
session_start();
require "db-connection.php";
require "functions.php";
if(!isset($_SESSION["password"]))
{
    header("Location: login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="bootstap-5.1.3/dist/css/bootstrap.css">
     <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <script defer src="main.js"></script>
    
         <style type="text/css" media="all">

    *{
        padding: 0;
        margin:0;
        box-sizing: border-box;
        user-select: none;
        /* font-family:sans-serif; */
    }


.sidenav{
    height: 60%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background: rgba(0, 3, 42, 0.993);
    overflow-x: hidden;
    padding-top: 90px;
    transition: 0.3s;

    }


    .sidenav a{
      
    display: block;
    padding: 10px 8px 10px 40px;
    text-decoration: none;
    font-size: 20px;
    transition: 0.3s;
    color: aliceblue;
    /* font-family: 'Courier New', Courier, monospace; */
    
    text-transform: capitalize;
    font-weight: normal; 

    }

    .sidenav a:hover{
        background-color: rgba(4, 48, 56, 0.781);
        color:gold;
        transition: 0.1s;
        transform: scale(1.1);
        font-weight: 500;
    }

    .sidenav .closebtn{
        position: absolute;
        top: 0;
        right: 0;
        font-size: 36px;
        margin-left: 5rem;
        cursor: pointer;
        color: aliceblue;
    }

    
    </style>

</head>
<body>

 <div class="container">
<div class="row">
<div class="container">

    <div id="mySidenav" class="sidenav">
   
    <span class="closebtn bg-primary p-2 w-100 bi bi-x-circle" onclick="closeSideNav()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dashboard</span>
    <!-- <a href="#">Admin Feedback</a> -->
    <ul>
        <li class="text-light"><a href="police.php"> 
         Manage Personnels</a></li>
      <hr style="color:white">
        <li class="text-light"><a href="crimes.php"> 
        Manage crime Records</a></li>
        <hr class="bg-light">
        <li class="text-light"><a href="#"> 
         Signals</a></li>
         <hr class="bg-light">
        <li class="text-light"><a href="change-pwd.php"> 
        Change Login Password</a></li>
        
         <hr class="bg-light">
        <li class="text-light"><a href="#"> 
        About </a></li>
        
    </ul>
    </div>
</div>
</div>
</div>

<script type="text/javascript">
function openSideNav(){
document.getElementById("mySidenav").style.width ="420px";

}
function closeSideNav(){
    document.getElementById("mySidenav").style.width ="0";
}

function openNav(){
document.getElementById("sidenavBar").style.width ="350px";

}
function closeNav(){
    document.getElementById("sidenavBar").style.width ="0";
}
</script>

<!-- <div class="container m-0"> -->
<main id="swup" class="transition-fade">


<div id="instructor" class="p-3 bg-secondary">
<!-- <div class="container"> -->
<h2 class="text-center text-white">
<img src="photos/logo.png" class="rounded-circle" alt="image" style="width:90px; margin-left:-30rem">
<span class="offset-3">
Police Security Information System
 </span>
</h2>
<a href="#logout" data-bs-toggle="modal" class="offset-10 bi bi-lock-fill text-light text-decoration-none fs-5 position-absolute p-2 rounded-2" style="border:2px solid #fff;margin-top:-4.5rem">Logout</a>
<a href="#" class="bi bi-list position-absolute text-light offset-9 fs-2" style="margin-top:-4rem" onclick="openSideNav()"></a>
<p class="lead text-center text-white mb-4">
Keep track of police personnels and easily manage crime records
</p>
<div class="row g-3">

<div class="col-md-6 col-lg-3">
    <div class="card bg-light">
        <div class="card-body text-center">
            <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
            class="rounded-circle mb-3" alt=""> -->
<img src="Nac_images/62f379723539a7.98217037.jpg" class="rounded-circle w-50 " alt="">
<i class="bi bi-people-fill fs-1"></i>
<h4 class="card-title mb-3">Police Personnels</h4>
<p class="card-text">
 <?php
 $sql = $db_connect->query("SELECT count(*) FROM `police`");
 if($sql == true){

     if($police_count = mysqli_fetch_array($sql))
    {
        echo "<span class='fs-3 fw-bold text-secondary'>$police_count[0] </span>";
    }
 }
 ?>
</p>
<!-- <a href="" class="btn btn-dark text-light mx-1">follow</a> -->

        </div>
    </div>
</div>

<div class="col-md-6 col-lg-3">
        <div class="card bg-light">
            <div class="card-body text-center">
                <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                YOU CAN ALSO USE "WOMEN"(portraits/women/13.jpg)
                class="rounded-circle mb-3" alt=""> -->
<img src="Nac_images/631651a76a3748.29221817.jpg" style="" class="rounded-circle w-50" alt="">
<i class="bi bi-file-arrow-down-fill fs-1"></i>
<h4 class="card-title mb-3 ">Crime Records</h4>
<p class="card-text">
<?php
        $sql = $db_connect->query("SELECT count(*) FROM `crimes`");
        if($sql == true){

         if($crime_count = mysqli_fetch_array($sql))
        {
        echo "<span class='fs-3 fw-bold text-secondary'>$crime_count[0] </span>";
        }
    }
    ?>
</p>

            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                    YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                    class="rounded-circle mb-3" alt=""> -->
    <img src="Nac_images/62f379b074cff9.87921147.jpg" style="" class="rounded-circle w-50" alt="">
    <i class="bi bi-signal fs-1"></i>
    <h4 class="card-title mb-3">Signals</h4>
    <p class="card-text">
    <span class="text-secondary fw-bold fs-3">
     <?php 
     echo "<span class='fs-3 fw-bold text-secondary'> 0 </span>";
      ?>
      </span>
    </p>

                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <!-- <img src="https://randomuser.me/api/portraits/men/11.jpg"
                        YOU CAN ALSO USE "WOMEN"(portraits/women/11.jpg)
                        class="rounded-circle mb-3" alt=""> -->
        <img src="Nac_images/62f379c2a01d96.94473229.jpg" style="" class="rounded-circle w-50" alt="">
        <i class="bi bi-question-diamond-fill fs-1"></i>
        <h4 class="card-title mb-3">Help</h4>
        <p class="card-text">
            
        </p>
        <a href="https://www.nigreianpoliceforce.ng" class="btn btn-primary text-light mx-1">Go Help</a>

                    </div>
                </div>
            </div> 

</div>
</div>
<br>
<section class="recent-guests bg-light">
<div class="container p-3">
<h2>Recently Recruited Personnels </h2>
<span class="position-absolute offset-6" style='margin-top:-3.5rem' id="demo">
<?php
if(isset($_GET["contact"]))
{
 echo "
    <form action='contact-guests.php' method='post' autocomplete='off'>
    <button type='button' class='btn btn position-absolute fs-4' name='cancel' style='margin-left:-3rem;margin-top:-0.5rem' onclick='hide()'> <i class='bi bi-x-circle text-danger'></i></button>
    <input type='search' name='id' class='form-control' placeholder='Enter personnel's>
    <button type='submit' class='btn btn btn-sm position-absolute' style='margin-top:-3.2rem;margin-left:14rem' name='submit'> <i class='bi bi-arrow-right-circle fs-2'> </i></button>
    </form>
";
}

?>
</span>
<script type="text/javascript">
function hide()
{
    document.getElementById("demo").style.display ="none";
}
</script>
</div>
        <table class='table table-bordered p-5 table-condensed table-lg text-center table-responsive alert alert-secondary'>
        <tr>
        <th class="p-3">Police Image</th>
        <th class="p-3">Police Name</th>
        <th class="p-3">Recruitment Date</th>
        <th class="p-3">Rank</th>
        <th class="p-3 bg-secondary text-light">Action</th>
        </tr>
       <?php
       
       function recentPersonnels($db_connect)
       {
           $sql = $db_connect->query("SELECT * FROM `police` WHERE `id` > (SELECT count(*) FROM `police`) - 5");
           if($sql == true){
               while($row = mysqli_fetch_assoc($sql))
               {
                   $id = $row['id'];
                   $image = $row['image'];
                   $name = $row['name'];
                   $date = $row['date_of_recruitment'];
                   $rank = $row['rank'];
                   ?>
                   <tr>
                   <td class="p-3"><?php echo "<img src='uploads/$image' alt='..' style='width:100px'/>" ?></td>
                   <td class=" p-4"><?php echo $name ?></td>
                   <td class="p-4"><?php echo $date ?></td>
                   <td class="p-4"><?php echo $rank ?></td>
                   <td class="p-4">
                   <form action="personnel-full-info.php" method="post">
                   <input type="hidden" name="id" value="<?php echo $id ?>">
                   <input type="submit" name="submit" value="View all" class="btn btn-primary"> <span class="bi bi-eye-fill fs-5 text-dark"></span>
                   </form>
                   </td> 
                   </tr>
       
                   <?php
               }
            }else{
               echo "<div class='text-center alert alert-warning offset-0 w-50'>No recently added personnels</div>";
           }
       }
       
       echo recentPersonnels($db_connect);

       ?>
        </table>


</section>
<section class="recent-guests bg-light">
<div class="container p-3">
<h2>Recently Added Crimes </h2>


</div>
        <table class='table table-bordered p-5 table-condensed table-lg text-center table-responsive alert alert-primary'>
        <tr>
        <th class="p-3">Criminal's Image</th>
        <th class="p-3">Criminal's Name</th>
        <th class="p-3">Age</th>
        <th class="p-3">Sex</th>
        <th class="p-3">Marital Status</th>
        <th class="p-3">Crime Type</th>
        <th class="p-3 bg-secondary text-light">Action</th>
        </tr>
       <?php
       
       function recentCrimes($db_connect)
       {
           $sql = $db_connect->query("SELECT * FROM `crimes` WHERE `id` > (SELECT count(*) FROM `crimes`) - 3");
           if($sql == true){
               while($row = mysqli_fetch_assoc($sql))
               {
                   $crime_id = $row['id'];
                   $criminal_name = $row['name'];
                   $criminal_image = $row['image'];
                   $criminal_age = $row['age'];
                   $marital_status= $row['status'];
                   $criminal_sex= $row['sex'];
                   $crime= $row['crime_type'];
                   ?>
                   <tr>
                   <td class="p-3"><?php echo "<img src='uploads/$criminal_image' style='width:100px'>" ?></td>
                   <td class="p-4"><?php echo $criminal_name ?></td>
                   <td class="p-4"><?php echo $criminal_age ?></td>
                   <td class="p-4"><?php echo $criminal_sex ?></td>
                   <td class="p-4"><?php echo $marital_status ?></td>
                   <td class="p-4"><?php echo $crime ?></td>
                   <td class="p-4">
                   <form action="full-crimes-info.php" method="post">
                   <input type="hidden" name="id" value="<?php echo $crime_id ?>">
                   <input type="submit" name="submit" value="View full record" class="btn btn-danger"> <span class="bi bi-eye-fill fs-5 text-danger"></span>
                   </form>
                   </td> 
                   </tr>
       
                   <?php
               }    
            }else{
               echo "<div class='text-center alert alert-warning offset-0 w-50'>No recently added Crimes</div>";
           }
       }
       
       echo recentCrimes($db_connect);

       ?>
        </table>


</section>
</div>

</div>
<!-- </div> -->
<!-- </div> -->
    
       </main>

<div class="container">
<div class="row">
<div class="modal fade" role="dialog" id="logout">
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form action="dashboard.php" method="post" autocomplete="off">
<div class="form-group shadow p-3 bg-light">
<p class="fs-6 lead fw-bold text-center ">Are you sure you want to logout?</p>
<br>
<a href="#" class="bi bi-x-circle fs-2 offset-3 text-danger" data-bs-dismiss="modal"></a>
<?php 

print("<a href='admin-logout.php' class='bi bi-check-circle fs-2 text-success offset-4'></a>");

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