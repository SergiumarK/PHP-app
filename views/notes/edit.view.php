<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>



<section id="form-details">
    <form method="POST" action="/Cara/note">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">

        <label for="body">Description</label>
        <br>
        <div>
            <textarea 
                name="body" 
                id="body" 
                placeholder="New Note..."
                ><?= $note['body'] ?>
            </textarea>

            <?php if (isset($errors['body'])): ?>
                <p><?= $errors['body'] ?></p>
            <?php endif; ?>
        </div>
        <div>
            <button class="normal" type="button" onclick="window.location.href='/Cara/notes'">Cancel</button>

            <button class="normal" type="submit">Update</button>
        </div>
    </form>
</section>

<!-- footer -->
<?php require base_path('views/partials/footer.php') ?>