<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

<?php
require 'partials/banner.php' 
?>

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
                <td><img src="../img/products/f1.jpg" alt=""></td>
                <td>Cartoon Astronout T-Shirt</td>
                <td>$118.54</td>
                <td><input type="number" value="1"></td>
                <td>$118.54</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                <td><img src="../img/products/f1.jpg" alt=""></td>
                <td>Cartoon Astronout T-Shirt</td>
                <td>$118.54</td>
                <td><input type="number" value="1"></td>
                <td>$118.54</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                <td><img src="../img/products/f1.jpg" alt=""></td>
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

<?php require 'partials/footer.php' ?>