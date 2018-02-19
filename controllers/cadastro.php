<?php
if($startaction == 1 && $acao == "cadastrar"){
		$nome=$_POST["nome"];
		$end=$_POST["end"];
		$email=$_POST["email"];
		$senha=$_POST["senha"];
                $tipo=$_POST['tipo'];
                if(!isset($tipo)){
                    $msg="Selecione o tipo de cadastro!";     
                }else{ if(empty($nome) || empty($end) || empty($email) || empty($senha)){
			$msg="Preencha todos os campos!";
		}
		//Todos os campos preenchidos
		else{
			//Email válido
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				//Senha inválida
				if(strlen($senha) < 8){
					$msg="As senhas devem ter no mínimo oito caracteres!";
				}
				//Senha válida
				else{
					//Executa a classe de cadastro
 
					$conectar=new Cadastro;
					echo"<div class=\"flash\">";
					$conectar=$conectar->cadastrar($nome, $end, $email, $senha, $tipo); 
					echo"</div>";
				}
			}
			//E-mail inválido
			else{
				$msg="Digite seu e-mail corretamente!";
			}
		}
}

                        }

?>