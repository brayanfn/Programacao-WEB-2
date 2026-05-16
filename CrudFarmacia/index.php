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
    <h2>Dados do Banco de Dados</h2>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>

<?php 

require 'config/conexao.php';

$sql = "Select * FROM produtos";
$stmt = $conexao->prepare($sql);
$stmt->execute();

$tabela =  $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($tabela){

    echo '<table class="index__tabela" border="1">';
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
        echo '<td> <a href="editar.php">Editar</a> | <a href="excluir.php">Excluir</a> </td>';
        echo "</tr>"
    }
}
    echo "</table>";
    
?>
