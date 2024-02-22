<!DOCTYPE html>
<html lang="en">
<head>

     
     <?php include("../connection/connection.php");

    //  include("../seller/sellerinfoindb.php");
     ?>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

form {
    max-width: 500px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

form input[type="text"],
form input[type="number"],
form input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

form button[name="form_submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button[name="form_submit"]:hover {
    background-color: #0056b3;
}

.message {
    margin-top: 10px;
    padding: 10px;
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <form action="selleritemstodb.php" method="POST" enctype="multipart/form-data">
        <!-- why enctype diyeko yeha -->
        <!-- Images ko lagi enctype chahinxa chahixa najhukkini hai. -->

        <label>Image</label>
        <input type="file" name="image" class="image" required>

        <label for="registrationId">PU Registration ID:</label>
            <input type="text" id="registrationId" name="registrationId" required autocomplete="off">

        <label>Title</label>
        <input type="text" placeholder="Shorter name of item is preferred" name="title" class="title">

        <label>Selling Price</label>
        <input type="number"  name="sp" class="sp">

        <label>Renting Price</label>
        <input type="number"  name="rp" class="rp">

        <label>Description</label>
        <input type="text" placeholder="Description about your item" name="description" class="description">

        <button name="form_submit" class ="upload">Upload</button>

        <?php 
       if(isset($image_success) && $image_success === 1) 
       {
        echo '<div class="message">Uploaded successfully</div>';
       }
        
        ?>




    </form>
</body>
</html>