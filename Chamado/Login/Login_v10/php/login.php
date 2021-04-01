<?php
	include("conexao.php");
	$CodLogin = $_POST['CodLogin'];
	$Senha = $_POST['Senha'];


	$sql=" SELECT * FROM tb_usu
			WHERE CodLogin = '$CodLogin'
			AND Senha = '$Senha' ";

	$result=mysqli_query($conecta,$sql);

		if($consulta=mysqli_fetch_array($result))
	{
		session_start();
		$_SESSION['usuario']=true;
		$_SESSION['Nome']=$consulta['Nome'];
		$_SESSION['acesso'] = $consulta['Funcao'];
		$_SESSION['id'] = $consulta['Id'];
		$_SESSION['sexo'] = $consulta['Sexo'];
		$_SESSION['clinica'] = $consulta['Clinica'];
		if ($_SESSION['acesso'] == "Adm") {
			header('location:../../../Dash/dash/inicio/inicio.php');
		}else{
			header('location:../../../Dash/dash/inicio/chamado.php');
		}
		
	}
	else{
			echo "<script>alert('Erro ao tentar logar. Tente novamente!'); document.location.href='../index.php';</script>";

	}
	mysqli_free_result($result);
	mysqli_close($conecta);
?>