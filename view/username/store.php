<?php
    require_once("c://xampp/htdocs/Cafeteria/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre'],$_POST['referencia'],$_POST['precio'],$_POST['peso'],$_POST['categoria'],$_POST['stock'],$_POST['fecha_creacion']);



?>