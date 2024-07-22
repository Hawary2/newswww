<?php
require 'products/cutes.php'; // Assuming this includes your database connection or query function
$cute = query("SELECT * FROM products LIMIT 27"); // Example query to fetch products
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brouva</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <style>
        .product-image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="super_container">
    <!-- Header -->
    <header class="header">
        <div class="header_inner d-flex flex-row align-items-center justify-content-start">
            <div class="logo"><a href="#">brouva</a></div>
            <nav class="main_nav">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="categories.html">clothes</a></li>
                    
                </ul>
            </nav>
            <div class="header_content ml-auto">
                <div class="search header_search">
                    <form action="#">
                        <input type="search" class="search_input" required="required">
                        <button type="submit" id="search_button" class="search_button"><img src="images/magnifying-glass.svg" alt=""></button>
                    </form>
                </div>
                <div class="shopping">
                    <!-- Cart -->
                    
                    <!-- Star -->
                   
                    <!-- Avatar -->
                    
            </div>
          
    </header>

    <!-- Menu -->
    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container">
            <div class="menu_close">
                <div></div><div></div>
            </div>
        </div>
        <div class="logo menu_mm"><a href="#">brouva</a></div>
        <div class="search">
            <form action="#">
                <input type="search" class="search_input menu_mm" required="required">
                <button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="#">home</a></li>
                <li class="menu_mm"><a href="#">clothes</a></li>
                <li class="menu_mm"><a href="#">accessories</a></li>
                <li class="menu_mm"><a href="#">lingerie</a></li>
                <li class="menu_mm"><a href="#">contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Home -->
    <div class="home">
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                <!-- Home Slider Item (Example shown once, modify as needed) -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="home_slider_content_inner">
                            <div class="home_slider_subtitle">Promo Prices</div>
                            <div class="home_slider_title">New Collection</div>
                        </div>
                    </div>
                </div>
                <!-- Repeat other slider items as needed -->
            </div>
            <!-- Home Slider Nav -->
            <div class="home_slider_next d-flex flex-column align-items-center justify-content-center">
                <img src="images/arrow_r.png" alt="">
            </div>
            <!-- Home Slider Dots -->
            <div class="home_slider_dots_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_dots">
                                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                    <!-- Slider dots (modify as needed) -->
                                    <li class="home_slider_custom_dot active">01.<div></div></li>
                                    <li class="home_slider_custom_dot">02.<div></div></li>
                                    <li class="home_slider_custom_dot">03.<div></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo -->
    <div class="promo">
        <div class="container">
            <div class="row">
                <!-- PHP loop to display products -->
                <?php foreach ($cute as $product) : ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="product-image">
                                <img src="<?php echo $product['cover']; ?>" alt="<?php echo $product['title']; ?>">
                            </div>
                            <div class="product-info">
                                <h3><?php echo $product['title']; ?></h3>
                                <p><?php echo $product['description']; ?></p>
                                <div class="promo_link"><a href="<?php echo $product['buy_now_link']; ?>">Buy</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="footer_logo"><a href="#">brouva</a></div>
                    <nav class="footer_nav">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            
                        </ul>
                    </nav>
                    <div class="footer_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer_text">
                        <p>© 2024 brouva.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- JS Scripts -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
