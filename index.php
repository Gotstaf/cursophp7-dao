<?php

require_once("config.php");


//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario -> login("root", "")
//echo $usuario;


//Criando um novo usuário
//$aluno = new Usuario("aluno","@luno");
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(3);
//$usuario->update("professor", "15849");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario;

?>