<?php

if($startaction == 1 && $acao == "inserirCarrinho"){
		$usuario=$_POST["usuario"];
		$codproduto=$_POST["codproduto"];
		$quantidade=$_POST["qtd"];
		$preco=$_POST["prc"];
                $numcarrinho=$_POST['numcarrinho'];
			//Email válido
		
					//Executa a classe de cadastro
 
					$conectar=new Cadastro;
					echo"<div class=\"flash\">";
					$conectar=$conectar->insereCarrinho($usuario, $codproduto, $quantidade, $preco, $numcarrinho);
					echo"</div>";
				}
			

		


                        

?>