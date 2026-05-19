<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <h2>Dados do Banco de Dados</h2>
</body>
</html>

<?php 

require 'config/conexao.php';

$sql = "Select * FROM produtos";
$stmt = $conexao->prepare($sql);
$stmt->execute();

$tabela =  $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($tabela){

    echo '<table class="index__tabela">';
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nome</th>";
    echo "<th>Fabricante</th>";
    echo "<th>Preço</th>";
    echo "<th>Estoque</th>";
    echo "</tr>";
    
    foreach ($tabela as $item){
        echo "<tr>";
        echo "<td>" . $item['id'] . "</td>";
        echo "<td>" . $item['nome'] . "</td>" ;
        echo "<td>" . $item['fabricante'] . "</td>" ;
        echo "<td>" . $item['preco'] . "</td>" ;
        echo "<td>" . $item['estoque'] . "</td>";
        echo '<td  class = "tabela__botoes"> <a class = "tabela__editar" href="editar.php">Editar</a> | <a class = "tabela__excluir" href="excluir.php">Excluir</a> </td>';
        echo "</tr>";
    }
}
    echo "</table>";
include 'includes/footer.php';
?>
