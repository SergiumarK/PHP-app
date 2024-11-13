<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php')?>



<section class="section-p1 section-m1">
    <div class="details">
        <div>
            <ul>

                <li>
                    <?= htmlspecialchars($note['body']) ?>
                </li>

            </ul>

            <br>
            <br>

            <!-- <button onclick="window.location.href='notes/create'">Create note</button> -->
            <h3>
                <a href="/Cara/notes">Go back to notes -></a>
            </h3>
        </div>
    </div>
</section>

<!-- footer -->
<?php require base_path('views/partials/footer.php')?>

<script src="/script.js"></script>