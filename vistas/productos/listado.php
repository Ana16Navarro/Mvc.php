      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">

<h1 class="text-center">Listados Productos</h1>
<div class="text-center mb-3">
  <a class="btn btn-primary" href="?c=producto&a=formulario">Agregaron</a>
</div>

<table class="table table-bordered text-center">
  <thead>
  <tr>      
      <th>ID</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Precio</th>
      <th>Costo</th>
      <th>Cantidad</th>
      <th>Imagen</th>
      <th></th>
  </tr>  
 </thead>
 <tbody>
    <?php foreach($productos as $producto):?>
        <tr>
            <td><?= $producto->id ?></td>
            <td><?= $producto->nombre ?></td>
            <td><?= $marca->TraerPorId($producto->marca)-> nombre?></td>
            <td><?= $producto->precio; ?></td>
            <td><?= $producto->costo; ?></td>
            <td><?= $producto->cantidad; ?></td>
            <td><img src ="<?= $producto->imagen?>" alt="" class="rounded-circle" width="70" height="70"style="object-fit: cover"></td>
            <td>
              <a class="btn btn-primary" href="?c=producto&a=borrar&id=<?=$producto->id?>">Eliminar</a>
            </td></td>
            <td><a class="btn btn-primary" href="?c=producto&a=formulario&id=<?=$producto->id?>">Editar</a></td>
        </td></td>
    <?php endforeach;?>
 </tbody>     
</table>

</div>
</div>