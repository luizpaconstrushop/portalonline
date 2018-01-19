<!DOCTYPE html>
<?php
$page="Portal P.A.Construshop - Pesquisa Produtos";
$codrepresentante=$_SESSION["codrepresentante"];
include("header.php");
include("home.php");
?>

    <head>
        <title>Catálogo P.A. Construshop</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>

			"use strict";

            $(document).ready(function() {


                $("#loader").hide();


                $("#rep").on('blur', function() {
 		//getCli();
                getPro();
                });

            });
                    function getCli(){
            var cod =$("#rep").val();
                $.ajax({
                    method: "GET",
                    url: "http://177.91.186.65:8799/v1/Usuario?cCompCode=01&cBranchCode=01&cCliente="+cod,
                    success: function(data) {
                        $("#Cabecalho").empty();
                        $("#Cabecalho").append("<tr>"+
                        "<th> Nome </th>"+
                        "<th> Endereço </th>"+
                        "<th> Municipío </th>"+
                        "<th> Estado </th>"+
                        "<th> DDD </th>"+
                        "<th> Telefone </th>"+
                        "<th> Email </th>"+
                        "<th> CPF/CNPJ </th>"+
                        "<th> Inscrição Estadual </th>"+
                        "<th> Inscrição Municipal </th>"+
                        "<th> Tipo Pessoa </th>"+
                        "</tr>");
                        $("#myBody").empty();

                        for(var i = 0; i < data.length; i++) {
                            $("#myBody").append("<tr>" +
                                                    "<td>" + data[i][3] + "</td>" +
                                                    "<td>" + data[i][4] + "</td>" +
                                                    "<td>" + data[i][5] + "</td>" +
                                                    "<td>" + data[i][6] + "</td>" +
                                                    "<td>" + data[i][7] + "</td>" +
                                                    "<td>" + data[i][8] + "</td>" +
                                                    "<td>" + data[i][9] + "</td>" +
                                                    "<td>" + data[i][10] + "</td>" +
                                                    "<td>" + data[i][11] + "</td>" +
                                                    "<td>" + data[i][12] + "</td>" +
                                                    "<td>" + data[i][13] + "</td>" +
                                                    "</tr>"
                                               );
                        }
                        getPro();
                    },
                    fail: function() {
                        alert("Não foi possível estabelecer conexão com o servidor.");
                    }
                });

                }

        function getPro(){
         var cod =$("#rep").val();
         var keyword = "";
         var codp = document.getElementsByName('proc[]');
         var desc = document.getElementsByName('descProduto[]');
         var prcu = document.getElementsByName('prc[]');

                         for(var i = 0; i < codp.length; i++){
                       keyword = keyword + codp[ i ].value;
                       if(i+1 < codp.length)
                           keyword = keyword + "%20";
                                  }

           $.ajax({
                    method: "GET",
                    url: "http://177.91.186.65:8799/v1/Keywords?cCompCode=01&cBranchCode=01&cCodCli="+cod+"&cKeyword="+keyword[i],
                    success: function(data) {

                               for(var j = 0; j < data.length; j++){
                                for(var i = 0; i < codp.length; i++)
                            if(data[j][1] === codp[i].value){
                            desc[i].value = data[j][2];
                            prcu[i].value = data[j][3].toFixed(2);
                        }
                    }

                    },
                    fail: function() {
                        alert("Não foi possível estabelecer conexão com o servidor.");
                    }
                });


        }


        </script>



        <style>
            header, section {
                margin-top: 20px;
            }
            .input-group input, #myButton {
                height: 40px;
            }
        </style>
    </head>
            <h2>Catálogo</h2>
            <div class="input-group" id="infoCli">

              <label for="rep"></label> <input id="rep" name="rep" type='text' class="form-control" value= <?php echo $codrepresentante;?> readonly="readonly" autofocus>
              <table id="dadosCli" border="0" width="80%" class="table">
                <thead id="Cabecalho">
                </thead>
                <tbody id="myBody">
                </tbody>
            </table>

            <table  width="100%" class="table">
                <tr>
                    <th style="width:20% ">Imagem</th>
                    <th style="width:20% ">Código</th>
                    <th style="width:45% ">Descrição</th>
                    <th style="width:15% ">Preço</th>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B60340.png" width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B60340" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                    <td>

                         <script>

                          function add()
                          {
                            var Number = document.getElementById("txtNumber");
                            var newNumber = parseInt(Number.value) + 1;
                            txtNumber.value = newNumber;
                          }

                          function subtract()
                          {
                            var txtNumber = document.getElementById("txtNumber");
                            var newNumber = parseInt(txtNumber.value) - 1;
                            txtNumber.value = newNumber;
                            if(txtNumber.value <=0){
                              txtNumber.value=0;
                            }

                          }
                         </script>

                         <input id="txtNumber" type="number" value="1" min="0" style="width:30px"  />
                         <input id="btnAdd" type="button" value="+" onclick="add();" />
                        <input id="btnSubtract" type="button" value="-" min='0' onclick="subtract();" />
                    </td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B60350.png"  width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B60350" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B62010.png"  width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B62010" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B62030.png"  width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B62030" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B66870.png"  width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B66870" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B70340.png"  width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B70340" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B70350.png" width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B70350" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B72010.png" width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B72010" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>
                <tr>
                    <td><img src="css/imagens/catalogomiluz/S3B72030.png" width="200" height="200" /></td>
                    <td><input id="proc" name="proc[]" type='text' class="form-control" value="000712S3B72030" readonly></td>
                    <td><input type="text" name="descProduto[]" id="descProduto" class="form-control" readonly></td>
                    <td><input id="prc" name="prc[]" type='text' class="form-control" value="" readonly></td>
                </tr>

            </table>




</div>
