<?php
	include("conexao.php");
	$Codigo = $_POST['cod'];
	$Email = $_POST['email'];
	$nome = $_POST['nome'];
	$clinica = $_POST['clinica'];
	$datanasc = $_POST['data'];
	$senha = md5($_POST['senha']);
	$tel = $_POST['tel'];
	$sexo = $_POST['sexo'];
	$funcao = $_POST['funcao'];
	
	
	$result_usuario = "INSERT INTO tb_usu (Id, Nome, Email, DataNascimento, Senha, Clinica, CodLogin, Funcao, TelClin, Sexo) VALUES (null,'$nome','$Email','$datanasc','$senha','$clinica','$Codigo','$funcao','$tel', '$sexo')";

if (mysqli_query($conecta,$result_usuario)) {
	//echo "<script>alert('Cadastro efetuado com sucesso!'); document.location.href='../inicio/inicio.php';</script> ";
				
			}else{
				//echo "<script>alert('Erro ao tentar se cadastrar. Tente novamente!'); document.location.href='../inicio/usuario.php';</script>";
			}
	
			
	
	mysqli_close($conecta);
?>