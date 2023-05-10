<?php
    require_once ("c://xampp/htdocs/Cafeteria/view/head/head.php");
    require_once ("c://xampp/htdocs/Cafeteria/controller/usernameController.php");
    $obj = new usernameController();
    $rows= ($obj->index());
?>
<div class="mb-3">
    <a href="/Cafeteria/view/username/create.php"class= "btn btn-primary">AGREGAR NUEVO USUARIO</a>
</div>
<table class="table">
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
            <?php if($rows): ?>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <th><?= $row[0]?></th>
                        <th><?= $row[1]?></th>
                        <th><?= $row[2]?></th>
                        <th><?= $row[3]?></th>
                        <th><?= $row[4]?></th>
                        <th><?= $row[5]?></th>
                        <th><?= $row[6]?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Una vez eliminado el registro no se puede volver a recuperar el registro
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</button>
                                <!-- <button type="button" >eliminar</button> -->
                            </div>
                            </div>
                        </div>
                <?php endforeach;?>

            <?php else:?>
                <tr>
                    <td colspan="3"class="text-center">No hay productos a la venta</td>
                </tr>
            
            <?php endif;?>
        </tbody>        
    <table>
    <?php

    require_once ("c://xampp/htdocs/Cafeteria/view/head/footer.php");
?>