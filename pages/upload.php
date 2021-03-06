<?php
require 'functions.php';

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    // Connect to database
    
    $conn = mysqli_connect("localhost", "root", "", "prieglauda");
    
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    
    // Taking  values from the form data(input)
    $cookie_name = "user_id";
    $vartotojas = $_COOKIE[$cookie_name];
    $kategorija = $_POST['kategorija'];
    
    
    $amzius = $_REQUEST['amzius'];
    $dokumentai = 0;
    
    
    
    if(isset($_POST['dokumentacija']) &&
        $_POST['dokumentacija'] == 'Yes')
    {
        $dokumentai = 1;
    }
    else
    {
        $dokumentai = 0;
    }
    
    
    
    $vardas = $_REQUEST['vardas'];
    $nuotrauka = $target_file;
    $aprasas = $_REQUEST['aprasas'];
    
    
    // Performing insert query execution
    
    $sql = "INSERT INTO gyvunai (vartotojai_id,kategorija_id,amzius,dokumentai,vardas,nuotrauka,aprasas) VALUES ('$vartotojas','$kategorija','$amzius','$dokumentai','$vardas','$nuotrauka','$aprasas' )";
    
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
                
                
    } else{
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
    
    ?>