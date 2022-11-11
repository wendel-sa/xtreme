<?php

$nomeDigitado = $_POST['nome'];
$tipoDigitado = $_POST['tipo'];
$descricaoDigitado = $_POST['descricao'];
$precoDigitado = $_POST['preco'];
$quantidadeDigitado = $_POST['quantidade'];
$imagemDigitado = $_POST['imagem'];


$valor = intval( $precoDigitado );

?>

<?php
 include 'componentes/header.php';
?>


<div class="card" style="width: 18rem;">
  <img src="
    <?php
        echo $imagemDigitado;
    ?>
    " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
    <?php
    echo $nomeDigitado;
    ?>
</h5>
    <p class="card-text">
      <?php
      echo $tipoDigitado;
      ?>
    <p class="card-text">
      <?php
      echo $descricaoDigitado;
      ?>
    </p>
     <p class="card-text">
      <?php
      echo $quantidadeDigitado;
      ?>
    </p>

    <div class="input-group ">
  <input type="number" class="form-control" 
    value="<?php echo $valor ?>.00">
</div>
    
    <a href="#" class="btn btn-primary">Adicionar ao carrinho</a>
  </div>
</div>


<?php
include 'componentes/footer.php';
?>