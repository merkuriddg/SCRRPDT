<?php

require_once('../includes/config.php');
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$target_dir = "../dist/img/";
$target_file = $target_dir . basename($_FILES["user_photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["user_photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["user_photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
&& $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" 
   && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "xls" && $imageFileType != "xlsx"    ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["user_photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["user_photo"]["name"]). " has been uploaded.";
        $user_photo = $_FILES["user_photo"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$upload_file = $_FILES["user_photo"]["name"];


//add img_location code:

$result = mysqli_query($con, "CALL upload_photo('" . $_SESSION['memberID'] . "', '" . $upload_file . "')")                       
        or 
      die("Insert fail: " . mysqli_error());
    //loop the result set

$con->next_result();
header('Location: http://intranet.arrayetea.com/secure/profile.php');
die();
?>
