<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <h2>Edição de informações</h2>
    <form method = "POST" action = "">
        <label>ID: </label>
        <input type="number" name = "id">
        <label>Nome: </label>
        <input type = "text" name = "nome">
        <label>Fabricante: </label>
        <input type = "text" name = "fabricante">
        <label>Preço: </label>
        <input type = "number" name = "preco">
        <label>Estoque: </label>
        <input type = "number" name = "estoque">

        <button type="submit" name="btn-atualizar">Atualizar</button>
    </form>

    <?php
        include 'includes/footer.php';
    ?> 
</body>
</html>

<?php

    require_once 'config/conexao.php';

    if (isset($_POST['btn-atualizar'])) {
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $fabricante = $_POST['fabricante'];
        $preco = $_POST['preco'];
        $estoque = $_POST['estoque'];

        
        $sql = "UPDATE produtos SET nome = :nome, fabricante = :fabricante, preco = :preco, estoque = :estoque WHERE id = :id";
        $stmt = $conexao->prepare($sql);

        $funcionou = $stmt->execute([
            ':nome' => $nome,
            ':fabricante' => $fabricante,
            ':preco' => $preco,
            ':estoque' => $estoque,
            ':id' => $id
        ]);
    }


?>
