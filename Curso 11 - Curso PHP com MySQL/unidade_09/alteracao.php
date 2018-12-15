o<?php require_once("../../db/conexao.php"); ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>
			<div id="janela_formulario">
				<form  action="alteracao.php" method="post">
					<h2>Alteração de Transportadoras</h2>
					<label for="nometransportadora">Nome da Transportador</label>
					<input type="text" value="" name="nometransportadora" id="nometransportadora">
					
					<label for="endereco">Endereço </label>
					<input type="text" value="" name="endereco" id="endereco"">
					
					<label for="telefone">Telefone</label>
					<input type="text" value="" name="telefone" id="telefone">
					
					<label for="cidade">Cidade</label>
					<input type="text" value="" name="cidade" id="cidade">
					
					<label for="estados">Estados</label>
					<select id="estados" name="estados">
					</select>
					<label for="cep">CEP</label>
					<input type="text" value="" name="cep" id="cep">
					
					<label for="cnpj">CPNJ</label>
					<input type="text" value="" name="cnpj" id="cnpj">
					
					<input type="submit" value="Confirmar alteração">
					
				</form>
			</div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>