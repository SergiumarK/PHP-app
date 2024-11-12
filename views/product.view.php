<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

<?php
require 'partials/banner.php';
?>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="./img/products/f1.jpg" width="100%" id="MainImg" alt="">
        
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="./img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6><?= $product['title'] ?></h6>
            <h4>Men's Fashion T-Shirt</h4>
            <h2>$139.00</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis at deserunt vero, repellat earum cupiditate ea. Praesentium corporis similique ad nisi unde necessitatibus ducimus ex harum aperiam magni, voluptates quae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dolor mollitia eum officia ipsam ea quia nobis, laborum, suscipit cupiditate voluptate. Tempora suscipit, qui voluptates porro eveniet saepe veritatis itaque!</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Colection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="./img/products/n1.jpg" alt="">
                <div class="des">
                    <span>Lorem.</span>
                    <h5>Lorem ipsum dolor sit.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/products/n2.jpg" alt="">
                <div class="des">
                    <span>Lorem.</span>
                    <h5>Lorem ipsum dolor sit.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/products/n3.jpg" alt="">
                <div class="des">
                    <span>Lorem.</span>
                    <h5>Lorem ipsum dolor sit.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="./img/products/n4.jpg" alt="">
                <div class="des">
                    <span>Lorem.</span>
                    <h5>Lorem ipsum dolor sit.</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
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
    <?php require 'partials/footer.php' ?>
        
    <script src="script.js"></script>
</body>
</html>