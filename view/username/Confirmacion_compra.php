<?php

    require_once("c://xampp/htdocs/Cafeteria/view/head/head.php");
    require_once("c://xampp/htdocs/Cafeteria/controller/usernameController.php");
    $obj= new usernameController();
    $user = ($obj->show($_GET['id']));
    ?>
        <form action="update.php" method="post" autocomplete="off">
            <h2>Modificando Registros</h2>
            <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
            <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control"id="inputPassword" value="<?= $user[1]?>",>
        </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Referencia</label>
            <div class="col-sm-10">
            <input type="text" name="referencia" class="form-control"id="inputPassword" value="<?= $user[2]?>",>
            </div>
        
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Precio</label>
            <div class="col-sm-10">
            <input type="text" name="precio" class="form-control"id="inputPassword" value="<?= $user[3]?>",>
            </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo peso</label>
            <div class="col-sm-10">
            <input type="text" name="peso" class="form-control"id="inputPassword" value="<?= $user[4]?>",>
            </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Categoria</label>
            <div class="col-sm-10">
            <input type="text" name="categoria" class="form-control"id="inputPassword" value="<?= $user[5]?>",>
            </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Stock</label>
            <div class="col-sm-10">
            <input type="text" name="stock" class="form-control"id="inputPassword" value="<?= $user[6]?>",>
            </div>
            <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Fecha</label>
            <div class="col-sm-10">
            <input type="text" name="fecha_creacion" class="form-control"id="inputPassword" value="<?= $user[7]?>",>
        </div>
        <div>
        <div>
            <input type="submit"class="btn btn-success" value="Confirmacion">
            <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
        </div>
        </form>
    <?php
    require_once ("c://xampp/htdocs/Cafeteria/view/head/footer.php");