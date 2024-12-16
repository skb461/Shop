<?php
session_start();
include("db.php"); // Ensure db.php contains the connection logic to your database.

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id']; // Use 'user_id' as defined in the login redirect
}else {
    // Redirect to login page if no username is found
    header("Location: login.php");
    exit();
}

// Fetch user information
$query = "SELECT * FROM form WHERE id = '$user_id'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_assoc($result);
    $first_name = $user_data['fname'];
    $last_name = $user_data['lname'];
    $user_num = $user_data['num'];
    $user_mail = $user_data['mail'];
    $user_address = $user_data['address'];
} else {
    echo "Failed to fetch user data.";
    exit();
}

// Update user information
if (isset($_POST['s_signup'])) {
    $updated_first_name = $_POST['fname'];
    $updated_last_name = $_POST['lname'];
    $updated_num = $_POST['num'];
    $updated_mail = $_POST['mail'];
    $updated_address = $_POST['address'];
    $updated_password = $_POST['pass'];

    $update_query = "UPDATE form 
                    SET fname='$updated_first_name', lname='$updated_last_name', 
                        num='$updated_num', mail='$updated_mail', 
                        address='$updated_address', pass='$updated_password' WHERE id='$user_id'";


    $query_run = mysqli_query($con, $update_query);
    header("Location: account.php?user_id=" . $user_id);
    exit();
    // // Include password update only if a new password is provided
    // if (!empty($updated_password)) {
    //     $update_query .= ", pass='$updated_password'";
    // }
    // $update_query .= " WHERE id='$user_id'";

    // if (mysqli_query($con, $update_query)) {
    //     echo "<script>alert('Profile updated successfully!');</script>";
    //     // Refresh to fetch updated data
    //     header("Location: account.php?user_id=" . $user_id);
    //     exit();
    // } else {
    //     echo "<script>alert('Error updating profile.');</script>";
    // }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <div id="page" class="site">
        <header>
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                <li><a href="index.php#featuredproduct">Featured Products</a></li>
                                
                            </ul>
                        </div>
                        <div class="right">
                        <ul class="flexitem main-links">
                                
                                <?php
                                    if(isset($_SESSION['user_logged_in'])) { ?>
                                        
                                        <li><a href="account.php?user_id=<?php echo $_SESSION['user_id']; ?>"><?php
                                        echo $_SESSION['user_name'];
                                        ?></a></li>
                                        <li><a href="logout.php">Log out</a></li>
                                        
                                    <?php } else { ?>
                                        <li><a href="signup.php">Sign Up</a></li>
                                        <li><a href="account.php">My Account</a></li>
                                        <?php } ?>
                                    
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
                        <div class="left flexitem">
                            <a class="logo" href="index.php">
                                <img src="'./assets/logo\ ukGlam.png'" alt="">
                            </a>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="has-child">
                                        <a href="#">Cetagory
                                            <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div>
                                        </a>
                                        <div class="mega">
                                            <div class="container">
                                                <div class="wrapper">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                        <h4>Skin Care</h4>
                                                            <ul>
                                                                <li><a href="serum.php">Serum</a></li>
                                                                <li><a href="sunscreen.php">Sunscreen</a></li>
                                                                <!-- <li><a href="#">Toner</a></li>
                                                                <li><a href="#">Lip balm</a></li>
                                                                <li><a href="#">Eye cream</a></li>
                                                                <li><a href="#">Face mask</a></li>
                                                                <li><a href="#">Moisturizer & Cream</a></li>
                                                                <li><a href="#">Facewash & Cleanser</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Hair Care</h4>
                                                            <ul>
                                                                <li><a href="shampoo.php">Shampoo</a></li>
                                                                <li><a href="Conditioner_&_Treatment.php">Conditioner & Treatment</a></li>
                                                                <!-- <li><a href="#">Hair serum</a></li>
                                                                <li><a href="#">Hair mask</a></li>
                                                                <li><a href="#">Hair oil</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Body Care</h4>
                                                            <ul>
                                                                <li><a href="soap.php">Soap</a></li>
                                                                <li><a href="bodywash.php">Body wash</a></li>
                                                                <!-- <li><a href="#">Body scrub</a></li>
                                                                <li><a href="#">Hair removal</a></li>
                                                                <li><a href="#">Body oil</a></li>
                                                                <li><a href="#">Fragrance</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Accessories</h4>
                                                            <ul>
                                                                <li><a href="skincare.php">Skin care accessories</a></li>
                                                                <li><a href="b_accessories.php">Body care accessories</a></li>
                                                                <!-- <li><a href="#">Hair care accessories</a></li>
                                                                <li><a href="#">Bath accessories</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- <li><a href="#">On Sale</a></li>
                                    <li> -->
                                        <a href="arrival.php">New Arrival
                                            
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Event
                                            <div class="fly-item"><span>New!</span></div>
                                        </a>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <!-- <li class="mobile-hide"><a href="#">
                                    <div class="icon-large"><i class="ri-heart-line"></i></div>
                                    <div class="fly-item"><span class="item-number">0</span></div>
                                    </a>
                                </li> -->
                                <li><a href="#" class="cart">
                                    <div class="icon-large">
                                        <a href="cart.php">
                                            <i class="ri-shopping-cart-line"></i>
                                            
                                        </a>
                                    </div>
                                    <!-- <div class="icon-text">
                                        <div class="mini-text">Total</div>
                                        <div class="cart-total">TK0.00</div>
                                    </div> -->
                                    </a>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="right">
                            <!-- <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" placeholder="Search for products">
                                    <button type="submit">Search</button>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main  style="display: flex;">
            <div class="profile-header" style="width: 30%;">
                <img src="img.jpg" alt="" width="">        
            </div> 
            <div class="profile-container">
                <h2 style="font-size: 86px; font-weight: bold; color: #007bff;">Profile Information</h2>
                <div id="profile-info" style="text-align: center; padding: 20px; border-radius: 10px;">
                    <div class="profile-field" style="margin: 20px 0;">
                        <i class="ri-user-3-line" style="font-size: 35px; color: #007bff; margin-right: 10px;"></i>
                        <strong>Name:</strong> 
                        <span id="name" style="font-size: 26px; font-weight: lighter; color: #555;">
                            <?php echo $first_name . ' ' . $last_name; ?>
                        </span>
                    </div>
                    <div class="profile-field" style="margin: 20px 0;">
                        <i class="ri-mail-line" style="font-size: 35px; color: #007bff; margin-right: 10px;"></i>
                        <strong>Email:</strong> 
                        <span id="email" style="font-size: 26px; font-weight: lighter; color: #555;">
                            <?php echo $user_mail; ?>
                        </span>
                    </div>
                    <div class="profile-field" style="margin: 20px 0;">
                        <i class="ri-phone-line" style="font-size: 35px; color: #007bff; margin-right: 10px;"></i>
                        <strong>Phone Number:</strong> 
                        <span id="phone" style="font-size: 26px; font-weight: lighter; color: #555;">
                            <?php echo $user_num; ?>
                        </span>
                    </div>
                    <div class="profile-field" style="margin: 20px 0;">
                        <i class="ri-map-pin-line" style="font-size: 35px; color: #007bff; margin-right: 10px;"></i>
                        <strong>Address:</strong> 
                        <span id="address" style="font-size: 26px; font-weight: lighter; color: #555;">
                            <?php echo $user_address; ?>
                        </span>
                    </div>
                </div>

                <div id="profile-edit" style="display: none; margin: auto; width:70%;">
                    <form method="POST" action="account.php?user_id=<?php echo $user_id; ?>" style="margin-left:0;">
                        <div class="form-group">
                            <label for="edit-fname">First Name:</label>
                            <input type="text" id="edit-fname" name="fname" value="<?php echo $first_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit-lname">Last Name:</label>
                            <input type="text" id="edit-lname" name="lname" value="<?php echo $last_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit-num">Phone Number:</label>
                            <input type="tel" id="edit-num" name="num" value="<?php echo $user_num; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit-mail">Email:</label>
                            <input type="email" id="edit-mail" name="mail" value="<?php echo $user_mail; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit-address">Address:</label>
                            <input type="text" id="edit-address" name="address" value="<?php echo $user_address; ?>">
                        </div>
                        <div class="form-group">
                            <label for="edit-pass">Change Password:</label>
                            <input type="password" id="edit-pass" name="pass" placeholder="Enter new password">
                        </div>
                        <button type="submit" id="save-button" class="save-button" name="s_signup" style="display: block;">Save Changes</button>
                    </form>
                </div>

                <button type="button" id="edit-button" class="edit-button" onclick="toggleEdit()">Edit Profile</button>
            </div>

        </main>
        <style>
            #profile-info {
                text-align: center;
                padding: 20px;
                border-radius: 10px;
                /* background: linear-gradient(135deg, #f0f4ff, #e6f7ff); */
                /* box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); */
                margin-bottom: 20px;
            }

            #profile-info h2 {
                font-size: 36px;
                font-weight: bold;
                color: #794afa;
                margin-bottom: 20px;
            }

            .profile-field {
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 20px 0;
                font-size: 35px;
            }

            .profile-field i {
                font-size: 24px;
                color: #007bff;
                margin-right: 10px;
            }

            .profile-field strong {
                margin-right: 5px;
                color: #333;
                font-weight: bold;
            }

            .profile-field span {
                color: #555;
            }

            .profile-header{
                z-index: 9999;
                margin-left: 8% !important;
            }

            .profile-header>img{
                margin-top: 27%;
                width: 400px !important;
                height: 400px !important;
                border-radius: 50% !important;
                right: 0;
                padding: 50px;
                background: #fff;
                border: 2px solid black;
            }

            .profile-container {
                margin-left: -16% !important;
                margin: 10px auto;
                padding: 20px;
                background: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border: 1px solid black;
            }

            .profile-container h1 {
                text-align: center;
                color: #333;
                margin-bottom: 20px;
            }

            p {
                font-size: 26px;
                margin-bottom: 10px;
                color: #555;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                font-size: 14px;
                font-weight: bold;
                margin-bottom: 5px;
                color: #555;
            }

            input {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 16px;
            }

            input:focus {
                border-color: #007bff;
                outline: none;
            }

            button {
                width: 100%;
                padding: 12px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }

            .save-button {
                background-color: #28a745;
            }

            .save-button:hover {
                background-color: #218838;
            }

            .edit-button {
                background-color: #ff6b6b;
                margin-top:10%;
            }

            .edit-button:hover {
                background-color: #453c5c;
            }
        </style>

