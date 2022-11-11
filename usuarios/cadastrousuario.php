<?php
//Arquivo de cadastro do usuario
//Path: usuarios\cadastro.php
//incluir o arquivo de componentes/header.php


include '../componentes/header.php';
?>


<section class="container">
    <div>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Cadastro de Usuário
                </h1>
            </div>
        </div>
    </div>
    <div class="text-center container">
      <link href="estilo.css" rel="stylesheet">
        <div class="card bg-danger1 mb-3" style="margin-top:6%;">
       <div class="card-body px-5">
        <div class="col-12">
            <form action="addUser.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">

                </div>
                <div class="form-group">
                    <label for="datanascimento">Data de nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">

                </div>

                <div class="form-group">
                    <label for="senha">senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholeder="Digite sua senha">
                </div>



                <div class="py-3">
                    <button type="subimit" class="btn btn-primary">
                        Cadastrar 
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include "..//componentes/footer.php";
?>