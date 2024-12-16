<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve and sanitize inputs
    $first_name = mysqli_real_escape_string($con, trim($_POST['fname']));
    $last_name = mysqli_real_escape_string($con, trim($_POST['lname']));
    $user_num = mysqli_real_escape_string($con, trim($_POST['num']));
    $user_mail = mysqli_real_escape_string($con, trim($_POST['mail']));
    $user_password = mysqli_real_escape_string($con, trim($_POST['pass']));

    // Validate inputs
    if (!empty($first_name) && !empty($last_name) && !empty($user_num) && !empty($user_mail) && !empty($user_password)) {
        if (!filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format.');</script>";
        } else {
            // Check if email is already registered
            $check_query = "SELECT * FROM form WHERE mail = '$user_mail' LIMIT 1";
            $check_result = mysqli_query($con, $check_query);

            if ($check_result && mysqli_num_rows($check_result) > 0) {
                echo "<script>alert('Email is already registered.');</script>";
            } else {

                // Insert new user into the database
                $query = "INSERT INTO form (fname, lname, num, mail, pass) 
                          VALUES ('$first_name', '$last_name', '$user_num', '$user_mail', '$user_password')";

                if (mysqli_query($con, $query)) {
                    echo "<script>alert('Successfully Registered!');</script>";
                    header('Location: ./login.php');
                    die;
                } else {
                    echo "<script>alert('Error registering user. Please try again later.');</script>";
                }
            }
        }
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="log_sign.css">
</head>
<body>
    <h1 class="logo">
        Logo Here
    </h1>
    <form method="POST">
        <h1 class="log">Sign Up</h1>
        <div class="box">
            <input class="inputs" type="text" placeholder="First Name" name="fname" required>
        </div>
        <div class="box">
            <input class="inputs" type="text" placeholder="Last Name" name="lname" required>
        </div>
        <div class="box">
            <input class="inputs" type="number" placeholder="Phone Number" name="num" required>
        </div>
        <div class="box">
            <input class="inputs" type="email" placeholder="Email" name="mail" required>
        </div>
        <div class="box">
            <input class="inputs" type="password" placeholder="Password" name="pass" required>
        </div>
        <div class="btn">
            <!-- <input type="submit" value="Sign Up"> -->
            <a href="login.php" style="background: #fff; border-radius: 20px 20px; padding: 15px 50px;">Sign Up</a>
        </div>
        <div class="up">
            <p>Already have an account?</p>
            <a href="./login.php">Sign In</a>
        </div>
    </form>
</body>
</html>
