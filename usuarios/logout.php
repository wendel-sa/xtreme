<?php 
//arquivo de logout

//iniciar a sessao
session_start();
//destruir a sessao
session_destroy();
//redirecionar para o index.php
header("Location: ../index.php");
exit;
?>