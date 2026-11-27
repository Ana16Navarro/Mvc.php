      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
<h1 class="text-center">Listados Ventas</h1>
<div class="text-center mb-3">
  <a class="btn btn-primary" href="?c=Venta&a=formulario">Nueva venta</a>
</div>

<table class="table table-bordered text-center">
               <thead>
                   <tr>
                       <th>Id</th>
                       <th>Fecha</th>
                       <th>Valor_Total</th>
                   </tr>
               </thead>
               <tbody>
                   <?php foreach ($ventas as $venta): ?>
                       <tr>
                           <td><?php echo $ventas->id ?></td>
                           <td><?php echo $ventas->fecha ?></td>
                           <td><?php echo $ventas->valor_total ?></td>
                           <td>
                               <a href="=<?= $ventas->id ?>" class="btn btn-primary">Editar</a>
                           </td></td>
                           <td>
                               <a class="btn btn-primary" href="<?= $ventas->id ?>">Eliminar</a>
                           </td></td>
                           
                           
                       </tr>
                   <?php endforeach; ?>
               </tbody>
           </table>
       </div>

</h1>