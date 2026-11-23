      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">

<h1 class="text-center">Listados Productos</h1>

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
            <td><?= $producto->id; ?></td>
            <td><?= $producto->nombre; ?></td>
            <td><?= $producto->marca; ?></td>
            <td><?= $producto->precio; ?></td>
            <td><?= $producto->costo; ?></td>
            <td><?= $producto->cantidad; ?></td>
            <td><?= $producto->imagen; ?></td>
            <td>
              <a class="btn btn-primary" href="?c=producto&a=borrar&id=<?=$producto->id?>">Eliminar</a>
              <a class="btn btn-primary" href="?c=producto&a=formulario&id=<?=producto->id ?>">
                Editar
              </a>
            </td>
        </tr>
    <?php endforeach;?>
 </tbody>     
</table>

</div>
</div>