      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">

<h1 class="text-center">Listados Marcas</h1>
<div class="text-center mb-3">
  <a class="btn btn-primary" href="?c=producto&a=formulario">Agregaron</a>
</div>

<table class="table table-bordered text-center">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Nombre</th>
                       <th>Descripcion</th>
                       
                   </tr>
               </thead>
               <tbody>
                   <?php foreach (($marcas ?? []) as $marca): ?>
                       <tr>
                           <td><?php echo $marca->id; ?></td>
                           <td><?php echo $marca->nombre; ?></td>
                           <td><?php echo $marca->descripcion; ?></td>
                           <td>
                               <a href="=<?= $marca->id ?>" class="btn btn-primary">Editar</a>
                           </td></td>
                           <td>
                               <a class="btn btn-primary" href="<?= $marca->id ?>">Eliminar</a>
                           </td></td>
                           
                           
                       </tr>
                   <?php endforeach; ?>
               </tbody>
           </table>
       </div>
