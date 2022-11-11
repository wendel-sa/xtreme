<?php

include "../configuracao/conexao.php";

$id = $_GET['id'];


$result_produto = "SELECT * FROM produtos where id ='$id' LIMIT 1";


$resultado_produto = $db->query($result_produto);

while ($row_produto = $resultado_produto->fetchArray()) {

  $nome = $row_produto ['nome'];
  $descrição = $row_produto['descricao'];
  $preco = $row_produto ['preco'];
  $quantidade = $row_produto ['quantidade'];
  $imagem = $row_produto ['imagem'];

  
}

 //inclua o header.php
 include '../componentes/header.php';
?>
 <section class="py-5">
<div class="container">
 <div class="row">
 <div class="col-md-12 text-white">
 <h1>Editar Produto</h1>
 </div>
 </div>
<div class="row text-white">
 <div class="col-md-12">
 <form action="updateProduto.php"
   method="post">
   <div class="form-group">
     <label for="nome">Nome</label>
     <input type="text" class="form-control"
       name="nome" id="nome"
       value="<?php echo $nome; ?>">

   </div>

<div class = "form-group">
<label for="descricao">Descrição</label>
<textarea class="form-control"
name="descricao"
id="descricao" rows="3">
<?php echo $descrição;?></textarea> 

</div>

<div class ="form-group">
  <label for="preco">Preço</label>
  <input type="text" class="form-control"
    name="preco"
    id="preco" value="<?php echo $preco; ?>">
</div>
<div class="form-group">
  <label for="quantidade">Quantidade</label>
  <input type="text" class="form-control"
    name="quantidade"
    id="quantidade"
    value="<?php echo $quantidade; ?>">
</div>
  
<div class="form-group row py-2">
  <div class="col-8">
    <label for="imagem">Imagem</label>
    <input type="text" class="form-control"
      name="imagem" id="imagem"
      value="<?php echo $imagem; ?>">

  </div>

  <div class="col-4">
    <img src="<?php echo $imagem; ?>"
      class="img-fluid"
      height="50vh" alt="Imagem do produto">
  </div>
</div>

       



<input type="hidden" name="id"
value="<?php echo $id; ?>">
<button type="submit"
class="btn btn-primary">Editar</button>
 </form>
 </div>
</div>
</div>
 </section>
<?php
//footer
include '../componentes/footer.php';
?>

