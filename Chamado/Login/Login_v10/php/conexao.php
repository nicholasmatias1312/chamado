<?php

	$conecta=mysqli_connect("localhost","osuper","Suporte2021")
	or print (mysqli_error());

	mysqli_select_db($conecta,"chamado")
	or print(mysqli_error());
?>