<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php')?>



<section class="section-p1 section-m1">
    <div class="details">
        <div>
            <ul>
                <?php foreach ($notes as $note): ?>
                    <li>
                        <a href="/Cara/note?id=<?= $note['id'] ?>">
                            <?= htmlspecialchars($note['body']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <br>
            <br>

            <!-- <button onclick="window.location.href='notes/create'">Create note</button> -->
            <h3>
                <a href="notes/create">Create note -></a>
            </h3>
        </div>
    </div>
</section>

<!-- footer -->
<?php require base_path('views/partials/footer.php')?>

