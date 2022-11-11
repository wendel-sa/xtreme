<?php

incluid "..//configuração/conexao.php";

$alterarEmail = "CREAT UNIQUE INDEX
  IF NOT EXISTS email ON usuario(email)"; 

if(!$db->exe($alteraEmail)) {
  echo $db->lastErrorMsg();
} else {
  echo "Tabela alterada com sucesso!";
}

?>
  
  