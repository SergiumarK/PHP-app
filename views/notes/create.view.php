<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php')?>



<section id="form-details">
    <form method="POST">
        <label for="body">Description</label>
        <br>
        <div>
            <textarea 
                name="body" 
                id="body" 
                placeholder="New Note..."
                
            ><?= $_POST['body'] ?? '' ?></textarea>

            <?php if (isset($errors['body'])) : ?>
                <p><?= $errors['body'] ?></p>
            <?php endif ; ?>
        </div>
        <button class="normal" type="submit">Save</button>
    </form>
</section>

<!-- footer -->
<?php require base_path('views/partials/footer.php' )?>

<script src="/script.js"></script>