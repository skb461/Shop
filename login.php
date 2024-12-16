<?php
session_start();
include("db.php");

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user input
    $user_email = mysqli_real_escape_string($con, $_POST['mail']);
    $user_password = mysqli_real_escape_string($con, $_POST['pass']);

    // Check credentials
    $query = "SELECT * FROM form WHERE mail = '$user_email' AND pass = '$user_password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) === 1) {
        $user_data = mysqli_fetch_assoc($result);

        // Store user session data
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['user_email'] = $user_data['mail'];
        $_SESSION['user_name'] = $user_data['fname'];

        // Redirect to account page
        header("Location: account.php?user_id=" . $user_data['id']);
        exit();
    } else {
        $error = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="log_sign.css">
</head>
<body>
    <h1 class="logo">
        Logo Here
    </h1>
    <form method="POST">
        <h1 class="log">Sign In</h1>
        <?php if (isset($error)) { ?>
            <div style="color: red; text-align: center; margin-bottom: 10px;">
                <?= $error ?>
            </div>
        <?php } ?>
        <div class="box">
            <input class="inputs" type="email" placeholder="Email" name="mail" required>
        </div>
        <div class="box">
            <input class="inputs" type="password" placeholder="Password" name="pass" required>
        </div>
        <div class="btn">
            <input type="submit" value="Sign In">
        </div>
        <div class="up">
            <p>Don't have an account?</p>
            <a href="./signup.php">Sign Up</a></br>
            <a href="admin_login.php">Sign in as Admin</a>
        </div>
    </form>
</body>
</html>
