<?php
require_once("c://xampp/htdocs/cafeteria/view/head/head.php");

?>

    <form action="store.php" method="POST" autocomplete="off" >
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">referencia</label>
        <input type="text" name="referencia" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">precio</label>
        <input type="text" name="precio" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">peso</label>
        <input type="text" name="peso" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">categoria</label>
        <input type="text" name="categoria" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">stock</label>
        <input type="text" name="stock" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">fecha creacion</label>
        <input type="text" name="fecha_creacion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>




<?php
require_once("c://xampp/htdocs/Cafeteria/view/head/footer.php");

?>