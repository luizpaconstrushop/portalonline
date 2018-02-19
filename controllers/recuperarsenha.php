<?php
if($startaction == 1 && $acao == "recuperarsenha"){
		//Dados
		$email=addslashes($_POST["email"]);
			
		if(empty($email)){
                    echo "<div class=\"flash\">";
                                $flash = "Preencha seu e-mail!";
				echo $flash;
				echo"</div>";
			
		}else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo "<div class=\"flash\">";
                                $flash = "Digite seu e-mail corretamente!";
				echo $flash;
				echo"</div>";
			}else{
				//Executa a busca pelo usuário
				$recuperacao=new Recuperacao;
				echo "<div class=\"flash\">";
				$recuperacao=$recuperacao->recuperar($email); 
				echo"</div>";
                                
				
			}
		}
}
?>