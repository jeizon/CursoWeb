<?php require_once("../../db/conexao.php"); ?>
<?php
	session_start( );
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
	<?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            
        </main>
	
	<?php include_once("_incluir/rodape.php"); ?>
	</body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>