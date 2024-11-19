<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>

<section id="hero">
    <h4>Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome to the main page</h4>
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off</p>
    <button>Shop now</button>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="./img/features/f1.png" alt="">
        <h6>Free Shopping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f2.png" alt="">
        <h6>Online Order</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f3.png" alt="">
        <h6>Save Money</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f4.png" alt="">
        <h6>Promotions</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f5.png" alt="">
        <h6>Happy Sell</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f6.png" alt="">
        <h6>F24/7 Support</h6>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Colection New Modern Design</p>
    <div class="pro-container">
        <?php foreach ($products as $product): ?>
            <div class="pro" onclick="window.location.href=''">
                <a href="/Cara/product?id=<?= $product['id'] ?>">
                    <img src="<?= $product['img'] ?>" alt="">
                </a>
                <div class="des">
                    <span><?= $product['title'] ?></span>
                    <h5><?= $product['description'] ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?= $product['price'] ?></h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
        <?php endforeach; ?>
        <div class="pro">
            <img src="./img/products/f2.jpg" alt="">
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
            <img src="./img/products/f3.jpg" alt="">
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
            <img src="./img/products/f4.jpg" alt="">
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
            <img src="./img/products/f5.jpg" alt="">
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
            <img src="./img/products/f6.jpg" alt="">
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
            <img src="./img/products/f7.jpg" alt="">
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
            <img src="./img/products/f8.jpg" alt="">
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

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% off</span> - All t-shirt & Accessories</h2>
    <button class="normal">Explore more</button>
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
        <div class="pro">
            <img src="./img/products/n5.jpg" alt="">
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
            <img src="./img/products/n6.jpg" alt="">
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
            <img src="./img/products/n7.jpg" alt="">
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
            <img src="./img/products/n8.jpg" alt="">
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

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at cara</span>
        <button class="white">Learn more</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>Lorem ipsum dolor, sit amet consectetur adipisicing.</span>
        <button class="white">Collection</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>SEASON SALE</h2>
        <h3>Winter Collection -50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring / Summer 2024</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New Trandy Prints</h3>
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

<?php require 'partials/footer.php' ?>


