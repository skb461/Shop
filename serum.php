<?php  
    include("db.php");
    
    $query = "SELECT * FROM `product` WHERE category_id='5'";

    $data01 = $con->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKGlam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
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
                                                                <li><a href="#">Serum</a></li>
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
                                                                <!-- <li><a href="Conditioner_&_Treatment.php">Conditioner & Treatment</a></li> -->
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
                            <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" placeholder="Search for products">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
        <div style="display: flex; flex: 1 1 210px; flex-wrap: wrap; margin: auto; justify-content: center;">
                <?php
                while($d01 = mysqli_fetch_assoc($data01)){
                ?>
                    <div class="card" style="width: 400px;">
                    <a href="details.php?product_id=<?php echo $d01["product_id"]; ?>&name=serum">
                            <img class="image" src="dashboard/<?php echo $d01["product_img"]; ?>" alt="" />
                        </a>    
                        <div class="caption">
                            <p class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </p>
                            <p class="product-name"><?php echo $d01["product_name"]; ?></p>
                            <p class="price"><br>TK <?php echo $d01["price"]; ?></br></p>
                        </div>
                        <button class="add">Add to cart</button>
                    </div>
                <?php
                }
                ?>
            </div>

            <!-- <div class="card">
                    <img class="image" src="assets/slider/serum.jpg" alt=""></img>
                <div class="caption">
                    <p class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="product-name">Anua Peach 70 Niacin Serum</p>
                    <p class="price"><br>Tk 700</br></p>
                </div>
                <button class="add">Add to cart</button>
            </div> -->
        </main>

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
    <script src="script.js"></script>
</body>
</html>