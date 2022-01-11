<?php 
    // Database
    include '../connect.php'; 

    if(isset($_POST['register'])){
        $title = $_POST['title'];
        $youtube = $_POST['youtube'];
        $date = $_POST['date'];

        
        $uploadsDir = "gallery/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
            
            $rand = rand(100000000, 999999999);       
            $file1 = $rand . $_FILES["image"]["name"];
            $filetmp1 = $_FILES['image']["tmp_name"];
            $destination = "images/" . $file1;
            move_uploaded_file($filetmp1, $destination);

            // Loop through file items
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                // Get files upload path
                $rand = rand(100000,9999999);
                $fileName        = $rand.$_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;

                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$title."', '".$file1."','".$youtube."', '".$fileName."', '".$date."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                    $insert = mysqli_query($connect,"INSERT INTO gallery (title, image,youtube,description,date) VALUES $sqlVal");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                }
            }

        } else {
            // Error
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );
        }
    } 
?>