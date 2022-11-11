<?php
/*Arquivo que ira exclui um cometario banco de dados */ 
//incluir o banco de dados 

include '../configuracao/conexao.php';
//pegando o id comentario 
$id = $_GET['u_id'];
//deletando o comentario
$deleteComentario = "DELETE FROM comentarios WHERE id = $id";

//se o comentario for executado com sucesso 
if($db->query($deleteComentario)){
  echo "Comentário ecluído com sucesso!";
  }else{
  echo "Erro ao excluir comentário";
  }

?>