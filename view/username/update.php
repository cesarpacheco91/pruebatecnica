<?php
require_once("c://xampp/htdocs/Cafeteria/controller/usernameController.php");
$obj = new usernameController();
$obj->update ($_POST['id'],$_POST['nombre'],$_POST['referencia'],$_POST['precio'],$_POST['peso'],$_POST['categoria'],$_POST['stock'],$_POST['fecha_creacion']);
//echo ($_POST['id']);
//echo ($_POST['nombre']);
//echo ($_POST['referencia']);
//echo ($_POST['precio']);
//echo ($_POST['peso']);
//echo ($_POST['categoria']);
//echo ($_POST['stock']);
//echo ($_POST['fecha_creacion']);
?>