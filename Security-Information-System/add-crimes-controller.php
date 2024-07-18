<?php
if(isset($_POST["save"]) && isset($_FILES["image"]["name"]))
{
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $nationality = $_POST["nationality"];
    $state = $_POST["state"];
    $lga = $_POST["LGA"];
    $status = $_POST["status"];
    $crime = $_POST["crime"];
    $description = $_POST["description"];
     $crime_date = $_POST["crime_date"];
     $time = $_POST["time"];
    
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

        if(emptyInputs_2($name, $age, $sex, $nationality, $state, $lga, $status, $crime, $description, $crime_date, $time) !== false)
        {
            echo "<div class='text-center alert alert-danger offset-0 w-100'>Please fill in all input fields with required information</div>";
            exit();
        }
        else if(__invalid_Name_2($name) !== false)
        {
            echo "<div class='text-center alert alert-danger offset-0 w-100'>Invalid name format! Name must only contain alphabets</div>";
            exit();
            
        }
        else{
            $sql = $db_connect->query("INSERT INTO `crimes` (name, age, sex, status, nationality, stateOfOrigin, LGA, crime_type, crime_description, date_of_crime, time_of_crime, image) VALUES ('$name', '$age', '$sex', '$status', '$nationality', '$state', '$lga', '$crime', '$description', '$crime_date', '$time', '$new_img_name');");
     
            if($sql == true)
            {
                
                move_uploaded_file($tmp_name, $img_upload_path); 
                
                echo "<div class='text-center alert alert-success offset-0 w-100'>Crime record added successfully</div>";
                exit();
            }else{
                
                echo "<div class='text-center alert alert-danger offset-0 w-100'>Failed to add record! Something went wrong</div>";
                exit();
            }
        
        }
    
        // foreach($msg as $message)
        // {
        //     echo $message;
        // }
}

