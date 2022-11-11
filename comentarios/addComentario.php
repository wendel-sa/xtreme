<?php

include '../configuracao/conexao.php';

$comentario = $_POST['comentario'];
$nota = $_POST['nota'];
$id_produto = $_POST['id_produto'];
$id_usuario = $_POST['id_usuario'];
$dataComentario = date('d/m/y');

//inserindo os dados no banco de dados
$inserirComentario = "INSERT INTO comentarios (id_usuario, id_produto,comentario, nota, dataComentario)
VALUES ('$id_usuario', '$id_produto',
'$comentario', '$nota', '$dataComentario')";

//se o comando for executado com sucesso
if($db->exec($inserirComentario)){
  echo "Comentario adicionado com sucesso";
}else{
  echo "Erro ao adicionar comentario";
}
?>