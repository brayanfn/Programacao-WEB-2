<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Teste de Funcionalidade</h2>
    <form method = "POST" action = "">
        <input type="number" name = "id">
        <input type = "text" name = "nome">
        <input type = "number" name = "preco">
        <input type = "number" name = "estoque">

        <button type="submit" name="btn-atualizar">Atualizar</button>
    </form>

</body>
</html>

<?php

    require_once 'config/conexao.php';
    include 'includes/header.php';

    if (isset($_POST['btn-atualizar'])) {
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $estoque = $_POST['estoque'];

        
        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, estoque = :estoque WHERE id = :id";
        $stmt = $conexao->prepare($sql);

        $funcionou = $stmt->execute([
            ':nome' => $nome,
            ':preco' => $preco,
            ':estoque' => $estoque,
            ':id' => $id
        ]);
    }


?>
