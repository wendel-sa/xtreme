<?php
$dbname= "../bancodedados.db";
$db= new SQLite3($dbname);


// criando a tabela no banco de dados de produtos 
$tabelaProdutos =
  "CREATE TABLE IF NOT EXISTS produtos(id INTEGER PRIMARY KEY AUTOINCREMENT, 
nome TEXT,
tipo TEXT,
descricao TEXT,
preco REAL,
quantidade INTERGER,
imagem TEXT
)";

$db->exec($tabelaProdutos);

// criando tabela no banco de dados do usuarios
$tabelaUsuarios =
  "CREATE TABLE IF NOT EXISTS usuarios(id INTEGER PRIMARY KEY AUTOINCREMENT, 
nome TEXT,
email TEXT,
data_nascimento DATE,
senha REAL
)";

$db->exec($tabelaUsuarios);

//tabela de compra
$TabelaCompra =
"CREATE TABLE IF NOT EXISTS compra(
id INTEGER PRIMARY KEY AUTOINCREMENT,
id_usuario INTEGER,
id_produto INTEGER,
quantidade INTEGER,
valorTotal REAL,
FOREIGN KEY (id_usuario) REFERENCES usuarios (id),
FOREIGN KEY (id_produto) REFERENCES produtos (id)
)";

$db->exec($TabelaCompra);

//tabela de comentários

$tabelaComentarios = 
"CREATE TABLE IF NOT EXISTS comentarios (
id INTEGER PRIMARY KEY AUTOINCREMENT,
id_usuario INTEGER,
id_produto INTEGER,
comentario TEXT,
nota INTEGER,
dataComentario TEXT,

FOREIGN KEY(id_produto) REFERENCES usuarios(id),
FOREIGN KEY(id_produto) REFERENCES produtos(id)
)";

$db->exec($tabelaComentarios);
//tabela favoritos
$tabelafavoritos =
"CREATE TABLE IF NOT EXISTS favoritos(
id INTEGER PRIMARY KEY AUTOINCREMENT,
id_usuario INTEGER,
id_produto INTEGER,
FOREIGN KEY(id_produto) REFERENCES usuarios(id),
FOREIGN KEY(id_produto) REFERENCES produtos(id)
)";

$db->exec($tabelafavoritos);
?>