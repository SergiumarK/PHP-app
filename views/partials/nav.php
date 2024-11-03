<section id="header">
    <a href="#"><img src="./img/products/logo.png" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="/Cara/" class="<?= urlIs('/Cara/') ? 'active' : '' ?>">Home</a></li>
            <li><a href="/Cara/products.php" class="<?= urlIs('/Cara/products.php') ? 'active' : '' ?>">Shop</a></li>
            <li><a href="/Cara/blog.php" class="<?= urlIs('/Cara/blog.php') ? 'active' : '' ?>">Blog</a></li>
            <li><a href="/Cara/about.php" class="<?= urlIs('/Cara/about.php') ? 'active' : '' ?>">About</a></li>
            <li><a href="/Cara/contact.php" class="<?= urlIs('/Cara/contact.php') ? 'active' : '' ?>">Contact</a></li>
            <li id="lg-bag"><a href="/Cara/cart.php" class="<?= urlIs('/Cara/cart.php') ? 'active' : '' ?>"><i class="fa-solid fa-bag-shopping"></i></a></li>
            <a href="#"><i id="close" class="fa-solid fa-x"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fa-solid fa-bars"></i>
    </div>
</section>