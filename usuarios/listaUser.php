<?php
include '../configuracao/conexao.php';


$selecionar = "SELECT * FROM usuarios";

$resultado = $db->query ($selecionar);

include "../componentes/header.php";


?>
<section>
<div class= "container">
    <div class= "row">
        <div class= "col-12">
          <h1 class= "text-center">
            Lista de Usuários
          </h1>
        </div>
      <div class="row"
         <div class= "col-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Data de Nascimento</th> 
                  <th scope="col">Ações</th>
                </tr>
              </thead> 
               <tbody>
                        <?php while($linha = $resultado->fetchArray()) { ?>
                        <tr>
                            <td><?php echo $linha["nome"]; ?></td>
                            <td><?php echo $linha["email"]; ?></td>
                            <td><?php echo $linha["data_nascimento"]; ?></td>
                            <td>
              <a href="editarUser.php?id=<?php echo $linha["id"]; ?>"
                              class="btn btn-warning">Editar</a>
        <a href="excluirUser.php?id=<?php echo linha["id"];?>"
                              class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
    </table>
         </div>
      </div>
    </div>   
</section>
  <?php

include "../componentes/footer.php";

?>