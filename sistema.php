<?php 
include './php/protect.php';
require './php/config.php';

$sql_code = "SELECT * FROM carro";
$sql_query = $conect->query($sql_code) or die("Falha na execução do código SQL: " . $conect->error);

$carros = $sql_query->fetch_all();

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

        <!--Navegaçao Veiculos-->
        <nav>
            <ul>
                <li><a href="suv.html" class="link-nav">Suv</a></li>
                <li><a href="sedan.html" class="link-nav">Sedan</a></li>
                <li><a href="hatch.html" class="link-nav">Hatch</a></li>
                <li><a href="pickup.html" class="link-nav">Pick-up</a></li>
                <li><a href="sport.html" class="link-nav">Esportivo</a></li>
            </ul>
        </nav>

        <!--Conteúdo-->
        <aside>  
            <!--Box esquerda informações-->
            <section>
                <div class="titulo-veiculo">Novidades</div>
                <div class="descricao-veiculo">O Toyota Hilux SW4 é um SUV robusto e versátil, baseado na Pick-up Toyota Hilux. Reconhecido por sua durabilidade e confiabilidade, é ideal tanto para uso urbano quanto para aventuras off-road.Portanto,Além da sua robustez possui conforto e sofisticação de um SUV de alta gama, sendo uma escolha excelente para quem busca um veículo versátil e confiável.</div>
            </section>
            <!--Box direita imagem-->
            <article>
                <a href=""><img src="img/img suv/hilux_preta.png" alt="Novidade Hilux" class="img-hilux"></a>
            </article>
        </aside>
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