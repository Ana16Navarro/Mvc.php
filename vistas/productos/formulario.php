<form action="?c=producto&a=guardar" method="post">
    <h3>Crear Producto</3>

    <input type ="hidden" name="id" value="<?=$producto?->id ?? ''?>">

    <label for= "nombre">Nombre<label>
    <input type="text" name="nombre" value="<?=$producto?->nombre ?? '' ?>">

    <label for= "marca">Marca<label>
    <input type="text" name="marca" value="<?=$producto?->marca ?? ''?>">

    <label for= "costo">Costo<label>
    <input type="text" name="costo" value="<?=$producto?->costo ??''?>">

    <label for= "precio">Precio<label>
    <input type="text" name="precio" value="<?=$producto?->precio ??''?>">

    <label for= "cantidad">Cantidad<label>
    <input type="text" name="cantidad" value="<?=$producto?->cantidad ??''?>">

    <label for= "imagen">Imagen<label>
    <input type="text" name="imagen" value="<?=$producto?->imagen ??''?>">

    <button type="submit">Guardar</button>
</form>