<?php
require_once("config.php");
//carrega um usuario
//$root = new Usuario();
//$root-> loadByid(2);

//echo $root;

// carrega uma lista usuario
//$lista = Usuario::getList();

//echo json_encode($lista);

// carrega uma lista do login
//$search = Usuario::search("an");
//echo json_encode($search);

//carrega usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("Andre lopes", "v123jkl");
//echo $usuario;

//criando um novo usuario
$aluno = new Usuario("Carinha", "54321");
$aluno->insert();
echo $aluno;

//alterar usuario
//$usuario = new Usuario();
//$usuario->loadByid(6);
//$usuario->update("professor", "9876d");

//deleta um usuario
//$usuario = new Usuario();
//$usuario->loadByid(2);
//$usuario->delete();
//echo $usuario;


?>