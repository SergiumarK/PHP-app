<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

<?php
require 'partials/banner.php';
?>



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
<?php require 'partials/footer.php' ?>