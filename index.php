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
//$usuario = new Usuario ();
//$usuario->login("jose", "1234567890");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario ("alunp", "@lun0");

//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadBy(8);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadBy(7);

$usuario->delete();

echo $usuario;

?>