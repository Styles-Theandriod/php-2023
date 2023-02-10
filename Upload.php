<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //CHECK IF THE IMAGE FILE IS ACTUAL AN IMAGE FILE OR A FAKE IMAGE FILE
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        if($check !== false){
            echo "File is an image" . $check["mime"] . ".";
            $uploadOk = 1;
        }else{
            echo "File is not an image";
            $uploadOk = 0;
        }

        // check if the file already exits 
        if(file_exists($target_file)){
            echo "Sorry file already exits";
            $uploadOk = 0;
        }else{
            echo "New file added";
            $uploadOk = 1;
        }

        //Check file limit
        if($_FILES["fileToUpload"]["size"] > 500000){
            //500kb
            echo "Sorry file is too large";
            $uploadOk = 0;
        }
    }
?>