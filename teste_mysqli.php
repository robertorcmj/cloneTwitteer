<?php 

	require_once('db.class.php');


	$sqlAcesso = "SELECT * FROM usuarios ";

	$objDbAcesso = new db();
	$linkAcesso = $objDbAcesso->conecta_mysql();

	$resultado_id = mysqli_query($linkAcesso, $sqlAcesso);

	if($resultado_id)
	{
		$dados_usuario = array();

		while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			$dados_usuario[] = $linha;
		}
		foreach($dados_usuario as $usuario){
			var_dump($usuario);
			echo "<br/>";
		}
		
	}
	else
	{
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

 ?>