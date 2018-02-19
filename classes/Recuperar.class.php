<?php
	class Recuperacao{
		public function recuperar($email){
			$buscar=mysql_query("SELECT * FROM usuarios WHERE email='$email' LIMIT 1");
			if(mysql_num_rows($buscar) == 1){
				$dados=mysql_fetch_array($buscar);
                                $chave = sha1($dados["ID"]).$dados["senha"];
                                $flash = "Nova chave ".$chave;
                        } else {
                                $flash = "E-mail não encontrado!";
                        }
                            
			echo $flash;	
		}
	
	}

?>