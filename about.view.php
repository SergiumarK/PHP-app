<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <!-- header -->
    <section id="header">
        <a href="#"><img src="img/products/logo.png" alt=""></a>
        <div>
        <ul id="navbar">
                <li><a class="active" href="index.view.php">Home</a></li>
                <li><a href="products.view.php">Shop</a></li>
                <li><a href="blog.view.php">Blog</a></li>
                <li><a href="about.view.php">About</a></li>
                <li><a href="contact.view.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.view.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#"><i id="close" class="fa-solid fa-x"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#know us</h2>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur nemo officia magnam perferendis nihil blanditiis aliquid in ex porro et, doloribus nostrum voluptates similique ipsa expedita explicabo error voluptate perspiciatis, commodi, labore adipisci dolores modi dolorem! Id maxime sint, voluptatibus accusamus reiciendis illo quaerat fuga ad natus consectetur nam suscipit soluta aspernatur optio nihil ratione quam hic amet labore facilis animi officia aliquid. Deserunt eveniet est consequatur a maxime velit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, natus. Commodi, quod doloribus? Molestias tempore dignissimos veritatis a earum rerum atque laboriosam. Asperiores velit provident explicabo laudantium saepe, deserunt animi!</p>
            <abbr title="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nesciunt nam necessitatibus?</abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, illum? Lorem ipsum dolor sit amet. Lorem, ipsum dolor.
            </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download our <a href="#">App</a> </h1>
        <div class="video"> 
            <video autoplay muted loop src="img/about/1.mp4"></video>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shopping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="news-letter" class="section-p1 section-m1">
        <div class="news-text">
            <h4>Sign Up for Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your E-mail address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <!-- footer -->
    <footer class="section-p1">
        <div class="col">
            <img src="img/products/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Lorem ipsum dolor sit amet. Lorem, ipsum.</p>
            <p><strong>Phone:</strong> +123 456 345 / (+234) 345 678 567.</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Private Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>

        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Whishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/play/app.jpg" alt="">
                <img src="img/play/play.jpg" alt="">
            </div>
            <p>Secure payment Gateways</p>
            <img src="img/play/pay.png" alt="">
        </div>
    </footer>
    
    <p class="copyright">Lorem ipsum dolor sit amet consectetur.</p>
        
    <script src="script.js"></script>
</body>
</html>