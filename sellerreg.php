<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Seller Registration Form</h2>
    <form action="../seller/sellerinfoindb.php" method="POST">
        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required autocomplete="off">
        </div>
        
        <div>
            <label for="registrationId">PU Registration ID:</label>
            <input type="text" id="registrationId" name="registrationId" required autocomplete="off">
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required autocomplete="off">
        </div>

        <div>
            <label for="college">College Name:</label>
            <select id="college" name="college" required autocomplete="off">
                <option value="">Select College</option>
                <option value="Everest Engineering College">Everest Engineering College</option>
                <!-- Add more options if needed -->
            </select>
        </div>

        <div>
            <label for="contact">Contact Details:</label>
            <input type="text" id="contact" name="contact" required autocomplete="off">
        </div>

        <div>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required autocomplete="off">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div>
            <button type="submit" name="submit">Register Me</button>
        </div>
    </form>
</body>
</html>
