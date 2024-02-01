<?php

require_once("config.php");

//Carrega um usuário
//$jose = new Usuario();
//$jose ->loadby(5);
//echo $jose;

//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lisra de usuarios buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);

//Carega um usuário usando o login e a senha

$usuario = new Usuario ();

$usuario->login("jose", "1234567890");

echo $usuario;


?>