<?php

require_once("config.php");

$jose = new Usuario();

$jose ->loadBy(3);

echo $jose;

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

?>