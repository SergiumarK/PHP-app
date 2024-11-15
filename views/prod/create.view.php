<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>



<section id="form-details">
    <form method="POST" enctype="multipart/form-data">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Product Title" value="<?= $_POST['title'] ?? '' ?>">
        <?php if (isset($errors['title'])) : ?>
            <p><?= $errors['title'] ?></p>
        <?php endif; ?>

        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Product Price" value="<?= $_POST['price'] ?? '' ?>">

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Description..."><?= $_POST['description'] ?? '' ?></textarea>
        <?php if (isset($errors['description'])) : ?>
            <p><?= $errors['description'] ?></p>
        <?php endif; ?>

        <label for="product_details">Product Details</label>
        <textarea name="product_details" id="product_details" placeholder="Product details..."><?= $_POST['product_details'] ?? '' ?></textarea>

        <label for="img">Product Image</label>
        <input type="file" name="img" id="img">

        <button class="normal" type="submit">Save</button>
    </form>
</section>

<!-- footer -->
<?php require base_path('views/partials/footer.php') ?>

<script src="/script.js"></script>