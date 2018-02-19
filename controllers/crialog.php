<?php
 
 
//ABAIXO CRIAMOS A FUNÇÃO QUE IRÁ AUTOMATIZAR A CRIAÇÃO DOS LOGS NO BANCO
function logs($x){     // RECEBE POR PARAMETRO A VARIÁVEL $x QUE SERÁ A MENSAGEM A SER GRAVADA NO BANCO DE DADOS. 
 
	$IP = $_SERVER['REMOTE_ADDR']; // SALVA O IP DO VISITANTE
	$HORA = date('Y-m-d H:i:s'); // SALVA A DATA E HORA ATUAL (formato MySQL)
        $user = substr($x,0,6);
        $x = substr($x, 6);
	// MONTANDO A QUERY PARA INSERIR NO BANCO DE DADOS
	$sql = "INSERT INTO LOGS (HORA,IP,MENSAGEM,USER) VALUES ('$HORA', '$IP', '$x','$user')";  //ONDE "$x" É A VARIÁVEL QUE ARMAZENA A MENSAGEM QUE VOCÊ QUER INSERIR NO BANCO
 
 
	if (mysql_query($sql)or die(mysql_error())){ // EXECUTA A QUERY OU MOSTRA O ERRO, CASO OCORRA. 
			 return true;   //VERIFICA  SE DEU CERTO, SE SIM RETORNA TRUE
	}   								
 
	else{
			 return false; // VERIFICA  SE DEU ERRADO, SE SIM,  RETORNA FALSE    
 
	}
 
 
}
 
 
logs($x); // AQUI CHAMAMOS A FUNÇÃO QUE CRIAMOS PARA EXECUTAR A INSERÇÃO NO BANCO DE DADOS
 
 
	//SE REMOVER O COMENTÁRIO DO CÓDIGO  ABAIXO, PODERÁ IMPRIMIR A MENSAGEM DIRETAMENTE NO NAVEGADOR E CONFERIR SE O PROCESSO FOI REALIZADO COM SUCESSO OU NÃO
 /*  << INÍCIO DO COMENTÁRIO
 
 
if(logs($x)){   // VERIFICA O RETORNO DA FUNÇÃO, SE DEU CERTO OU ERRADO
 
	echo "Logs inseridos no banco";  //  EM CASO DE TER REALIZADO FUNÇÃO CORRETAMENTE, MOSTRA NO NAVEGADOR "Logs inseridos no banco"
 
 
} 
 
else{
 
	echo "Logs não inseridos no banco"; //  EM CASO DE NÃO TER REALIZADO FUNÇÃO CORRETAMENTE, MOSTRA NO NAVEGADOR "Logs não inseridos no banco""
} 
 */ //FIM DO COMENTÁRIO
 
 // FECHA A CONEXÃO COM O MySQL
 
?>