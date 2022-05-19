<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Alunos.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
    <link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../css/style-grid.css">
    <link rel="shortcut icon" href="../../img/escola.png" type="image/x-icon">
<head>
        <title>cadastro de alunos - WEB I</title>

</head>

<body>
	<header>Topo</header>
    <h1>Cadastrar Aluno</h1>
        
    <a href="../Aluno/index.php"><button>Voltar</button></a>

   <?php    
      $aluno = new Alunos;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

            $aluno->setNome($nome);
            $aluno->setEndereco($endereco);

            if($aluno->insert()){
                echo "Aluno ". $nome. " inserido com sucesso";
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

    </main>
    
	<asideL>Lateral ESQ</asideL>
	<asideR>Lateral Dir</asideR>
	<footer>Rodape </footer>


</body>
</html>
