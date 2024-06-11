<?php
    if(!empty($_GET['id']))
    {
        include_once('./php/config.php');

        $placa = $_GET['id'];
        
        $sql_code = "SELECT * FROM carro WHERE PLACA_CARRO = '$placa'";
        $sql_query = $conect->query($sql_code) or die("Falha na execução do código SQL: " . $conect->error);

        if($sql_query->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM carro WHERE PLACA_CARRO = '$placa'";
            $resultDelete = $conect->query($sqlDelete);
        } else {
            echo "Linhas igual a zero!";
        }
    }
    
    header('Location: sistema.php');
   
?>