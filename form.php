<?php require('./head.php'); ?>
  
<main  class="container form-borde ">
 <section class="row">

     
     <form action="get">
        <fieldset>
            <legend class="legend-class mx-5 my-3 ">Agregar producto</legend>
            <div class=" mx-5 ">
                <label for="nombre" class="form-label form-label_text">Nombre</label>
                <input name="nombre" type="text" class="form-control input_bordes">
            </div>

            <div class="mx-5">
            <label for="precio" class="form-label form-label_text">Precio inicial</label>
            <input name="precio" type="number" class="form-control input_bordes"  >
            </div>

            <div class="mx-5">
            <label for="disabledSelect" class="form-label form-label_text ">Elige tu artista</label>
                <select   class="form-select input_bordes">
                <option>Selecciona tu artista</option>
                <option>c</option>
                <option>a</option>
                <option>t</option>
                <option>e</option>
                </select>
                </div>
             
             <div class="mx-5">
            <label for="Sku" class="form-label form-label_text">SKU</label>
            <input name="Sku" type="text" class="form-control input_bordes">
            </div>
        <div class="mx-5">
      <label for="disabledSelect" class="form-label form-label_text">Elige categoria</label>
      <select  class="form-select input_bordes">
        <option >Seleccione categoria</option>
        <option>c</option>
        <option>a</option>
        <option>t</option>
        <option>e</option>
      </select>
    </div> 
         <div class="mx-5">
            <label for="" class="form-label_text">Descripcion</label>
         <textarea class="form-control input_bordes" name="" id="" cols="30" rows="10"></textarea>
         </div>
        <div class="mx-5 d-flex justify-content-center my-4">
            <input type="submit" class="form_boton_agregar px-4 py-1 input_bordes" value="Agregar">
        </div>
        </fieldset>
     </form>
 </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php require('./components/footer.php'); ?>