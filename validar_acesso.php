<?php 
	session_start();

	require_once('db.class.php');

	$usuarioAcesso = $_POST['usuario'];
	$senhaAcesso = md5($_POST['senha']);

	$sqlAcesso = "SELECT id, usuario FROM usuarios WHERE usuario ='$usuarioAcesso' AND senha = '$senhaAcesso' ";

	$objDbAcesso = new db();
	$linkAcesso = $objDbAcesso->conecta_mysql();

	$resultado_id = mysqli_query($linkAcesso, $sqlAcesso);

	if($resultado_id)
	{
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){

			$_SESSION ['id_usuario'] = $dados_usuario['id'];
			$_SESSION ['usuario'] = $dados_usuario['usuario'];

			header('Location: home.php');
		} else{
			header('Location: index.php?erro=1');
		}
	}
	else
	{
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

	


 ?>