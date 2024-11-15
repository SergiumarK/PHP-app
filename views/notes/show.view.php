<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>



<section class="section-p1 section-m1">
    <div class="details">
        <div>
            <h3>
                <a href="/Cara/notes">Go back to notes -></a>
            </h3>
            <br>
            <br>
            <ul>
                <li>
                    <?= htmlspecialchars($note['body']) ?>
                </li>
            </ul>
            <br>
            <br>
            <form action="" method="POST">
                
                <input type="hidden" name="id" value="<?= $note["id"] ?>">
                <button class="b-delete" type="submit">Delete</button>
            </form>
        </div>
    </div>
</section>

<!-- footer -->
<?php require base_path('views/partials/footer.php') ?>

<script src="/script.js"></script>