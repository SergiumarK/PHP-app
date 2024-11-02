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
        <h2>#let's_talk</h2>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Get in Touch</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>lorem@ipsum.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>contact@exaple.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>Lorem ipsum dolor sit amet.</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42992.79375500079!2d27.4407781189175!3d47.66403264483471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cb487dc398c7e1%3A0x415c3e896d452774!2z0KfRg9GH0YPQu9GPLCDQnNC-0LvQtNC-0LLQsA!5e0!3m2!1sru!2s!4v1707510605288!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details" >
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="email">
            <input type="text" placeholder="subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br>Phone: + 000 123 456 44 66 <br> Email:lorem@lorem.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>Michael Tailor</span> Senior Marketing Manager <br>Phone: + 000 123 456 44 66 <br> Email:lorem@lorem.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Madison Ivy</span> Senior Marketing Manager <br>Phone: + 000 123 456 44 66 <br> Email:lorem@lorem.com</p>
            </div>
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