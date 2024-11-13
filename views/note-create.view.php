<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

<?php require 'partials/banner.php' ?>



<section id="form-details">
    <form method="POST">
        <label for="body">Description</label>
        <br>
        <div>
            <textarea name="body" id="body" placeholder="New Note..."></textarea>
        </div>
        <button class="normal" type="submit">Save</button>
    </form>
</section>

<!-- footer -->
<?php require 'partials/footer.php' ?>