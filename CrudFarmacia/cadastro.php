<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php
        include 'includes/header.php';
    ?>

    <main>
        <h2>Cadastro de Produtos</h2>
        
        <form id="frmCadastro" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="fabricante">Fabricante</label>
            <input type="text" id="fabricante" name="fabricante" required>
            
            <label for="preco">Preço</label>
            <input type="number" id="preco" name="preco" step="0.01" required>
            
            <label for="estoque">Estoque</label>
            <input type="number" id="estoque" name="estoque" required>
            
            <button type="submit">Cadastrar</button>
        </form>
    </main>
    
    <?php
        include 'includes/footer.php';
    ?>

</body>
</html>

<?php

if (isset($_POST['nome'], $_POST['fabricante'], $_POST['preco'], $_POST['estoque'])) {
    $nome = $_REQUEST['nome'];
    $fabricante = $_REQUEST['fabricante'];
    $preco = $_REQUEST['preco'];
    $estoque = $_REQUEST['estoque'];
    
    require_once('config/conexao.php');
      
    $sql = "INSERT INTO produtos (nome, fabricante, preco, estoque) VALUES (:nome, :fabricante, :preco, :estoque)";
    $stmt = $conexao -> prepare($sql);
      
    $stmt -> execute([
        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque
        ]);
}

?>
