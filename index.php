<?php require('./head.php'); ?>
<!-- <img src="./assets/img/fondo.png" alt="" class="fondo"> -->
<span class="nft-bg">NFT</span>
<div class="orb"></div>
<main class="container py-3">
  <?php 
    require('./components/hero.php');
    require('./components/related-tokens.php');
    require('./components/category-banner.php');
    require('./components/artists.php');
    require('./components/modal.php');
    require('./components/cart-modal.php');
  ?>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php require('./components/footer.php'); ?>