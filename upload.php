<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt' , 'txt' , 'mp4');

$target_dir = "uploads/";
$img = $_FILES["fileToUpload"]["name"];
$tmp = $_FILES["fileToUpload"]["tmp_name"];

$target_file = $target_dir . basename($img);
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));


$uploadOk = 1;

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists. \n";
    $uploadOk = 0;
}

else if ($_FILES["fileToUpload"]["size"] > 10000000000) {
    echo "Sorry, your file is too large. \n";
    $uploadOk = 0;
}

else if(!in_array($ext, $valid_extensions)) {
    echo "File extension is not allowed. \n";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. \n";
// if everything is ok, try to upload file
}

else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file uploaded successfully :" .basename($_FILES["fileToUpload"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
