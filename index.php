<?php

    require_once 'vendor/autoload.php';

    $produto = new \App\Model\Produto();
    $produto->setNome("notebook CCE");
    $produto->setDescricao("i5 Magnetco");

    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->read();

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <table border='1' cellpadding='10'>
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>
                </tr>
            </thead>

            <tbody>
            <?php
                foreach($produtoDao->read() as $produto): ?>

                    <tr>
                        <td> <?php echo $produto['nome'] ;?></td>
                        <td> <?php echo $produto['descricao'] ;?></td>
                    </tr>
                </tbody>

                <?php 
                endforeach  
            ?>
        </table>
        
    </body>
    </html>