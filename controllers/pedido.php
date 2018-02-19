<?php

if($startaction == 1 && $acao == "gerarPedido"){
    //PEGA OS DADOS ENVIADOS PELO FORMULÁRIO 
                $codrepresentante=$_POST["rep"];
                $codcli=$_POST["codcli"];
		$codpro=$_POST["codpro"];
                $data = Date("Y/m/d");
                $dia=date('Ymd');
		
if(empty($codrepresentante) || empty($codcli) || empty($codpro)){
			$msg="Preencha todos os campos!";
		}
		//Todos os campos preenchidos
		else{   
                    
                $conectar= new Pedido;  
                echo"<div class=\"flash\">";
                $conectar=$conectar->cadastrarPedido($codrepresentante,$codcli); 
                echo"</div>";
                                    
//PREPARA O CONTEÚDO A SER GRAVADO
$buscapedido=mysql_query("SELECT * FROM pedidos ORDER BY ID_Pedido DESC LIMIT 1");   
$resultadobusca=mysql_fetch_array($buscapedido);
$ID_Pedido = $resultadobusca["ID_Pedido"];

$arquivo = "Pedido_".$ID_Pedido."_".$codcli."_".$dia.".txt"; 
$query=mysql_query("UPDATE pedidos SET arqPed ='$arquivo' WHERE ID_Pedido ='$ID_Pedido'");
				

$conteudo = "Código do representante: $codrepresentante \r\nCódigo do cliente: $codcli \r\nData: $data\r\nCódigo do Produto: - Quantidade:\r\n$codpro.\r\n"; 
//ARQUIVO TXT 

$gravaArquivo = "Pedidos";
$gravaArquivo .= "\\";
$gravaArquivo .= $arquivo;
//TENTA ABRIR O ARQUIVO TXT 
$abrirArq = fopen($gravaArquivo, "a+");
if (!$abrirArq) { 
echo "Erro abrindo arquivo ($arquivo)"; 
exit; 
} 

//ESCREVE NO ARQUIVO TXT 
if (!fwrite($abrirArq, $conteudo)) { 
print "Erro escrevendo no arquivo ($arquivo)"; 
exit; 
} 

echo "Arquivo gravado com Sucesso !!<p></p>";
                
//}

//FECHA O ARQUIVO  
fclose($abrirArq);  

}
      

}
?>