<?php require_once("../../db/conexao.php"); ?>
<?php
	// Consulta a tabela de transportadoras
	$tr = "SELECT * ";
	$tr .= "FROM transportadoras ";
	if(isset($_GET["codigo"]) ) {
		$id = $_GET["codigo"];
		$tr .= "WHERE transportadoraID = {$id} ";
	}
	
	$con_transportadora = mysqli_query($conecta,$tr);
	if(!$con_transportadora) {
		die("Erro na consulta");
	}
	
	$info_transportadora = mysqli_fetch_assoc($con_transportadora);
	print_r($info_transportadora);
	// FIM Consulta a tabela de transportadoras
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
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