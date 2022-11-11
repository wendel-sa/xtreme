<?php

include "../configuracao/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$imagem = $_POST['imagem'];

//atualizar os dados do produto
$result_produto = "UPDATE produtos SET nome='$nome', descricao='$descricao', preco='$preco', quantidade='$quantidade', imagem='$imagem' WHERE id='$id'";


//executar a query em produto
$resultado_produto =$db->exec($result_produto);

//verificar se for alterado
if ($resultado_produto) {
  header ('location: ../produto/listaprodutos.php') ;
} else {
  echo "Erro ao alterar!"; } ?>

