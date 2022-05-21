<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Professor.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style-grid.css">
<link rel="shortcut icon" href="../../public/img/escola.png" type="image/x-icon">

<head>
        <title>Alteração de Professor - WEB I</title>
</head>

<body>
    
	<header>Topo</header>
	<main>
   <?php  
      // Alterar

      $id    = $_POST['id'];
      $nome  = $_POST['nome'];
      $endereco = $_POST['endereco'];
     
       

       if ( isset($_POST['alterarDados'])):
       {
         echo "entrou no post";
        $aluno = new Professor;
           $aluno->setNome($nome);
           $aluno->setEndereco($endereco);
           $aluno->update($id);
        }
     endif;
    ?>



<form method='post' action="">
    <label for='Nome'> Nome:</label>
    	<input type="text" name="nome" value="<?php echo $nome;?>"/>
    <label for='endereço'> Endereço: </label>    
    	<input type="text" name="endereco"value="<?php echo $endereco;?>"/>
        <input type="hidden" name="id" value="<?php echo $id;?>"/>
         <input type="submit" name="alterarDados"/>
    </form>
            <!-- Fim da tabela -->

      <a href="./index.php"><button>Voltar</button></a>

      </main>
    
	<asideL>Lateral ESQ</asideL>
	<asideR>Lateral Dir</asideR>
	<footer>Rodape </footer>


</body>
</html>
