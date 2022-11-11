<?php
include '../configuracao/conexao.php';
//pegar o id vindo da url
$id = $_GET['u_id'];


//variavel com o comando deletar
$query = "DELETE FROM produtos WHERE id = '$id'";


//execute o comando
if ($db->exec($query)) {
  echo "Produto excluído com sucesso!";
} else {
  echo "Erro ao excluir produto!";
}

?>