<?php require_once("../../db/conexao.php"); ?>
<?php
	if ( isset( $_POST["usuario"] ) ) {
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];
		
		echo $usuario . "<br>";
		echo $senha . "<br>";
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo_andes.gif">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>
			<div id="janela_login">
				<form action="login.php" method="post">
					<h2>Tela de Login</h2>
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="senha" placeholder="Senha">
					<input type="submit" value="Login">
				</form>
			</div>
            
        </main>

        <footer>
            <div id="footer_central">
                <p>ANDES &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>