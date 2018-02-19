<?php
if($startaction == 1 && $acao == "atualizar"){
		$id=$_POST["idRep"];
		$status=$_POST["statusRep"];
		$codRep=$_POST["codRep"];

            	$conectar=new Cadastro;
		echo"<div class=\"flash\">";
		$conectar=$conectar->atualizar($id, $status, $codRep); 
		echo"</div>";
				}

        

?>