<?php
if($startaction == 1 && $acao == "alterarsenha"){
		$email=$_POST["email"];
		$senha=$_POST["senha"];
		$senhaRepetida=$_POST["senhaRepetida"];
                
		if(empty($email) || empty($senha) || empty($senhaRepetida)){
                    echo "<div class=\"flash\">";
                                $flash = "Preencha todos os campos!";
				echo $flash;
				echo"</div>";
			
		}else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL) || $senha != $senhaRepetida ){
				echo "<div class=\"flash\">";
                                $flash = "Preencha corretamente os campos solicitados!";
				echo $flash;
				echo"</div>";
			}else{
            
                
            	$conectar=new Cadastro;
		echo"<div class=\"flash\">";
		$conectar=$conectar->alterarsenha($email, $senha); 
		echo"</div>";
	}
		}
				}

        


?>