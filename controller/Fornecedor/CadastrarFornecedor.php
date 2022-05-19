<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Fornecedor.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../img/escola.png" type="image/x-icon">
<head>
        <title>cadastro de Fornecedor - WEB I</title>

</head>

<body>
    <h1>Cadastrar fornecedor</h1>
        
    <a href="../Fornecedor/index.php"><button>Voltar</button></a>

   <?php    
      $fornecedor = new Fornecedor;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

            $fornecedor->setNome($nome);
            $fornecedor->setEndereco($endereco);

            if($fornecedor->insert()){
                echo "fornecedor ". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome"/>
        <label for='endereço'> Endereço: </label>    
            <input type="text" name="endereco"/>
            <input type="submit" name="cadastrar"/>
            
    </form>

</body>
</html>
