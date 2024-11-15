<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php')?>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="/uploads/<?= $product['img'] ?>" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="/img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6><?= $product['title'] ?></h6>
            <h4><?= $product['description'] ?></h4>
            <h2><?= $product['price'] ?></h2>
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
            <span><?= $product['product_details'] ?></span>
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
    <?php require base_path('views/partials/footer.php')?>
        
    
</body>
</html>