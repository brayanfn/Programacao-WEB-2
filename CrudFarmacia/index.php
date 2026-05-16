<?php 

require 'conexao.php';

$sql = "Select * FROM produtos";
$stmt = ""->prepare($sql);
$stmt->execute();

$tabela =  $smt->fetchAll(PDO::FETCH_ASSOC);

if ($tabela){
    foreach ($tabela as $item){
        echo "ID: " . $item['id'] ;
        echo "Nome: " . $item['nome'];
        echo "Fabricante: " . $item['fabricante'];
        echo "Preço: " . $item['preco'];
        echo "Estoque: " . $item['estoque'];
    }
}


?>
