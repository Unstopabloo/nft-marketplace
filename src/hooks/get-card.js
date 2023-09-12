$(document).ready(() => {
  $.post('./src/db/queries.php?card=get_cards', (data) => {
    data = $.parseJSON(data)
    $.each(data, (key, value) => {
      const card = `
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center py-1 mb-5">
          <a href="#" data-id=${value.id} type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="openModal product-1 px-2">
            <header class="col-12 py-2">
              <h3 class="product-1-title font-20"># ${value.nombre}</h3>
            </header>
            <img class="col-12 product-card-img" loading="lazy" src="./assets/img/${value.sku}.webp" alt="Imagen de un token">
            <div class="w-100 py-3 d-flex">
              <h4 class="font-13 product-1-actual-bid w-75">Oferta Actual: <div class="ms-1 product-1-bid"><strong class="mt-1 font-10">${value.precio} ETH</strong></div></h4>
              <div class="w-25 d-flex justify-content-end align-items-center">
                <svg fill="#fffff2" height="1em" width="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.6 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
              </div>
            </div>
            <footer class="d-flex justify-content-between py-3">
              <button class="product-1-add">
                Agregar <svg fill="#fffff2" height="0.85em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg>
              </button>
            </footer>
          </a>
        </div>
      `
      $('#products').append(card)
    })
    $('.product-1').on('click', function () {
      $.post('./src/db/queries.php?card=modal', {
        product_id: $(this).data('id'),
      }).done((data, stage) => {
        data = $.parseJSON(data)
        const modalBody = `
          <div class="modal-dialog container modal-dialog-centered">
            <article class="modal-content antonio bg-2 text-1 p-1 p-md-5">
              <div class="modal-product p-3 p-md-4 container">
                <div class="row">
                  <img loading="lazy" class="modal-product-img col-md-6 col-12" src="./assets/img/${
                    data.sku
                  }.webp" alt="Card product image">
                  <div class="modal-product-content col-md-6 col-12">
                    <div class="modal-header row">
                      <span class="modal-artist col-11">Artista destacado</span>
                      <button type="button col-1" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                      <h2 class="modal-title title-2 col-12" id="exampleModalLabel"># ${
                        data.nombre
                      }</h2>
                    </div>
                    <div class="modal-body row mt-3">
                      <p class="col-12">
                        Cositas que dira el nft Cositas que dira el nft Cositas que dira el nft Cositas que dira el nft Cositas que dira el nft Cositas que dira el nft
                      </p>
                      <strong class="modal-price font-15 d-flex align-items-center gap-3 pt-2"><span id="price" class="badge">${
                        data.precio
                      } ETH</span> $${data.precio * 1600} USD</strong>
                    </div>
                    <div class="modal-footer row mt-4">
                      <button type="button" class="btn text-1 border col-4" data-bs-dismiss="modal">Comprar ahora</button>
                      <button type="button" class="btn text-1 border col-4">Hacer oferta</button>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        `
        $('#exampleModal').empty().append(modalBody).modal('show')
      })
    })
  })
})
