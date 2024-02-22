<?php
include("../connection/connection.php");

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $college = $_POST['college'];
    $contact = $_POST['contact'];
    $registrationId = $_POST['registrationId'];

    // Prepare SQL statement with the correct number of placeholders
    $stmt = $conn->prepare("INSERT INTO seller_info (name, address, contact, gender, college, registrationId) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("ssssss", $fullname, $address, $contact, $gender, $college, $registrationId);
    
    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect after successful insertion
        header("Location: sellerplace.php");
        exit(); 
    } else {
        // Display error message if execution fails
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}
?>
