<?php require('./head.php'); ?>
  
<main  class="container form-borde ">
 <section class="row">

     
     <form action="get">
        <fieldset>
            <legend>Agregar producto</legend>
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input name="nombre" type="text">
            </div>

            <div class="mb-3">
            <label for="precio" class="form-label">Precio inicial</label>
            <input name="precio" type="text">
            </div>
             <div class="mb-3">
             <label for="artistas" class="form-label">Artistas</label>
            <input name="artistas" type="text">
             </div>
            
             <div class="mb-3">
            <label for="Sku" class="form-label">SKU</label>
            <input name="Sku" type="text">
            </div>
        <div class="mb-3">
      <label for="disabledSelect" class="form-label">Elige categoria</label>
      <select  class="form-select">
        <option>c</option>
        <option>a</option>
        <option>t</option>
        <option>e</option>
      </select>
    </div>
        <input type="text">
        </fieldset>
        
     </form>
 </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php require('./components/footer.php'); ?>