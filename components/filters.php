<section class="py-3 row">
  <div class="button-filters col-12 col-md-6">
    <h2 class="col-12 text-1">Filtrar por:</h2>
    <div class="row py-2">
      <div class="col-3 pe-1">
        <button id="by-menor" class="filter text-1 font-13">Precio menor</button>
      </div>
      <div class="col-3 pe-1">
        <button id="by-mayor" class="filter text-1 font-13">Precio mayor</button>
      </div>
      <div class="col-3 pe-1">
        <button id="by-alf" class="filter text-1 font-13">Alfabetico</button>
      </div>
      <div class="col-3 pe-1">
        <button id="clear" class="filter text-1 font-13">Limpiar filtros</button>
      </div>
    </div>
  </div>
  <form action="GET" class="col-12 col-md-6" >
    <div class="d-flex flex-column align-items-end">
      <span id="founds" class="text-1 col-12 pb-4 text-end">Encontrados: 15</span>
      <input id="input-filter" class="input-filter col-12 col-md-10" type="text" name="search" placeholder="Descubre más tokens...">
    </div>
  </form>
</section>