<?php
/*Arquivo que ira lista todos os comentarios */
//incluindo o header

include '../configuracao/conexao.php';


$selecionarComentarios = "SELECT * FROM comentarios";


$comentarios = $db->query($selecionarComentarios);

include '..//componentes/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center text-white">
        Comentários
      </h1>
    </div>
  </div>
<div class="row">
  <div class="col-12">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ID Usuario</th>
          <th scope="col">ID Produto</th>
          <th scope="col">Comentario</th>
          <th scope="col">Nota</th>
          <th scope="col">Data</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
    <tbody>
      <?php
//se atabela tiver dados 
if($comentarios->fetchArray()) {
  //percorrer a tebela
  while ($comentario = $comentarios->fetchArray()){
    ?>
    <tr>
      <th scope="row"><?php echo $comentario['id']; ?></th>
      <td><?php echo $comentario['id_usuario']; ?></td>
      <td><?php echo $comentario['id_produto']; ?></td>
      <td><?php echo $comentario['comentario']; ?></td>
      <td><?php echo $comentsario['nota']; ?></td>
      <td><?php echo $comentario['dataComentario']; ?></td>
      <td>
        <a href="delete.php?u_id=<?php echo $comentario['id']; ?>" class="btn btn-danger">Excluir</a>
        <a href="editar.php?u_id=<?php echo $comentario['id']; ?>" class="btn btn-danger">Editar</a>
        
      </td>
    </tr>
      <?php
  }

}else{
  ?>
  <tr>
    <td class="text-center">
      Nenhum comentário cadastrado
    </td>
  </tr>
<?php
  }
  ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php 
//incluindo o footer
include '..//componentes/footer.php';
?>

  
  

