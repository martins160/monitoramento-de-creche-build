<?php
session_start();
include_once("conexao.php");


if((isset($_POST['usuario']) && isset($_POST['senha']))){
	$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
	$senha   = mysqli_real_escape_string($conn, $_POST['senha']);
	$senha   = md5($senha);



	//buscar no banco de dados
	$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' && senha='$senha' LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$resultado = mysqli_fetch_assoc($result);

	$_SESSION['nivelUser'] = $resultado['nivel'];
	$_SESSION['nomeUser']  = $resultado['nome'];


	if(empty($resultado)){
		$_SESSION['loginErro'] = "Usuário ou Senha inválidos!";
		header("Location: ../login.php");
	}elseif($_SESSION['nivelUser'] == "admin"){		
		header("Location: ../admin.php");
	}else{
		header("Location: ../painel.php");
	}



	/*if(($senha == "123") && ($usuario == "admin")){
		header("Location: admin.php");
	}else{
		$_SESSION['loginErro'] = "Usuário ou Senha inválidos!";
		header("Location: index.php");
	}*/


}else{
	$_SESSION['loginErro'] = "Acesso Restrito!";
	header("Location: ../login.php");
}

//$usuariot = $_POST['usuario'];
//$senhat   = $_POST['senha'];

//echo $usuariot.'-'.$senhat;

