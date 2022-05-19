

<?php
$cpf = $_POST['cpf'];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Fornecedores</title>
</head>
<body>
    <a href="ListarAlunos.php">Listar Fornecedores</a>
    <?php
    
    require_once("Db.php");

    $cpf = $_POST['cpf'];
    $db = new BD();

    $db->delete($cpf);
    ?>
    <h2>Fornecedor Deletado Com Sucesso!!!</h2>
</body>
</html>