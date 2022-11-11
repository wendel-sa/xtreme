<?php
include '../componentes/header.php';
?>



 </div>
      <div class="text-center container">
         <link href="estilo.css" rel="stylesheet">
        <div class="card bg-danger1 mb-3" style="margin-top:6%;">
       <div class="card-body px-5">

            <div class="py-5" style="">
                <h1 class="text-dark">Faça Seu Login</h1>
            </div>
            <div class="">
                <div class="container">
                  
                    <form action="../configuracao/validacao.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control rounded-5 border-light" id="Email" placeholder="name@example.com">

                            <label for="Email">Endereço de Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="senha" class="form-control rounded-5 border-light" id="psw" placeholder="Password">

                            <label for="psw">Senha</label>
                        </div>
                      

                        <button id="submit" type="submit" class="btn btn-dark"> Enviar </button>
                    </form>
                </div>
            </div>
            </div>
      </div>
      
      
        <!--div do fundo-->
        </div>


</html>

  <?php
        //footer
        include '../componentes/footer.php';
        ?>