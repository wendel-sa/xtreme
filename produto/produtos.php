<?php
include '../configuracao/conexao.php';
include '../componentes/header.php';
?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            $sql = "SELECT * FROM produtos";
            $Produtos = $db->query($sql);

            while ($produto = $Produtos->fetchArray()) {
            ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width=100px height=300px  src="<?php echo $produto['imagem'] ?>" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                            <div class="card-body">
                                <p class="card-img-top">
                                  
R$<?php echo number_format($produto ['preco'],2,",","."); ?>
                                </p>
                                <p class="card-text">
                                    <?php echo $produto['nome']; ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                                                <a href="item.php?u_id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-outline-secondary">Comprar</a>
                                      
                                      
                                    </div>
                                    <small class="text-muted">  <?php echo $produto['quantidade'];  ?>
                               unidades  </p>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
                ?>

                </div>
        </div>
    </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Voltar ao início</a>
            </p>
            </br>
            </br>

        </div>


        <?php
        //footer
        include '../componentes/footer.php';
        ?>