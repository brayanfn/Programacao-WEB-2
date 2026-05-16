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

    
    foreach ($tabela as $item){
        echo "ID: " . $item['id'] . " | | ";
        echo "Nome: " . $item['nome'] . " | | " ;
        echo "Fabricante: " . $item['fabricante'] . " | | " ;
        echo "Preço: " . $item['preco'] . " | | " ;
        echo "Estoque: " . $item['estoque'] . " | | </br>";
    }
}
    
?>
