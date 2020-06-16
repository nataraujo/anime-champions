<?php
session_start();//Inicializar a sessão com PHP
include'conexao.php';
//Verificar se está vindo a variável id pela URL
if(isset($_GET['id'])){
	//Verificar se existe o COOKIE 'voto_cont', 
	//caso exista o usuário já votou e o voto não deve ser contabilizao e acessa o IF
	//Senão acessa o ELSE para somar o voto
	if(isset($_COOKIE['voto_cont'])){
		//Criar a variável global com a mensagem de sucesso
		$_SESSION['msg'] = "<span style='color: red'>Você já votou!</span>";
		//Redirecionar o usuário com PHP para a página index.php
		header("Location: index.php");
	}else{
		//Criar o COOKIE com PHP para proibir novo voto em 5 segundos
		setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 5);
		//Criar a QUERY UPDATE para acrescentar o voto no banco de dados
		 $sql = "UPDATE lutadores SET nota=nota + 1
		WHERE id ='".$_GET['id']."'"; 
		//Executar a QUERY UPDATE para acrescentar o voto no banco de dados
		$r_voto = mysqli_query($conexao, $sql);
		
		//Validar com mysqli_affected_rows a inserção do voto no banco de dados
		if(mysqli_affected_rows($conexao)){
			//Criar a variável global com a mensagem de sucesso
			$_SESSION['msg'] = "<span style='color: green'>Voto recebido com sucesso!</span>";
			//Redirecionar o usuário com PHP para a página index.php
			header("Location: index.php");
		}else{
			//Criar a variável global com a mensagem de sucesso
			$_SESSION['msg'] = "<span style='color: red'>Erro ao votar!</span>";
			//Redirecionar o usuário com PHP para a página index.php
			header("Location: index.php");
		}
	}
}