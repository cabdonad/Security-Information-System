<?php
function adminLogin($db_connect)
{
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$pwd = $_POST["password"];
if(empty($pwd))
{
define('error_1', "<div class='alert alert-danger offset-0 shadow text-center'>Please provide login pin.</div>", false);
echo error_1;

}else{
$sql = "SELECT password FROM `adminlogin` WHERE password = ?;";
$stmt = mysqli_stmt_init($db_connect);
if(!mysqli_stmt_prepare($stmt, $sql))
{
die(mysqli_error($db_connect));
}else{
mysqli_stmt_bind_param($stmt, "s", $pwd);
mysqli_stmt_execute($stmt);
$fetch_result = mysqli_stmt_get_result($stmt);
if($row = mysqli_fetch_array($fetch_result))
{
    if($pwd !== $row['password'])
    {
        define("error_2", "<div class='alert alert-danger offset-0 shadow text-center'>Incorrect login pin provided </div>", false);
    echo error_2;
    }else
    {
        $_SESSION['password'] = $row["password"];
        $_SESSION['session_admin_id'] = $row["id"];
        header("Location: dashboard.php");
    }
}else{
    define("error_3", "<div class='alert alert-danger offset-0 shadow text-center'>Incorrect login pin provided</div>", false);
    echo error_3;
}
}
}
}
}

function police($db_connect)
{
$sql = $db_connect->query("SELECT * FROM `police`");
if($sql == true){
while($row = mysqli_fetch_assoc($sql))
{
$id = $row['id'];
$unique_id = $row["unique_id"];
$name = $row['name'];
$image = $row['image'];
$sex = $row['sex'];
$department = $row['department'];
$rank = $row['rank'];
?>
<tr>
<td><?php echo "<img src='uploads/$image' alt='..' style='width:100px'/>"  ?></td>
<td class="p-4"><?php echo $unique_id ?></td>
<td class="p-4"><?php echo $name ?></td>
<td class="p-4"><?php echo $sex ?></td>
<td class="p-4"><?php echo $department ?></td>
<td class="p-4"><?php echo $rank ?></td>
<td class="p-4">
<form action="personnel-full-info.php" method="post">
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="submit" value="View all" name="submit" class="btn btn-primary">
</form>
</td>
</tr>

<?php
}
}else{
echo "<div class='text-center alert alert-warning offset-3 w-50'>No information currently avaliable</div>";
}
}


function crimes($db_connect)
{
$sql = $db_connect->query("SELECT * FROM `crimes`");
if($sql == true){
while($row = mysqli_fetch_assoc($sql))
{
$crime_id = $row['id'];
$name = $row['name'];
$image = $row['image'];
$sex = $row['sex'];
$status = $row['status'];
$age = $row['age'];
$crime = $row['crime_type'];
?>
<tr>
<td><?php echo "<img src='uploads/$image' alt='..' style='width:100px'/>"  ?></td>
<td class="p-4"><?php echo $crime_id ?></td>
<td class="p-4"><?php echo $name ?></td>
<td class="p-4"><?php echo $age ?></td>
<td class="p-4"><?php echo $sex ?></td>
<td class="p-4"><?php echo $status ?></td>
<td class="p-4"><?php echo $crime ?></td>
<td class="p-4">
<form action="full-crimes-info.php" method="post">
<input type="hidden" name="id" value="<?php echo $crime_id ?>">
<input type="submit" value="View full record" name="submit" class="btn btn-danger">
</form>
</td>
</tr>

<?php
}
}else{
echo "<div class='text-center alert alert-warning offset-3 w-50'>No information currently avaliable</div>";
}
}

function emptyInputs($id, $name, $dob, $age, $status, $height, $nationality, $phone, $sex, $qualification, $department, $rank, $remark)
{
    $result;
    if(empty($id) || empty($name) || empty($dob) || empty($age) || empty($status) || empty($height) || 
    empty($nationality) || empty($state) || empty($lga) || empty($phone) || empty($sex) || empty($qualification) || empty($department) 
    || empty($rank) || empty($remark))
    {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function __invalid_Name($name)
{
    $result;
    if(!preg_match("/^[a-zA-Z0-9 ]*$/", $name))
    {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function emptyInputs_2($name, $age, $sex, $nationality, $state, $lga,  $status, $crime, $description, $crime_date, $time)
{
    $result;
    if(empty($name) || empty($age) || empty($sex) || empty($nationality) || empty($state) || empty($lga) || empty($status) || empty($crime) 
    || empty($description) || empty($crime_date) || empty($time))
    {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function __invalid_Name_2($name)
{
    $result;
    if(!preg_match("/^[a-zA-Z0-9 ]*$/", $name))
    {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function __empty_change_pwd_inputs__($recent_pwd, $new_pwd, $confirm_new_pwd)
{
    $result;
   if(empty($recent_pwd) || empty($new_pwd) || empty($confirm_new_pwd))
   {
       $result = true;

   }else{
       $result = false;
   }
   return $result;
}

function __check_match_pwd($oldPass, $recent_pwd)
{
    $result;
    if($recent_pwd !== $oldPass)
    {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function __wrong_confirm_pwd($new_pwd, $confirm_new_pwd)
{
    $result;
    if($new_pwd !== $confirm_new_pwd)
    {
        $result = true;

    }
    else{
        $result = false;
    }
    return $result;
}

function pwdLength($new_pwd)
{
    $result;
    if(strlen($new_pwd) <> 6)
    {
        $result = true;

    }else{
        $result = false;
    }
    return $result;
}

function updatePwd($db_connect, $new_pwd)
{
   
    $sql = $db_connect->query("UPDATE `adminlogin` SET password = '$new_pwd' WHERE id = '1'");
    if($sql == true)
    {
        echo "<div class='text-center alert alert-success offset-0 w-100'>Password updated successfully</div>";
        exit();
    }
}


