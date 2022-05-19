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
        <title>Alteração de fornecedor - WEB I</title>
</head>

<body>
    <h1>Alterar fornecedor</h1>
   <?php  
      // Alterar

      $id    = $_POST['id'];
      $nome  = $_POST['nome'];
      $endereco = $_POST['endereco'];
     
       

       if ( isset($_POST['alterarDados'])):
       {
         echo "entrou no post";
        $fornecedor = new Fornecedors;
           $fornecedor->setNome($nome);
           $fornecedor->setEndereco($endereco);
           $fornecedor->update($id);
        }
     endif;
    ?>



<form method='post' action="">
    <label for='Nome'> Nome:</label>
    	<input type="text" name="nome" value="<?php echo $nome;?>"/>;
    <label for='endereço'> Endereço: </label>    
    	<input type="text" name="endereco"value="<?php echo $endereco;?>"/>;
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
         <input type="submit" name="alterarDados"/>
    </form>
            <!-- Fim da tabela -->

      <a href=ListarFornecedor.php><button>Voltar</button></a>

</body>
</html>
