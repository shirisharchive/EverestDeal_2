<?php
include("../connection/connection.php");

if(isset($_POST['form_submit'])) {
    $title = $_POST['title'];
    $rentingprice = $_POST['rp'];
    $sellingprice = $_POST['sp'];
    $description = $_POST['description'];
    $puregistrationId = $_POST['registrationId'];

    // File upload handling
    $folder = '../seller/pics/'; // Path to the uploads directory
    $image_file = $_FILES['image']['name'];
    $file = $_FILES['image']['tmp_name'];
    $target_file = $folder . basename($image_file);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Initialize an empty array to store errors
    $errors = array();

    // Validate file type
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    if(!in_array($imageFileType, $allowed_types)) {
        $errors[] = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    }

    // Validate file size
    if($_FILES['image']['size'] > 1048576) {
        $errors[] = 'Sorry, your image size is too large. Please upload a file less than 1 MB.';
    }

    // Check if there are no errors
    if(empty($errors)) {
        // Move uploaded file to the destination directory
        if(move_uploaded_file($file, $target_file)) {
            // Insert data into the database using prepared statements
            $query = "INSERT INTO selling_items (images, title, registrationid, rentingprice, sellingprice, description) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);

            // Bind parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, "ssssss", $image_file, $title, $puregistrationId, $rentingprice, $sellingprice, $description);
            
            // Execute the prepared statement
            if(mysqli_stmt_execute($stmt)) {
                echo "Data uploaded successfully.";
                header("Location: toseller.php ");
                exit(); // Ensure that script execution stops after redirection
            } else {
                echo "Something went wrong with database insertion.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        // Display errors if there are any
        foreach($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
