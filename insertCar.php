<?php 
    include './php/protect.php';
    require './php/config.php';
    $falha = "<br>";

    if(isset($_POST['enviar']))
        {
            $modelo = $_POST['modelo'];
            $categoria = $_POST['categoria'];
            $cor = $_POST['cor'];
            $ano = $_POST['ano'];
            $preco = $_POST['preco'];
            $quilometragem = $_POST['quilometragem'];
            $placa = $_POST['placa'];

            $modeloValidate = htmlspecialchars($modelo, ENT_QUOTES);
            $categoriaValidate = htmlspecialchars($categoria, ENT_QUOTES);
            $corValidate = htmlspecialchars($cor, ENT_QUOTES);
            $anoValidate = htmlspecialchars($ano, ENT_QUOTES);
            $precoValidate = htmlspecialchars($preco, ENT_QUOTES);
            $quilometragemValidate = htmlspecialchars($quilometragem, ENT_QUOTES);
            $placaValidate = htmlspecialchars($placa, ENT_QUOTES);

            if ($modelo === '' or $categoria === '' or $cor === '' or $ano === '' or $preco === '' or $quilometragem === '' or $placa === '') {
                $falha = "Preencha todos os campos!";
            } else {
                $resultInsert = mysqli_query($conect, "INSERT 
                INTO `lojacarro`.`carro` (`MODELO_CARRO`, `TIPO_CARRO`, `COR_CARRO`, `ANO_CARRO`, `PRECO_CARRO`, `QUILOMETRAGEM_CARRO`, `PLACA_CARRO`)
                VALUES ('$modeloValidate','$categoriaValidate','$corValidate',$anoValidate,$precoValidate,$quilometragemValidate,'$placaValidate')");

                header('Location: sistema.php');
            }
        }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estacio Autos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logoestacio.jpg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/14e67e3ac1.js" crossorigin="anonymous"></script>
</head>
<body> 
    <main>
        <!--Cabeçalho--> 
        <header>
            <!--Menu-->
            <div id="menu">
                <!--Botão Menu-->
                <div id="button-menu">
                    <span id="span-button" onclick="clickMenu()" >&#9776; Menu</span>
                </div>
                <!--Lista Menu-->
                <div id="menu-itens">
                    <ul>     
                        <li><a href="index.html" class="link-menu" ><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="logout.php" class="link-menu" ><i class="fa-solid fa-circle-user"></i> Logout</a></li>
                        <li><a href="faleconosco.html" class="link-menu" ><i class="fa-solid fa-phone"></i> Fale Conosco</a></li>
                    </ul>
                </div>
            </div>
            
            <!--Logo Principal-->
            <div id="logo">
                <!--Logo imgagem-->
                <a href="sistema.php" class="link-home"><div class="logo1"></div></a>
                <!--Logo texto-->
                <div class="logo2"><a href="sistema.php" class="link-home">Estacio Autos</a></div>
            </div>
            
            <!--Botão Login-->
            <div id="login">
                <a href="#" class="link-login"><i class="fa-solid fa-circle-user"></i> <?php echo $_SESSION['nome']; ?> </a>
                <a href="logout.php" class="link-login"> - Sair</a>
            </div>    
        </header>
        
        <!--Linha Dividir Cabeçalho-->
        <div class="linha"></div>

        <!--Conteúdo Login-->
        <div class="login-box">
            <div class="form-box">
                <h2>Adicionar Veículo</h2>
                <hr class="second">
                <form action="" method="POST">
                    <div class="input-box">
                        <Label for="modelo">Modelo do veículo:</Label>
                        <input type="text" name="modelo" require>
                    </div>
                    <div class="input-box">
                        <label for="categoria">Categoria:</label>
                        <input type="text" name="categoria" require>
                    </div>
                    <div class="input-box">
                        <label for="cor">Cor:</label>
                        <input type="text" name="cor" require>
                    </div>
                    <div class="input-box">
                        <label for="ano">Ano:</label>
                        <input type="number" name="ano" require>
                    </div>
                    <div class="input-box">
                        <label for="preco">Preço:</label>
                        <input type="number" name="preco" require>
                    </div>
                    <div class="input-box">
                        <label for="quilometragem">Quilometragem:</label>
                        <input type="number" name="quilometragem" require>
                    </div>
                    <div class="input-box">
                        <label for="placa">Placa:</label>
                        <input type="text" name="placa" require>
                    </div>

                    <?php echo '<div class="statusLogin">'.$falha.'<div>';?>
                    <div class="input-box">
                        <input type="submit" name="enviar" value="&#10010;" class="input-button">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!--Ródape-->
    <footer>
        <!--Rodapé parte 1-->
        <div id="rodape1">
            <div id="logo2">
                <!-- Logo icone3 -->
                <div class="logo3"></div>
                <!-- Logo texto4 -->
                <div class="logo4">Estacio Autos</div>
            </div>

            <!--Links Rodapé-->
            <div id="link-footer">
                <ul>
                    <li><a href="index.html" class="link-footer"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="faleconosco.html" class="link-footer"><i class="fa-solid fa-phone"></i> Fale Conosco</a></li>
                </ul>
            </div>
            
            <!--Midias-->
            <div id="midia">
                <ul>
                    <li><a href="https://www.whatsapp.com/" target="_blank" class="link-what"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://www.facebook.com/" target="_blank" class="link-face"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank" class="link-insta"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank" class="link-twit"><i class="fa-brands fa-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <!--Rodapé parte 2-->
        <div id="rodape2">
            <ul>
                <li>Condições para uso</li>
                <li>Política de Privacidade</li>
                <li>Proteção de Dados</li>
                <li>Contrato de licença</li>
                <li>© 2024 Estacio Autos</li>
            </ul>
        </div>
        
    </footer>  
     <!--Java Script-->
    <script src="js/script.js"></script>
</body>
</html>