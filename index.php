<?php
include("connection.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];

    if (strlen($pincode) != 6) {
        echo "<script>alert('Pincode must be exactly 6 digits');</script>";
    } else {
        if ($name != "" && $state != "" && $pincode != "") {
            $insertQuery = "INSERT INTO signup(name, state, pincode) VALUES (?, ?, ?)";
            $stmt = $con->prepare($insertQuery);
            $stmt->bind_param("sss", $name, $state, $pincode);

            if ($stmt->execute()) {
                echo "<script>alert('Signup Successful');</script>";
                header('Location: form.php');
                exit();
            } else {
                echo "<script>alert('Failed to insert data: " . $stmt->error . "');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('All fields are required');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #3498db;;
        }

        .header h1 {
            margin: 0;
        }

        .login-options {
            display: flex;
            gap: 10px;
        }

        .login-btn,
        .admin-login-btn {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover,
        .admin-login-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header class="header">
        <h1>Underground Water Level Predictor</h1>
        <div class="login-options">
            <a href="user.php" class="login-btn">User Login</a>
            <a href="index.php" class="admin-login-btn">Admin Login</a>
        </div>
    </header>

    <main class="main-content">
        <div class="signup-form">
            <h2>Login</h2>
            <form name="signupForm" action="#" method="POST">
                <input type="text" name="name" placeholder="Enter your Name" required>
                <input type="text" name="state" placeholder="Enter your State" required>
                <input type="text" name="pincode" placeholder="Enter your Pincode" required>
                <input type="submit" value="Sign Up" name="register">
            </form>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; All Rights Reserved.</p>
    </footer>
</body>

</html>
