<?php


if($startaction == 1 && $acao == "envorcamento"){
		$codCliente=$_POST["codCliente"];
		$codProduto=$_POST["codProduto"];
		$qtdProduto=$_POST["qtdProduto"];
               
                if(empty($codCliente) || empty($codProduto) || empty($qtdProduto)){
			$msg="Preencha todos os campos!";
		}
		//Todos os campos preenchidos
		else{
                   
                    $arrayP = array($codProduto);
                    $arrayQ = array($qtdProduto);
                    }
                $array[PRODUTO][QUANTIDADE] = array($arrayP,$arrayQ);       
                $encodedvar = json_encode($array);


                        }
