<?php require_once("../../db/conexao.php"); ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/crud.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="janela_formulario">
				<form action="inserir_transportadoras.php" method="post">
					<input type="text" name="nometransportadora" placeholder="Nome da transportadora : ">
					<input type="text" name="endereco" placeholder="Digite o endereço : ">
					<input type="text" name="telefone" placeholder="Telefone : ">
					<input type="text" name="cidade" placeholder="Cidade : ">
					<select name="estados">
						<option value="1">Acre</option>
						<option value="2">Amapa</option>
						<option value="3">Amazonia</option>
					</select>
					<input type="text" name="cep" placeholder="CEP : ">
					<input type="text" name="cnpj" placeholder="CNPJ : ">
					<input type="submit" value="inserir" >
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