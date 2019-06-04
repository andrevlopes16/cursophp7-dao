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
$usuario = new Usuario();
$usuario->login("Andre lopes", "v123jkl");

echo $usuario;


?>