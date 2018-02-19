<?php
if($startaction == 1 && $acao == "aprovar"){
		$email=$_POST["email"];
		$mlucro=$_POST["margeml"];

            	$conectar=new Cadastro;
		echo"<div class=\"flash\">";
		$conectar=$conectar->alterarmargemdelucro($email, $mlucro); 
		echo"</div>";
		
}
?>