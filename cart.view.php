<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronout T-Shirt</td>
                    <td>$118.54</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.54</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronout T-Shirt</td>
                    <td>$118.54</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.54</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronout T-Shirt</td>
                    <td>$118.54</td>
                    <td><input type="number" value="1"></td>
                    <td>$118.54</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter your coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 335</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 335</strong></td>
                </tr>
            </table>
            <button class="normal">Preceed to checkout</button>
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