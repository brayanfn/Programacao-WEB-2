<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
  <h2>Cadastro de Produtos</h2>
  
  <form id="frmCadastro" method="post">
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome">
    <br>
    <label for="fabricante">Fabricante</label>
    <input type="text" id="fabricante" name="fabricante">
    <br>
    <label for="preco">Preço</label>
    <input type="number" id="preco" name="preco" step="0.01">
    <br>
    <label for="estoque">Estoque</label>
    <input type="number" id="estoque" name="estoque">
    <br>
    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>

<?php
  
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

?>
