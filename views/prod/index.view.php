<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php')?>

<section id="product1" class="section-p1">
    <div class="pro-container">
    <?php foreach ($products as $product): ?>
        <div class="pro" onclick="window.location.href=''">
            <a href="/Cara/product?id=<?= $product['id'] ?>">
            <img src="/public/uploads/<?= $product['img'] ?>" alt="">
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
            <img src="../img/products/f2.jpg" alt="">
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
            <img src="../img/products/f3.jpg" alt="">
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
            <img src="../img/products/f4.jpg" alt="">
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
            <img src="../img/products/f5.jpg" alt="">
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
            <img src="../img/products/f6.jpg" alt="">
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
            <img src="../img/products/f7.jpg" alt="">
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
            <img src="../img/products/f8.jpg" alt="">
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
            <img src="../img/products/n1.jpg" alt="">
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
            <img src="../img/products/n2.jpg" alt="">
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
            <img src="../img/products/n3.jpg" alt="">
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
            <img src="../img/products/n4.jpg" alt="">
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
            <img src="../img/products/n5.jpg" alt="">
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
            <img src="../img/products/n6.jpg" alt="">
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
            <img src="../img/products/n7.jpg" alt="">
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
            <img src="../img/products/n8.jpg" alt="">
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

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
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

<?php require base_path('views/partials/footer.php' )?>

<script src="/script.js"></script>