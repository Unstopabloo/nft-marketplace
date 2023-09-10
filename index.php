<?php require('./head.php'); ?>

<main class="container py-3">
  <?php 
    require('./components/related-tokens.php');
    require('./components/category-banner.php');
    require('./components/artists.php');
    ?>
    <?php require('./components/modal.php'); ?>
    <?php require('./components/cart-modal.php') ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php require('./components/footer.php'); ?>

