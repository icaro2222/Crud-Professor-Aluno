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
        <title>Lista de Fornecedor - WEB I</title>
</head>

<body>
   
    <h1>Listar Fornecedor</h1>
    
    
    <a href="../Aluno/index.php"><button>Voltar</button></a>

    <!-- Inicio da tabela -->
    <table class="table">
                <thead>
                    <tr class="active">
                        <th>Nome</th>
                        <th>Endereco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $aluno=New fornecedor;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $id = $_POST['id'];
                        
                        $aluno->delete($id);
                    }
                                                         
                    
                    

                    foreach ($aluno->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->nome;?> </td>

                        <td> <?php echo $value->id;?> </td>

                        <td> <?php echo $value->endereco;?> </td>
                    <td>

                        <form method="post" action="AlterarAluno.php">
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                                <input name="endereco" type="hidden" value="<?php echo $value->endereco;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                         </form>
                        <td>
                            <form method="post" >
                                <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->




    </form>

</body>
</html>
