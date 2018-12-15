<?php require_once("../../db/conexao.php"); ?>
<?php
	// insercao no banco
	if (isset($_POST["nometransportadora"])) {
		$nome			= $_POST["nometransportadora"];
		$endereco		= $_POST["endereco"];
		$telefone		= $_POST["telefone"];
		$cidade		= $_POST["cidade"];
		$estados		= $_POST["estados"];
		$cep		= $_POST["cep"];
		$cnpj		= $_POST["cnpj"];
		
		$inserir = "INSERT INTO transportadoras ";
		$inserir .= "(nometransportadora,endereco,telefone,cidade,estadoID,cep,cnpj) ";
		$inserir .= "VALUES ";
		$inserir .= "('$nome','$endereco','$telefone','$cidade',$estados,'$cep','$cnpj') ";
		
		$operacao_inserir = mysqli_query($conecta,$inserir);
		if (!$operacao_inserir) {
			die("Erro no banco");
		}
	}
 
	// selecao de estados
	$select = "SELECT estadoID, nome ";
	$select .= "FROM estados ";
	$lista_estados = mysqli_query($conecta, $select);
	if (!$lista_estados) {
		die("Erro no banco");
	}

	
?>
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
						<?php
							while($linha = mysqli_fetch_assoc($lista_estados)) {
						?>
							<option value="<?php echo utf8_encode($linha["estadoID"]); ?>">
								<?php echo utf8_encode($linha["nome"]); ?>
							</option>
						<?php
							}
						?>
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