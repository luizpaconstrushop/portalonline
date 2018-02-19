<?php
	class Pedido{
		public function cadastrarPedido($codrepresentante,$codcli){
			$dia=date('Ymd');
			//Inserção no banco de dados
			
			$insert=mysql_query("INSERT INTO pedidos(codrepresentantePed, codcliPed, dataPed, statusPed)VALUES('$codrepresentante','$codcli','$dia', 0)");
		
			if(isset($insert)){
                                $flash="Pedido realizado com sucesso, aguarde a nossa aprovação!";
                                
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}
	
                
	}

?>