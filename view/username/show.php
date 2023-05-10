<?php
    require_once("c://xampp/htdocs/Cafeteria/view/head/head.php");
    require_once("c://xampp/htdocs/Cafeteria/controller/usernameController.php");
    $obj= new usernameController();
    $date = ($obj->show($_GET['id']));
?>
<h2 class="text-center">REGISTRO AGREGADO</h2>
<div class="bp-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a> 
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado el registro no se puede volver a recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">CERRAR</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">ELIMINAR</a>
            <!-- <button type="button" >eliminar</button> -->
        </div>
        </div>
    </div>
    </div>

</div>


<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Referencia</th>
            <th scope="col">Precio</th>
            <th scope="col">Peso</th>
            <th scope="col">Categoria</th>
            <th scope="col">Stock</th>
            <th scope="col">Fecha</th>
        </tr>
    </thead>
        <tbody>
            <tr>
                <td scope="col"><?=  $date['id']?></td>
                <td scope="col"><?=  $date['nombre']?></td>
                <td scope="col"><?=  $date['referencia']?></td>
                <td scope="col"><?=  $date['precio']?></td>
                <td scope="col"><?=  $date['peso']?></td>
                <td scope="col"><?=  $date['categoria']?></td>
                <td scope="col"><?=  $date['stock']?></td>
                <td scope="col"><?=  $date['fecha_creacion']?></td>
            </tr>
        </tbody>
</table>



<?php
    require_once ("c://xampp/htdocs/Cafeteria/view/head/footer.php");

?>

