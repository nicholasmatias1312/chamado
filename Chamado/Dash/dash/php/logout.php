<?php
 
session_start(); //iniciamos a sessão que foi aberta
 
session_destroy(); //destruimos a sessão ;)
 

 
 
/*aqui você pode redirecionar para uma determinada página*/
echo "<script>alert('Deslogado. Até breve!'); document.location.href='../../../login/Login_v10/index.php';</script>";
 
?>