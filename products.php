<?php require('./head.php'); ?>

<?php require('./components/product-banner.php'); ?>
<main class="container mt-x pb-3">
  <?php 
    require('./components/filters.php');
    require('./components/product-cards.php');
  ?>
</main>

<?php require('./components/footer.php') ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>