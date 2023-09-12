<section class="py-5">
  <h2 class="text-1 title-2 row py-5">Por categoria</h2>
  <article class="category-banner d-none d-md-flex">
    <a href="#" style="background-image: url('./assets/img/art1.png');"><span class="category-banner-title">Categoria</span></a>
    <a href="#" style="background-image: url('./assets/img/art2.png');"><span class="category-banner-title">Categoria</span></a>
    <a href="#" style="background-image: url('./assets/img/art3.png');"><span class="category-banner-title">Categoria</span></a>
    <a href="#" style="background-image: url('./assets/img/art4.png');"><span class="category-banner-title">Categoria</span></a>
    <a href="#" style="background-image: url('./assets/img/art5.png');"><span class="category-banner-title">Categoria</span></a>
    <a href="#" style="background-image: url('./assets/img/PRODUCT-IMAGE.png');"><span class="category-banner-title">Categoria</span></a>
  </article>
  <section class="splide splide-category d-block d-md-none" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide d-flex"><a href="#" class="w-100"><img class="object-fit-cover" src="./assets/img/art1.png" alt="img" width="100%"></a></li>
        <li class="splide__slide d-flex"><a href="#" class="w-100"><img class="object-fit-cover" src="./assets/img/art2.png" alt="img" width="100%"></a></li>
        <li class="splide__slide d-flex"><a href="#" class="w-100"><img class="object-fit-cover" src="./assets/img/art3.png" alt="img" width="100%"></a></li>
        <li class="splide__slide d-flex"><a href="#" class="w-100"><img class="object-fit-cover" src="./assets/img/art4.png" alt="img" width="100%"></a></li>
        <li class="splide__slide d-flex"><a href="#" class="w-100"><img class="object-fit-cover" src="./assets/img/art5.png" alt="img" width="100%"></a></li>
      </ul>
    </div>
  </section>
</section>

<script>
  document.addEventListener( 'DOMContentLoaded', function() {
      var splideCategory = new Splide( '.splide-category', {
        type   : 'loop',
        gap: '3rem',
        drag   : 'free',
        snap   : true,
        perPage: 1,
        perMove: 1,
        pagination: true,
      });

      splideCategory.mount();
    });
</script>