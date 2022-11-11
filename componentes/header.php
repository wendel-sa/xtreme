<?php
if(!isset($_SESSION)) session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Xtreme Peças</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="../componentes/estilo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="~/Scripts/jquery-1.10.2.min.js"></script>
    <link href="~/Content/bootstrap.css" rel="stylesheet" />
    <script src="~/Scripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="~/Scripts/bootstrap.js" type="text/javascript"></script>
     <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
  </head>
  <body class="bg-secondary"
    
    ">
    <nav class="navbar navbar-expand-lg navbar-fundo">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../imagens/logox.png" height=
        "75px">
    </a>
   
<a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item teste">
          <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
        </li>
        
        <li class="nav-item teste">
          <a class="nav-link" href="../produto/produtos.php">Produtos</a>
        </li>
         <li class="nav-item teste">
          <a class="nav-link" href="../cadastro.php">Cadastro de Produtos</a>
        </li>
        <li class="nav-item teste">
          <a class="nav-link" href="../produto/listaprodutos.php">Lista de Produtos</a>
        </li>

       
          </ul>
        </li>
   
      
       <li class="nav-item teste">
            <?php
          //VERIFICA SE N ESTÁ LOGADO
          if(isset($_SESSION['usuario']) ) {
          
          ?>
            <a href="../produto/produtos.php"  class="btn btn-primary btn-lg px-4 gap-3" style="" >
            <i class="bi bi-cart4 " style="font-size:25px"></i>
            </a>
            <a href="/usuarios/perfil.php" class="btn btn-primary btn-lg px-4 gap-3"><i class="bi bi-person-circle"style="font-size:25px"></i></a>
          <a href="/usuarios/logout.php" class="btn btn-secondary">Logout</a>

      <?php }  else { ?>


      <a href="/usuarios/login.php" class="btn btn-dark">Login</a>
      <a href="/usuarios/cadastrousuario.php" class="btn btn-success
        ">Cadastre-se</a>
        
            
      <?php }
        
      ?>
        </li>
           </ul>
    </div>
  </div>
 
    </nav>