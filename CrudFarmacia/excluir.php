<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=,, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Teste de Funcionalidade</h2>

    <form method = "POST" action = "">
        <input type = "number" name = "id">
        <button type = "subimt" name = "btnExcluir">Excluir</button>
    </form>
</body>
</html>

<?php 

    require_once 'config/conexao.php';
    include 'includes/header.php';

    if(isset($_POST["btnExcluir"])){

        $id = $_POST['id'];

        $sql = "Delete FROM produtos Where id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([':id' => $id]);

        if ($stmt->rowCount() > 0) {
            echo "Sucesso! O contato ID $idParaExcluir foi removido da agenda.";
        } else {
            echo "Nenhum contato foi encontrado com o ID $idParaExcluir.";
        }
    }


?>
