<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<!-- <?php require base_path('views/partials/banner.php') ?> -->



<section>
    <form action="/Cara/register" method="post">

        <div class="container1">
            <h2>Register for a new account</h2>
            <br>
            <br>
            <div>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>
                <?php if (isset($errors['email'])): ?>
                    <p><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>

            <div>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <?php if (isset($errors['password'])): ?>
                    <p><?= $errors['password'] ?></p>
                <?php endif; ?>
            </div>




            <button class="button1" type="submit">Register</button>
        </div>
    </form>
</section>

<!-- footer -->
<?php require base_path('views/partials/footer.php') ?>