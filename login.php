<?php
include('./php/config.php');

$falha = '';
if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        $falha = 'Preencha seu e-mail';
    } else if(strlen($_POST['senha']) == 0) {
        $falha = "Preencha sua senha";
    } else {

        $email = $conect->real_escape_string($_POST['email']);
        $senha = $conect->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM vendedor WHERE EMAIL_VENDEDOR = '$email' AND SENHA_VENDEDOR = '$senha'";
        $sql_query = $conect->query($sql_code) or die("Falha na execução do código SQL: " . $conect->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['nome'] = $usuario['NOME_VENDEDOR'];

            header("Location: sistema.php");

        } else {
            $falha = "Falha ao logar! E-mail ou senha incorretos";
        }

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
                        <li><a href="login.php" class="link-menu" ><i class="fa-solid fa-circle-user"></i> Login</a></li>
                        <li><a href="faleconosco.html" class="link-menu" ><i class="fa-solid fa-phone"></i> Fale Conosco</a></li>
                    </ul>
                </div>
            </div>
            
            <!--Logo Principal-->
            <div id="logo">
                <!--Logo imgagem-->
                <a href="index.html" class="link-home"><div class="logo1"></div></a>
                <!--Logo texto-->
                <div class="logo2"><a href="index.html" class="link-home">Estacio Autos</a></div>
            </div>
            
            <!--Botão Login-->
            <div id="login">
            <!--Tiago-->    
            </div>    
        </header>
        
        <!--Linha Dividir Cabeçalho-->
        <div class="linha"></div>

        <br><br>

        <!--Conteúdo Login-->
        <div class="login-box">
            <div class="form-box">
                <h2>Login</h2><hr class="second">
                    <form action="" method="POST">
                        <div class="input-box">
                            <span>E-mail</span>
                            <input type="email" name="email" placeholder="email@.com" require>
                        </div>

                        <div class="input-box">
                            <span>Senha</span>
                            <input type="password" name="senha" placeholder="Senha" require>
                        </div>

                        <div class="lembrar">
                            <label>
                                <input type="checkbox"> Lembrar de mim
                            </label>
                            <a href="#">Esqueceu a Senha?</a>
                        </div>
                        <?php echo '<div class="statusLogin">'.$falha.'<div>';?>
                        <div class="input-box">
                            <input type="submit" value="Entrar" class="input-button">
                        </div>
                            
                        <div class="inscrever">
                            <p>Não tem uma conta? <a href="##">Inscrever-se</a></p>
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
                    <li><a href="" class="link-footer"><i class="fa-solid fa-house"></i> Home</a></li>
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