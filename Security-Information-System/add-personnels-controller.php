<?php
if(isset($_POST["submit"]) && isset($_FILES["image"]["name"]))
{
    $id = $_POST["unique_id"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $status = $_POST["status"];
    $height = $_POST["height"];
    $nationality = $_POST["nationality"];
    $state = $_POST["state"];
    $lga = $_POST["LGA"];
    $phone = $_POST["phone"];
    $sex = $_POST["sex"];
     $qualification = $_POST["qualification"];
     $department = $_POST["department"];
     $rank = $_POST["rank"];
     $remark = $_POST["remark"];
      $image_name = $_FILES["image"]["name"];     
        $tmp_name = $_FILES["image"]["tmp_name"]; 
        $img_size = $_FILES["image"]["size"];  
        $img_error = $_FILES["image"]["error"]; 
        if($img_error === 0){
        $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
        $img_ex_to_lc = strtolower($img_ex);
        $allowed_exs = array('jpg','png','jpeg');
        if(in_array($img_ex_to_lc, $allowed_exs)){
            if($img_size > 4000000){

                define("error", "<div class='alert alert-danger offset-0 shadow text-center'>The image size is too large</div>", false);
                echo error;
            }else{
        $new_img_name = uniqid("$name", true).'.'.$img_ex_to_lc;
        $img_upload_path = './uploads/'.$new_img_name;
       
        }

    }else{

        define("err", "<div class='alert alert-danger offset-0 shadow text-center'>You can't upload images of this type </div>", false);
    echo err;
    }
    }else{ 
        
        echo null;
    }

        if(emptyInputs($id, $name, $dob, $age, $status, $height, $nationality, $state, $lga, $phone, $sex, $qualification, $department, $rank, $remark) !== false)
        {
            echo "<div class='text-center alert alert-danger offset-0 w-100'>Please fill in all input fields with required information</div>";
            exit();
        }
        else if(__invalid_Name($name) !== false)
        {
            echo "<div class='text-center alert alert-danger offset-0 w-100'>Invalid name format! Name must only contain alphabets</div>";
            exit();
        }
        else{
            $sql = $db_connect->query("INSERT INTO `police` (unique_id, name, dob, sex, age, status, height, nationality,state, lga phone, qualification, department, rank, remark, image) VALUES ('$id', '$name', '$dob', '$sex', '$age', '$status', '$height', '$nationality', '$state', '$lga', '$phone', '$qualification', '$department', '$rank', '$remark', '$new_img_name');");
     
            if($sql == true)
            {
                
                move_uploaded_file($tmp_name, $img_upload_path); 
                
                echo "<div class='text-center alert alert-success offset-0 w-100'>Personnel added successfully</div>";
                exit();
            }else{
                
                echo "<div class='text-center alert alert-danger offset-0 w-100'>Failed to add personnel! Something went wrong</div>";
                exit();
            }
        
        }
    
        // foreach($msg as $message)
        // {
        //     echo $message;
        // }
}

