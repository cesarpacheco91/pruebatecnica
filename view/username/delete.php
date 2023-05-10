<?php
require_once("c://xampp/htdocs/Cafeteria/controller/usernameController.php");
$obj = new usernameController();
$obj->delete($_GET['id']);
?>