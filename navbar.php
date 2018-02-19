<?php

        $home="http://localhost/prototype/index.php";
        $codrepresentante=$_SESSION["codrepresentante"];
        $nivel=$_SESSION["nivel"];
        $email=$_SESSION["email"];

                    $buscarusuarios=mysql_query("SELECT nome FROM usuarios WHERE email='$email'") or die(mysql_error());
                            $linha=mysql_fetch_array($buscarusuarios);
                            $user=$linha["nome"];

                               ?>
<div id='cssmenu'>
<ul>
  <form action="../index.php?acao=home" method="post">
    <input type="submit" class="menuBtn" value="Home"></>
  </form>
  <li class='active has-sub'><a href='#'><span>Catálogos</span></a>
    <ul>
      <form action="../index.php?acao=mostruarioMiluz" method="post">
        <input type="submit" class="menuBtn-sub" value="Miluz"></>
      </form>
	   <li class='active has-sub'><a href='#'><span>Orion</span></a>
	   <ul>
      <form action="../index.php?acao=mostruarioOrionPlacas" method="post">
        <input type="submit" class="menuBtn-sub" value="Placas"></>
      </form>
	  <form action="../index.php?acao=mostruarioOrionModulos" method="post">
        <input type="submit" class="menuBtn-sub" value="Módulos"></>
      </form>
	  <form action="../index.php?acao=mostruarioOrionAcessorios" method="post">
        <input type="submit" class="menuBtn-sub" value="Acessórios"></>
      </form>
	  </ul>
  </li>
  <li class='active has-sub'><a href='#'><span>Easy9</span></a>
	   <ul>
      <form action="../index.php?acao=mostruarioEasy9IDR" method="post">
        <input type="submit" class="menuBtn-sub" value="iDR"></>
      </form>
	  <form action="../index.php?acao=mostruarioEasy9DPS" method="post">
        <input type="submit" class="menuBtn-sub" value="DPS"></>
      </form>
	  <form action="../index.php?acao=mostruarioEasy9Quadros" method="post">
        <input type="submit" class="menuBtn-sub" value="Quadros e Acessórios"></>
      </form>
	  </ul>
  </li>
  <li class='active has-sub'><a href='#'><span>TeSys</span></a>
	   <ul>
      <form action="../index.php?acao=mostruarioTeSysContator" method="post">
        <input type="submit" class="menuBtn-sub" value="Contatores"></>
      </form>
	  <form action="../index.php?acao=mostruarioTeSysChave" method="post">
        <input type="submit" class="menuBtn-sub" value="Chaves de Partida"></>
      </form>
	  </ul>
  </li>
  <form action="../index.php?acao=mostruarioDexon" method="post">
        <input type="submit" class="menuBtn-sub" value="Dexon"></>
    </form>
	<li class='active has-sub'><a href='#'><span>Galaxy</span></a>
	   <ul>
      <form action="../index.php?acao=mostruarioGalaxyLEDBulbo" method="post">
        <input type="submit" class="menuBtn-sub" value="Lâmpadas LED Bulbo"></>
      </form>
	  <form action="../index.php?acao=mostruarioGalaxyRefletor" method="post">
        <input type="submit" class="menuBtn-sub" value="Refletores"></>
      </form>
	  </ul>
  </li>
      <form action="../index.php?acao=mostruarioMarGirius" method="post">
        <input type="submit" class="menuBtn-sub" value="MarGirius"></>
      </form>
	   <form action="../index.php?acao=mostruarioSegurimax" method="post">
        <input type="submit" class="menuBtn-sub" value="Segurimax"></>
      </form>
    </ul>
  </li>
  <li class='active has-sub'><a href='#'><span>Orçamento</span></a>
     <ul>
       <form action="../index.php?acao=orcamento" method="post">
         <input type="submit" class="menuBtn-sub" value="Gerar Orçamento"></>
       </form>
     </ul>
  </li>
  <li>
  <form action="../index.php?acao=upload" method="post">
    <input type="submit" class="menuBtn" value="Uploads"></>
  </form>
  </li>
  <li class='active has-sub'><a href='#'><span>Pesquisar</span></a>
     <ul>
       <form action="../index.php?acao=pesquisarCliente" method="post">
         <input type="submit" class="menuBtn-sub" value="Pesquisar Clientes"></>
       </form>
       <form action="../index.php?acao=pesquisarProduto" method="post">
         <input type="submit" class="menuBtn-sub" value="Pesquisar Produtos"></>
       </form>
     </ul>
  </li>
  <li>
  <form action="../index.php?acao=Contato" method="post">
    <input type="submit" class="menuBtn" value="Contato"></>
  </form>
  </li>
    <li class='active has-sub' style="float:right;"><a href='#'><span><?php echo $linha["nome"];?></span></a>
       <ul>
         <form action="../index.php?acao=meusDados" method="post">
           <input type="submit" class="menuBtn-sub" value="Meus dados"></>
         </form>
         <form action="../index.php?acao=novaSenha" method="post">
           <input type="submit" class="menuBtn-sub" value="Alterar Senha"></>
         </form>
         <form action="../index.php?acao=logout" method="post">
           <input type="submit" class="menuBtn-sub" value="Logout"></>
         </form>
       </ul>
    </li>
    <form action="../index.php?acao=meuCarrinho" method="post">
      <input type="image"style="
        float:  right;
        border-left:  2px solid #000000;
        padding:  3px 15px 4px 15px;
        border-right: 2px solid #000000;
        " alt="submit" img src="http://localhost/prototype/css/imagens/carrinho.png" class="menuBtn" value="carrinho"></>
    </form>
  </div>
 </ul>
</div>
<!-- final do menu de navegacao-->
