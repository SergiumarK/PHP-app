<section id="header">
    <a href="/Cara/"><img src="../img/products/logo.png" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="/Cara/" class="<?= urlIs('/Cara/') ? 'active' : '' ?>">Home</a></li>
            <li><a href="/Cara/products" class="<?= urlIs('/Cara/products') ? 'active' : '' ?>">Shop</a></li>
            <li><a href="/Cara/blog" class="<?= urlIs('/Cara/blog') ? 'active' : '' ?>">Blog</a></li>
            <li><a href="/Cara/about" class="<?= urlIs('/Cara/about') ? 'active' : '' ?>">About</a></li>
            <li><a href="/Cara/notes" class="<?= urlIs('/Cara/notes') ? 'active' : '' ?>">Notes</a></li>
            <li><a href="/Cara/contact" class="<?= urlIs('/Cara/contact') ? 'active' : '' ?>">Contact</a></li>
            <li id="lg-bag"><a href="/Cara/cart" class="<?= urlIs('/Cara/cart') ? 'active' : '' ?>"><i
                        class="fa-solid fa-bag-shopping"></i></a></li>
            <a href="#"><i id="close" class="fa-solid fa-x"></i></a>

            <li id="lg-bag"><?php if ($_SESSION['user'] ?? false): ?>
                    <a href="#"><i class="fa-solid fa-user"></i></a>
                <?php else: ?>
                    <a href="/Cara/register" class="<?= urlIs('/Cara/register') ? 'active' : '' ?>">Register</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fa-solid fa-bars"></i>
    </div>

</section>