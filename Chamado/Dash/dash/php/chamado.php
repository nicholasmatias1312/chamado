<?php
	session_start();
	include("conexao.php");
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$nome = $_SESSION['Nome'];
	$clinica = $_SESSION['clinica'];
	date_default_timezone_set('America/Sao_Paulo');
	$data = date('d/m/Y H:i');
	
	
	$result_usuario = "INSERT INTO tb_chamado (Id, Titulo, Descricao, DataChamado, Status, NomeChamador, Clinica ) VALUES (null,'$titulo','$descricao','$data','Ativo','$nome','$clinica')";

if (mysqli_query($conecta,$result_usuario)) {
	echo "<script>alert('Chamado efetuado com sucesso!'); document.location.href='../inicio/inicio.php';</script> ";
				
			}else{
				echo "<script>alert('Erro ao tentar se cadastrar. Tente novamente!'); document.location.href='../inicio/chamado.php';</script>";
			}
	
			
	
	mysqli_close($conecta);
?>