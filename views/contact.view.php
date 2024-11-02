<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

<?php
$heading = 'Contact Us';
require 'partials/banner.php' 
?>

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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42992.79375500079!2d27.4407781189175!3d47.66403264483471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cb487dc398c7e1%3A0x415c3e896d452774!2z0KfRg9GH0YPQu9GPLCDQnNC-0LvQtNC-0LLQsA!5e0!3m2!1sru!2s!4v1707510605288!5m2!1sru!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details">
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
            <img src="../img/people/1.png" alt="">
            <p><span>John Doe</span> Senior Marketing Manager <br>Phone: + 000 123 456 44 66 <br> Email:lorem@lorem.com
            </p>
        </div>
        <div>
            <img src="../img/people/2.png" alt="">
            <p><span>Michael Tailor</span> Senior Marketing Manager <br>Phone: + 000 123 456 44 66 <br>
                Email:lorem@lorem.com</p>
        </div>
        <div>
            <img src="../img/people/3.png" alt="">
            <p><span>Madison Ivy</span> Senior Marketing Manager <br>Phone: + 000 123 456 44 66 <br>
                Email:lorem@lorem.com</p>
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

<?php require 'partials/footer.php' ?>