<footer class="section-p1">
            <div class="col">
                <img src="assets/logo ukGlam.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address: </strong> NITER, Nayarhat, Savar, Dhaka, Bangladesh</p>
                <p><strong>Phone: </strong> +880 1848374076</p>
                <p><strong>Hours: </strong> 9:00am - 9:00pm, Mon - Fri</p>
                <div class="follow">
                    <h4>Follow US</h4>
                    <div class="icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About Us</h4>
                <a href="#">About Us</a>
                <a href="#">Deliver Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign In</a>
                <a href="cart.php">View Cart</a>
                <a href="#">Help</a>
            </div>
            <div class="col install">
                <p>Secured Payment Gateway</p>
                <img src="assets/pay.png" alt="">
            </div>

            
        </footer>
        <div class="copyright">
                <p>2024, Barnali-Farzana - Project Work</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>

console.log("User ID: <?php echo isset($user_id) ? $user_id : 'Not Set'; ?>");

const editButton = document.getElementById("edit-button");
const saveButton = document.getElementById("save-button");
const profileInfo = document.getElementById("profile-info");
const profileEdit = document.getElementById("profile-edit");

// Toggle between profile view and edit mode
editButton.addEventListener("click", () => {
    profileInfo.style.display = "none"; // Hide profile text
    profileEdit.style.display = "block"; // Show editable inputs
    editButton.style.display = "none"; // Hide Edit button
    saveButton.style.display = "block"; // Show Save button
});

// Save profile changes
saveButton.addEventListener("click", () => {
    profileInfo.style.display = "block"; // Show profile text
    profileEdit.style.display = "none"; // Hide editable inputs
    editButton.style.display = "block"; // Show Edit button
    saveButton.style.display = "none"; // Hide Save button
});

// Helper function for toggling (optional)
function toggleEdit() {
    profileInfo.style.display = "none";
    profileEdit.style.display = "block";
    editButton.style.display = "none";
}


    </script>
</body>
</html>