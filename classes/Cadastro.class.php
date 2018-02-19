<?php
	class Cadastro{
		public function cadastrar($nome, $end, $email, $senha, $tipo){
			//Tratamento das variáveis
			$nome=ucwords(strtolower($nome));
			$end=ucwords(strtolower($end));
			$senha=sha1($senha."paconstrushop");
			$tipo=ucwords(strtolower($tipo));
                        $margem='50';
			if($tipo == "Cliente"){
				$codtipo = '3';
			}else if($tipo == "Representante"){
				$codtipo = '1';
			}else $codtipo = '9';
			//Inserção no banco de dados
			$validaremail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
			$contar=mysql_num_rows($validaremail);
			if($contar == 0){
			$insert=mysql_query("INSERT INTO usuarios(nome, end, email, senha, nivel, status, mlucro)VALUES('$nome','$end','$email','$senha','$codtipo', 0,50)");}else{
			$flash="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
			}
			if(isset($insert)){
				$flash="Cadastro realizado com sucesso, aguarde a nossa aprovação!";
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}
	
                public function atualizar($id, $status, $codRep){
			//Tratamento das variáveis
			if($status == 0){
				$status = 1;
			}else if($status == "1"){
				$status = '0';
                }
                $filename = 'views/uploads/'.$codRep;
                if (!file_exists($filename)){
                    mkdir($filename) or die("erro ao criar diretório");
                }
			//Inserção no banco de dados
			$validarid=mysql_query("SELECT * FROM usuarios WHERE ID='$id'");
			$contar=mysql_num_rows($validarid);
			if($contar == 1){
			$update=mysql_query("UPDATE usuarios SET status='$status', codrepresentante='$codRep' WHERE ID='$id'");}else{
			$flash="ERROR! Atualização não realizada";
			}
			if(isset($update)){
				$flash="Atualização realizada com sucesso!";
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}
                public function alterarsenha($email,$senha){
			//Tratamento das variáveis
			$senhaNova=sha1($senha."paconstrushop");
			//Inserção no banco de dados
			$validaremail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
			$contar=mysql_num_rows($validaremail);
			if($contar == 1){
			$update=mysql_query("UPDATE usuarios SET senha='$senhaNova' WHERE email='$email'");}else{
			$flash="ERROR! Atualização não realizada";
			}
			if(isset($update)){
				$flash="Atualização realizada com sucesso!";
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}
                public function alterarmargemdelucro($email,$margeml){
			//Tratamento das variáveis
			
			$validaremail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
			$contar=mysql_num_rows($validaremail);
			if($contar == 1){
			$update=mysql_query("UPDATE usuarios SET mlucro='$margeml' WHERE email='$email'");}else{
			$flash="ERROR! Atualização não realizada";
			}
			if(isset($update)){
				$flash="Atualização realizada com sucesso!";
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}
        public function registrar($pessoa, $nome, $cpf_cnpj, $rg_ie, $ddd, $tel, $end, $mun, $est, $cep, $email, $tipo, $im){
			//Tratamento das variáveis
                        $nome=ucwords(strtolower($nome));
                        $mun=ucwords(strtolower($mun));
                        $end=ucwords(strtolower($end));
			$tipo=ucwords(strtolower($tipo));
			if($tipo == "Cliente"){
				$codtipo = '3';
			}else if($tipo == "Representante"){
				$codtipo = '1';
			}else $codtipo = '9';
			//Inserção no banco de dados
			$validaremail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
			$contar=mysql_num_rows($validaremail);
			if($contar == 0){
			$insert=mysql_query("INSERT INTO registrar (pessoa, nome, cpf_cnpj, rg_ie, ddd, telefone,  endereco, municipio, estado, cep, email, tipo, im, status) VALUES('$pessoa', '$nome', '$cpf_cnpj', '$rg_ie', '$ddd', '$tel', '$end', '$mun', '$est', '$cep', '$email', '$tipo', '$im', 0)"
);}else{
			$flash="Desculpe, mas já existe um usuário cadastrado com este e-mail em nossos registros!";
			}
			if(isset($insert)){
				$flash="Registro realizado com sucesso, aguarde a nossa aprovação!";
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}        
                
        public function insereCarrinho($user, $cod, $quantidade, $preco, $numcarrinho){
			//Tratamento das variáveis
			$cod=ucwords(strtoupper($cod));
			if(empty($user) || empty($cod) || empty($quantidade) || empty($preco) || empty($numcarrinho)){
                            $flash="Campo Vazio";
			//Inserção no banco de dados
                        } else {
                            
                       
			$insert=mysql_query("INSERT INTO carrinho-temp(usuario, codproduto, quantidade, preco, numcarrinho)VALUES('$user','$cod','$quantidade','$preco','$numcarrinho')");
                        
			if(isset($insert)){
				$flash="Produto inserido no carrinho com sucesso!";
			}else{
				if(empty($flash)){
				$flash="Desculpe, mas não foi possível inserir o produto no carrinho!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
        }      }  
	}

?>