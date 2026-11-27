            <form action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">
              <h3>Crear Producto</h3>

              <input type="hidden" name="id" value="<?= $producto?->id ?? "" ?>">

              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" value="<?= $producto?->nombre ?? "" ?>">

              <label for="marca">marca:</label>
              <select name="marca" id="marca">
                  <option value="">Seleccione una marca</option>
                  <?php foreach ($marca as $m): ?>
                      <option value="<?= $m->id ?>" <?= $m->id == $producto?->marca ? "selected" : "" ?>>
                          <?= $m->nombre ?></option>
                  <?php endforeach; ?>
              </select>

              <label for="precio">Precio:</label>
              <input type="text" name="precio" value="<?= $producto?->precio ?? "" ?>">

              <label for="costo">Costo:</label>
              <input type="text" name="costo" value="<?= $producto?->costo ?? "" ?>">

              <label for="cantidad">Cantidad:</label>
              <input type="text" name="cantidad" value="<?= $producto?->cantidad ?? "" ?>">
              <div id="cajaImagen">
                  <label for="imagen">Imagen:</label>
                  <?php if ($producto?->imagen != ""): ?>
                     <img src="assets/img/productos/<?= $producto->imagen ?>" 
                     class="w-25" id="img-imagen" alt="">
                      <button id="btn-cambiar" type="button">Cambiar Imagen</button>
                  <?php else: ?>
                      <input type="file" name="imagen" id="input-imagen">
                  <?php endif; ?>
              </div>
                  <button type="submit">Guardar</button>
          </form>

          <script>
            let btnCambiar = document.getElementById("btn-cambiar")
            let divImagen = document.getElementById("cajaImagen")
            let imgImagen = document.getElementById("img-imagen")

            btnCambiar.addEventListener("click", function(){
              imgImagen.style.display ="none"  
              btnCambiar.style.display ="none"
               const inputImagen = document.createElement("input") 
               inputImagen.className = "form-control"
               inputImagen.type = "file"
               inputImagen.name = "imagen"
               inputImagen.id = "input-imagen"
               divImagen.appendChild(inputImagen)
          })      
          </script>