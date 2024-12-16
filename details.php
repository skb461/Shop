<?php
    session_start();  
    include("db.php");
    $p_name = $_GET['product_id'];
    // $query = "SELECT * FROM $p_name";
    $query = "SELECT * FROM `product` WHERE product_id='$p_name' ";
    

    $data01 = $con->query($query);
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKGlam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
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
            <!-- <?php
            echo $_GET['product_id']
            ?> -->
        <main>
          <section id="pro_details" class="section-p1">
            
            <!-- <img src="assets/feature/roller.jpg" width="100%" id="big-img" alt=""> -->
            <?php
                while($d01 = mysqli_fetch_assoc($data01)){
                    if($d01['product_id'] === $_GET['product_id']){
                        
                    
                ?>
                    <div class="pro-img" >
                            <img class="image" src="dashboard/<?php echo $d01["product_img"]; ?>" alt="" />                         
                        <div class="caption">    
                            <a href="details.php">
                                <p class="product-name"></p>
                            </a>                           
                            <p class="price"><br></br></p>
                        </div>
                    </div>  
                    <div class="p-details">
                    
                        <h3><?php echo $d01["product_name"]; ?></h3>
                        <h2>TK <?php echo $d01["price"]; ?></h2>
                        <form method='POST' style="margin-left: 0 !important" action="add.php?p_id=<?php echo $_GET['product_id'] ?>&name=<?php echo $d01["product_name"]; ?>&p_img=<?php echo $d01["product_img"]; ?>&p_price=<?php echo $d01["price"]; ?>">
                        <input type="number" value="1" name="quantity">
                        <button type="submit" >Add To Cart</button>
                        </form>
                        
                        
                        <h4>Product Details</h4>
                        <span><?php echo $d01["product_desc"]; ?></span>

                    </div>  
                <?php
                    }
                }
                ?>
            
            <!-- <div class="p-details">
                <h6>Category/Skin care accessories</h6>
                <h3>Facial Message</h3>
                <h2>TK 200</h2>
                <input type="number" value="1">
                <a href="cart.php"><button>Add To Cart</button></a>
                
                <h4>Product Details</h4>
                <span>1.100% natural jade stone, without any chemicals or irritants.
                    2.Variety of trace elements in jade are beneficial to skin, help speed up blood circulation, promote metabolism, increase enzyme activity, make your skin compact, fine and shiny.
                    3.Improve wrinkles, dark circles, and bags under the eyes, help beauty products penetrate deeper into the skin.
                    4.Good to relax your skin muscles and feel more tight.</span>

            </div> -->
            
            </section>

            <section class="section-p2">
                
                <div class="title">
                    <h1>More Products</h1>
                        <!-- <p>
                            <span>&#139;</span>
                            <span>&#155;</span>
                        </p> -->
                </div>
            <section class="s2">
            <div class="slide_product">
                    <picture>
                        <img src="assets/products/all-cream.jpg" alt="">
                    </picture>
                    <div class="slide_detail">
                        <p>
                            <b>Product One</b><br>
                            <a class="link" href="arrival.php">New Arrival</a><br>
                            <b>TK 200</b>
                        </p>
                        
                    </div>
                    <div class="slide_button">
                        <p class="slide_star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </p>
                        <a class="slide_btn" href="cart.php"><button>Add To Cart</button></a>
                    </div>
                </div> 
                <div class="slide_product">
                    <picture>
                        <img src="assets/bodywash/bodywash2.jpg" alt="">
                    </picture>
                    <div class="slide_detail">
                        <p>
                            <b>Crystal</b><br>
                            <a class="link" href="bodywash.php">Body Care Accessories</a><br>
                            <b>TK 1000</b>
                        </p>
                        
                    </div>
                    <div class="slide_button">
                        <p class="slide_star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </p>
                        <a class="slide_btn" href="cart.php"><button>Add To Cart</button></a>
                    </div>
                </div>
                <div class="slide_product">
                    <picture>
                        <img src="assets/soap/soap1.jpg" alt="">
                    </picture>
                    <div class="slide_detail">
                        <p>
                            <b>AMIXOLOGY SOAPS</b><br>
                            <a class="link" href="soap.php">Soap</a><br>
                            <b>TK 750</b>
                        </p>
                        
                    </div>
                    <div class="slide_button">
                        <p class="slide_star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </p>
                        <a class="slide_btn" href="cart.php"><button>Add To Cart</button></a>
                    </div>
                </div>
                <div class="slide_product">
                    <picture>
                        <img src="assets/sunscreen/Focallure.png" alt="">
                    </picture>
                    <div class="slide_detail">
                        <p>
                            <b>FOCALLURE</b><br>
                            <a class="link" href="sunscreen.php">Sunscreen</a><br>
                            <b>TK 1000</b>
                        </p>
                        
                    </div>
                    <div class="slide_button">
                        <p class="slide_star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </p>
                        <a class="slide_btn" href="cart.php"><button>Add To Cart</button></a>
                    </div>
                </div>
                <div class="slide_product">
                    <picture>
                        <img src="assets/serum/Renne.jpg" alt="">
                    </picture>
                    <div class="slide_detail">
                        <p>
                            <b>RENNE</b><br>
                            <a class="link" href="serum.php">Serum</a><br>
                            <b>TK 1650</b>
                        </p>
                        
                    </div>
                    <div class="slide_button">
                        <p class="slide_star">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </p>
                        <a class="slide_btn" href="cart.php"><button>Add To Cart</button></a>
                    </div>
                </div>
                
            </section>    
                   
            </section>
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
    
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    