<?php
if($startaction == 1 && $acao == "alterarmlucro"){
		$email=$_POST["email"];
		$margeml=$_POST["margeml"];
		
                
		if(empty($email) || empty($margeml)){
                    echo "<div class=\"flash\">";
                                $flash = "Preencha todos os campos!";
				echo $flash;
				echo"</div>";
			
		}else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "<div class=\"flash\">";
                                $flash = "Preencha corretamente os campos solicitados!";
				echo $flash;
				echo"</div>";
			}else{
            
                
            	$conectar=new Cadastro;
		echo"<div class=\"flash\">";
		$conectar=$conectar->alterarmargemdelucro($email, $margeml); 
		echo"</div>";
	}
		}
				}

        


?>