<?php
if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){
	$logado=1;
	$nivel=$_SESSION["nivel"];
	$codrepresentante=$_SESSION["codrepresentante"];
}
?>
