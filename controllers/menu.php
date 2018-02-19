<?php
if(isset($logado)){
                //Home button.
        if(($startaction == 1 && $acao == "home")||($startaction == 1 && $acao == "")){
            header('Location: http://portal.paconstrushop.com.br/index.php');
        }else{
        //Registra usuário e ação no banco de logs.
        $codrepresentante=$_SESSION["codrepresentante"];
        $x= $codrepresentante.$acao;
	include('crialog.php');
        //Catálogos.
      	if($startaction == 1 && $acao == "mostruarioMiluz"){
            header("Location: http://portal.paconstrushop.com.br/views/mostruario-miluz.php");
        }
        if($startaction == 1 && $acao == "mostruarioOrionPlacas"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-orion-placas.php");
         }
        if($startaction == 1 && $acao == "mostruarioOrionModulos"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-orion-modulos.php");
        }
		if($startaction == 1 && $acao == "mostruarioOrionAcessorios"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-orion-acessorios.php");
        }
		if($startaction == 1 && $acao == "mostruarioEasy9IDR"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-easy9-idr.php");
         }
        if($startaction == 1 && $acao == "mostruarioEasy9DPS"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-easy9-dps.php");
        }
		if($startaction == 1 && $acao == "mostruarioEasy9Quadros"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-easy9-quadros.php");
        }
		if($startaction == 1 && $acao == "mostruarioTeSysContator"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-tesys-contator.php");
        }
		if($startaction == 1 && $acao == "mostruarioTeSysChave"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-tesys-chaves.php");
        }
		if($startaction == 1 && $acao == "mostruarioDexon"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-dexon.php");
        }
		if($startaction == 1 && $acao == "mostruarioGalaxyLEDBulbo"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-galaxy-lampadas-led-bulbo.php");
        }
		if($startaction == 1 && $acao == "mostruarioGalaxyRefletor"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-galaxy-refletores.php");
        }
		if($startaction == 1 && $acao == "mostruarioMarGirius"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-margirius.php");
        }
		if($startaction == 1 && $acao == "mostruarioSegurimax"){		
        header("Location: http://portal.paconstrushop.com.br/views/mostruario-segurimax.php");
        }
		
        //Orcamentos
        if($startaction == 1 && $acao == "orcamento"){
        if($nivel != 3){
		if($codrepresentante == 000002 || $codrepresentante == 000028 || $codrepresentante == 000033){
		header('Location: http://portal.paconstrushop.com.br/views/orcamentoBalcao.php'); 	
		}else{
		header('Location: http://portal.paconstrushop.com.br/views/orcamento.php'); 	
		}
        } else {
        header("Location: http://portal.paconstrushop.com.br/views/orcamento.php");
                }
        }
        //Upload
        if($startaction == 1 && $acao == "upload"){
                    header("Location: views/upload.php"); 
               }
        //Pesquisar Cliente
        if($startaction == 1 && $acao == "pesquisarCliente"){
        header("Location: views/pesquisaCliente.php"); 
        }       
        //Pesquisar Produtos
        if($startaction == 1 && $acao == "pesquisarProduto"){
        
		header("Location: views/pesquisaProduto.php");			
        } 
               
               //Contato
               if($startaction == 1 && $acao == "Contato"){
                header("Location: views/Contato.php");
               } 
               //Meu Carrinho
               if($startaction == 1 && $acao == "meuCarrinho"){
                header("Location: views/gerenciarCarrinho.php");
               } 
               //Funções do Usuário
               if($startaction == 1 && $acao == "meusDados"){
                header("Location: views/dadosCadastrais.php");
               } 
               if($startaction == 1 && $acao == "novaSenha"){
                header("Location: views/alterarsenha.php");
               }
               
        
              /* if($startaction == 1 && $acao == "altmlucro"){
        if($nivel != 3){
        header("Location: views/alterarmargemdelucro.php");
}}
//
        if($startaction == 1 && $acao == "tutoriais"){
            header("Location: views/tutoriais.php");
        }
        if($startaction == 1 && $acao == "aprovaOrc"){
            header("Location: views/aprovaOrcamento.php");
        }
        if($startaction == 1 && $acao == "gerenciarRepresentante"){
        }
        if($startaction == 1 && $acao == "meuVendedor"){
        if($nivel == 3){
                    header("Location: views/meuVendedor.php");
		}
        }
*/
        }

      } 

?>
