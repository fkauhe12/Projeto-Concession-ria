<?php
    include_once('./php/config.php');
    if(isset($_POST['update']))
    {
        $modelo = $_POST['modelo'];
        $categoria = $_POST['categoria'];
        $cor = $_POST['cor'];
        $ano = $_POST['ano'];
        $preco = $_POST['preco'];
        $quilometragem = $_POST['quilometragem'];
        $placa = $_POST['placa'];
        
        //var_dump($placa);

        $modeloValidate = htmlspecialchars($modelo, ENT_QUOTES);
        $categoriaValidate = htmlspecialchars($categoria, ENT_QUOTES);
        $corValidate = htmlspecialchars($cor, ENT_QUOTES);
        $anoValidate = htmlspecialchars($ano, ENT_QUOTES);
        $precoValidate = htmlspecialchars($preco, ENT_QUOTES);
        $quilometragemValidate = htmlspecialchars($quilometragem, ENT_QUOTES);
        $placaValidate = htmlspecialchars($placa, ENT_QUOTES);

        $sqlUpdate = "UPDATE carro 
        SET 
        MODELO_CARRO='$modeloValidate',
        TIPO_CARRO='$categoriaValidate',
        COR_CARRO='$corValidate',
        ANO_CARRO='$anoValidate',
        PRECO_CARRO='$precoValidate',
        QUILOMETRAGEM_CARRO='$quilometragemValidate',
        PLACA_CARRO='$placaValidate'
        WHERE PLACA_CARRO='$placaValidate'";

        $resultUpdate = $conect->query($sqlUpdate);
    }

    header('Location: sistema.php');
?>