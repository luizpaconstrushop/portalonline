<?php
$page="P.A. Construshop - Portal Online";
include("header.php");
?>
    <div id="carrinho"><a href="index.php?acao=orcamento" title="carrinho">carrinho</a></div>
    <div id="cadastrar"><a href="index.php?acao=logout" title="Fazer logout!">Logout &raquo;</a></div>
    <div id="navigation">


            <table>
                <thead>
                    <tr>
                        <th>
                            <div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img src="css/imagens/capa.png" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="180" height="58" /></a>
                            </div>
                             <?php
                    $buscarusuarios=mysql_query("SELECT nome FROM usuarios WHERE codrepresentante='$codrepresentante'");
			if(mysql_num_rows($buscarusuarios) == 0){
			echo"Nenhum usuário cadastrado no sistema!";
			}else{
                            while($linha=mysql_fetch_array($buscarusuarios)){
                                echo "Bem vindo, ".$linha["nome"];
                        }}
            ?>
                         <form action="index.php?acao=tutoriais" method="post">
                                <input type="submit" class="sb bradius" value="Primeiro Acesso" />
                                </form>
							<?php
                                if($codrepresentante == 102785){
                            ?>
                            <form action="index.php?acao=meusDados" method="post">
                                <input type="submit" class="sb bradius" value="Dados Cadastrais" />
                            </form>
                            <form action="index.php?acao=fornecedorsegurimax" method="post">
                                <input type="submit" class="sb bradius" value="Pesquisar SEGURIMAX" />
                            </form>
                            <form action="index.php?acao=mostruario" method="post">
                                <input type="submit" class="sb bradius" value="Catálogo" />
                            </form>

                                <?php } else {?>
                            <?php
                                if($nivel == 2){
                            ?>
                                <form action="index.php?acao=pesquisarCliente" method="post">
                                <input type="submit" class="sb bradius" value="Pesquisar Cliente" />
                                </form>
                                <form action="index.php?acao=pesquisarProduto" method="post">
                                <input type="submit" class="sb bradius" value="Pesquisar Produto" />
                                </form>
                                <form action="index.php?acao=gerenciarRepresentante" method="post">
                                <input type="submit" class="sb bradius" value="Gerenciar Usuários" />
                                </form>
                                <form action="index.php?acao=gerenciarOrcamento" method="post">
                                <input type="submit" class="sb bradius" value="Meus Orçamentos" />
                                </form>
                                <form action="index.php?acao=novaSenha" method="post">
                                <input type="submit" class="sb bradius" value="Resetar Senha" />
                                </form>
                                <form action="index.php?acao=upload" method="post">
                                <input type="submit" class="sb bradius" value="Uploads" />
                                </form>
                            <?php
                                }else{
                                if($nivel != 3 ){
                            ?>
                                <form action="index.php?acao=meusDados" method="post">
                                <input type="submit" class="sb bradius" value="Dados Cadastrais" />
                                </form>
                                <form action="index.php?acao=pesquisarCliente" method="post">
                                <input type="submit" class="sb bradius" value="Pesquisar Cliente" />
                                </form>
                                <form action="index.php?acao=pesquisarProduto" method="post">
                                <input type="submit" class="sb bradius" value="Pesquisar Produto" />
                                </form>
                                <form action="index.php?acao=orcamento" method="post">
                                <input type="submit" class="sb bradius" value="Orçamento" />
                                </form>
                                <form action="index.php?acao=gerenciarOrcamento" method="post">
                                <input type="submit" class="sb bradius" value="Meus Orçamentos" />
                                </form>
                                <form action="index.php?acao=novaSenha" method="post">
                                <input type="submit" class="sb bradius" value="Alterar Senha" />
                                </form>
								<form action="index.php?acao=upload" method="post">
                                <input type="submit" class="sb bradius" value="Uploads" />
                                </form>
								                <?php
                                if($codrepresentante == 000002 ||$codrepresentante == 003786){
                            ?>
                                <form action="index.php?acao=mostruario" method="post">
                                <input type="submit" class="sb bradius" value="Catálogo" />
                                </form>
                <?php }?>
                             <?php
                                if($codrepresentante == 000002 ||$codrepresentante == 000028 || $codrepresentante == 000033 ){
                            ?>
                                <form action="index.php?acao=pesquisarPVarejo" method="post">
                                <input type="submit" class="sb bradius" value="Pesquisar Produto Varejo" />
                                </form>
                             <?php
                                }
                            ?>
                            <?php } else{
                            ?>
                                <form action="index.php?acao=meusDados" method="post">
                                <input type="submit" class="sb bradius" value="Dados Cadastrais" />
                                </form>
                                <form action="index.php?acao=pesquisarProduto" method="post">
                                <input type="submit" class="sb bradius" value="Pesquisar Produto" />
                                </form>
                                <form action="index.php?acao=orcamento" method="post">
                                <input type="submit" class="sb bradius" value="Orçamento" />
                                </form>
                                <form action="index.php?acao=gerenciarOrcamento" method="post">
                                <input type="submit" class="sb bradius" value="Meus Orçamentos" />
                                </form>
                                <form action="index.php?acao=novaSenha" method="post">
                                <input type="submit" class="sb bradius" value="Alterar Senha" />
                                </form>
								                                <form action="index.php?acao=mostruario" method="post">
                                <input type="submit" class="sb bradius" value="Catálogo" />
                                </form>
								<form action="index.php?acao=upload" method="post">
                                <input type="submit" class="sb bradius" value="Uploads" />
                                </form>
                                <form action="index.php?acao=meuVendedor" method="post">
                                <input type="submit" class="sb bradius" value="Meu Vendedor" />
                                </form>
                                <?php }}}
                            ?>
                        </th>
                    </tr>
                </thead>
            </table>


    </div>


        <div id="centerDoc">

</body>
</html>
