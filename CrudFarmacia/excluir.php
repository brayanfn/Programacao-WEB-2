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
    <h2>Exclusão de linha da tabela</h2>

    <form method = "POST" action = "">
        <label>ID: </label>
        <input type = "number" name = "id">
        <button type = "submit" name = "btnExcluir">Excluir</button>
    </form>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>

<?php

    require_once 'config/conexao.php';


    if(isset($_POST["btnExcluir"])){

        $id = $_POST['id'];

        $sql = "Delete FROM produtos Where id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([':id' => $id]);

    }

?>
