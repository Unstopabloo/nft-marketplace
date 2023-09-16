<section id="products" class="row row-cols-5 py-5 mt-5">
  <div id="loader" class="container mx-auto d-flex justify-content-center">
    <div class="jelly-triangle">
      <div class="jelly-triangle__dot" ></div>
        <div class="jelly-triangle__traveler" ></div>
    </div>

    <svg width="0" height="0" class="jelly-maker">
      <defs>
        <filter id="uib-jelly-triangle-ooze">
          <feGaussianBlur
            in="SourceGraphic"
            stdDeviation="7.3"
            result="blur"
          />
          <feColorMatrix
            in="blur"
            mode="matrix"
            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
            result="ooze"
          />
          <feBlend in="SourceGraphic" in2="ooze" />
        </filter>
      </defs>
    </svg>
  </div>
</section>

<div id="load-more-container" class="d-flex justify-content-center mt-4">
    <button id="load-more-button" class="btn btn-primary mx-auto">Ver más</button>
</div>

<?php require('./components/modal.php') ?>