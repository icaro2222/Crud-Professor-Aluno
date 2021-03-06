<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../../app/controller/Professor.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style-grid.css">
    <link rel="shortcut icon" href="../../public/img/escola.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Professor</title>
</head>
<body>
    
	<header>Topo</header>
	<main>
   <?php    
      $professor = new Professor;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];

            $professor->setNome($nome);
            $professor->setEndereco($endereco);

            if($professor->insert()){
                echo "Professor ". $nome. " inserido com sucesso";
            }
      endif;
    ?>
    <?php    
       $professor = new Professor;
       if(isset($_POST['apagar'])):
             $nome = $_POST['nome'];
 
             $professor->setNome($nome);
 
             if($professor->delete($nome)){
                 echo "Professor ". $nome. " inserido com sucesso";
             }
       endif;
     ?>

    <h2>Cadastrar Professor</h2>
    <a href="./index.php"><button>Voltar</button></a>
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
