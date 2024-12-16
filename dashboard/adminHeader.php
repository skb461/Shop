<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
 
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UKGlam</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
        <link rel="stylesheet" href="./assets/css/admin_style.css">
    </head>
    <body>
        <div id="page" class="site">
            
            <main>
                    <!-- nav -->
                <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #453c5c;">
                    
                    <a class="navbar-brand ml-5" href="./adminn.php">
                        <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
                    </a>
                    
                    <ul class="lines">
                    <a class="admin_home" href="../index.php">Home</a>
                    
                    </ul>
                    
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                    
                    
                    
                    <!-- <div class="user-cart">  
                        <?php           
                        if(isset($_SESSION['user_id'])){
                        ?>
                        <a href="" style="text-decoration:none;">
                            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
                        </a>
                        <?php
                        } else {
                            ?>
                            <a href="" style="text-decoration:none;">
                                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
                            </a>

                            <?php
                        } ?>
                    </div> -->
                    
                    
                </nav>
            </main>  
        </div>
    </body>
</html>
