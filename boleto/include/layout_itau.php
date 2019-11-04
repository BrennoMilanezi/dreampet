<?php
// +----------------------------------------------------------------------+
// | BoletoPhp - Versão Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo está disponível sob a Licença GPL disponível pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Você deve ter recebido uma cópia da GNU Public License junto com     |
// | esse pacote; se não, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<HTML>
    <HEAD>
        <TITLE><?php echo $dadosboleto["identificacao"]; ?></TITLE>
        <META http-equiv=Content-Type content=text/html charset=utf-8>
        <meta name="Generator" content="" />
        <style type=text/css>
            <!--.cp {  font: bold 10px Arial; color: black}
            <!--.ti {  font: 9px Arial, Helvetica, sans-serif}
            <!--.ld { font: bold 15px Arial; color: #000000}
            <!--.ct { FONT: 9px "Arial Narrow"; COLOR: #000033}
            <!--.cn { FONT: 9px Arial; COLOR: black }
            <!--.bc { font: bold 20px Arial; color: #000000 }
            <!--.ld2 { font: bold 12px Arial; color: #000000 }
            --></style>
        <style type="text/css">
            /*************/
            .barcode {
                height: 50px;
            }            
            .barcode div {
                display: inline-block;
                height: 100%;
            }

            .barcode .black {
                border-color: #000;
                border-left-style: solid;
                width: 0px;
            }

            .barcode .white {
                background: #fff;
            }

            .barcode .thin.black {
                border-left-width: 1px;
            }

            .barcode .large.black {
                border-left-width: 3px;
            }

            .barcode .thin.white {
                width: 1px;
            }

            .barcode .large.white {
                width: 3px;
            }
            /**************/
        </style>
    </head>

    <BODY text=#000000 bgColor=#ffffff topMargin=0 rightMargin=0>
    <table width=666 cellspacing=0 cellpadding=0 border=0><!--<tr><td valign=top class=cp><DIV ALIGN="CENTER">Instruções
    de Impressão</DIV></TD></TR><TR><TD valign=top class=cp><DIV ALIGN="left">
    <p>
    <li>Imprima em impressora jato de tinta (ink jet) ou laser em qualidade normal ou alta (Não use modo econômico).<br>
    <li>Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) e margens mínimas à esquerda e à direita do formulário.<br>
    <li>Corte na linha indicada. Não rasure, risque, fure ou dobre a região onde se encontra o código de barras.<br>
    <li>Caso não apareça o código de barras no final, clique em F5 para atualizar esta tela.
    <li>Caso tenha problemas ao imprimir, copie a seqüencia numérica abaixo e pague no caixa eletrônico ou no internet banking:<br><br>
    <span class="ld2">
    &nbsp;&nbsp;&nbsp;&nbsp;Linha Digitável: &nbsp;<?php echo $dadosboleto["linha_digitavel"] ?><br>
    &nbsp;&nbsp;&nbsp;&nbsp;Valor: &nbsp;&nbsp;R$ <?php echo $dadosboleto["valor_boleto"] ?><br>
    </span>
    </DIV></td></tr>--></table><br><table cellspacing=0 cellpadding=0 width=666 border=0><TBODY><TR><TD class=ct width=666><table width=666 cellspacing=5 cellpadding=0 border=0><tr><td width=41></TD></tr></table>
        <!--<table width=666 cellspacing=5 cellpadding=0 border=0 align=Default>
            <tr>
                <td width=41><? if($tipo == '4' || $tipo == '5'){ ?> <IMG SRC="imagens/LogoGS.png" width="48"> <? }else{ ?> <IMG SRC="imagens/logo_se.png" width="48"> <? } ?></td>
                <td class=ti width=455><?php echo $dadosboleto["identificacao"]; ?> <?php echo isset($dadosboleto["cpf_cnpj"]) ? $dadosboleto["cpf_cnpj"] : '' ?><br>
                    <?php echo $dadosboleto["endereco"]; ?><br>
                    <?php echo $dadosboleto["cidade_uf_franquia"]; ?><br>
                </td>
                <td align=RIGHT width=150 class=ti>&nbsp;</td>
            </tr>
        </table>
        <BR>--><table cellspacing=0 cellpadding=0 width=666 border=0><tr><td class=cp width=150>
                    <span class="campo"><IMG
                            src="imagens/logoitau.jpg" width="150" height="40"
                            border=0></span></td>
                <td width=3 valign=bottom><img height=22 src=imagens/3.png width=2 border=0></td><td class=cpt width=58 valign=bottom><div align=center><font class=bc><?php echo $dadosboleto["codigo_banco_com_dv"] ?></font></div></td><td width=3 valign=bottom><img height=22 src=imagens/3.png width=2 border=0></td><td class=ld align=right width=453 valign=bottom><span class=ld>
                        <span class="campotitulo">
                            <?php echo $dadosboleto["linha_digitavel"] ?>
                        </span></span></td>
            </tr><tbody><tr><td colspan=5><img height=2 src=imagens/2.png width=666 border=0></td></tr></tbody></table>
            <table cellspacing=0 cellpadding=0 border=0>
            <tbody>
            <tr>
            <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
            <td class=ct valign=top width=298 height=13>Beneficiário</td>
            <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
            <td class=ct valign=top width=126 height=13>CPF/CNPJ</td>
            <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
            <td class=ct valign=top width=120 height=13>Sacador Avalista</td>
            <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
            <td class=ct valign=top width=120 height=13>Vencimento</td>
            </tr>
            <tr>
            <td class=cp valign=top width=7 height=12><img height=13 src=imagens/1.png width=1 border=0></td>
            <td class=cp valign=top width=298 height=12>
                        <span class="campo"><?php echo $dadosboleto["cedente"]; ?></span></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=126 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["cpf_cnpj"] ?>
                        </span></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top  width=120 height=12><span class="campo">
                            <?php echo ""; ?>
                        </span>
                    </td>
                    <td class="cp" valign="top" width="7" height="13"><img height="13" src="imagens/1.png" width="1" border="0"></td>
                    <td class="cp"  align="center" width="7" height="13"><span class="campo">
                            <?php echo $dadosboleto["data_vencimento"] ?>
                        </span></td>
                </tr>

                <tr><td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                <td valign=top width=298 height=1><img height=1 src=imagens/2.png width=298 border=0></td>
                <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                <td valign=top width=126 height=1><img height=1 src=imagens/2.png width=126 border=0></td>
                <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                <td valign=top width=34 height=1><img height=1 src=imagens/2.png width=120 border=0></td>
                <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                <td valign=top width=53 height=1><img height=1 src=imagens/2.png width=95 border=0></td>
                </tr>
            </tbody>
            </table>

        <table cellspacing=0 cellpadding=0 border=0><tbody><tr><td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td><td class=ct valign=top width=659 height=13>Endereço Beneficiário/Sacador Avalista</td></tr><tr><td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td><td class=cp valign=top width=659 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["endereco"] . " " . $dadosboleto["cidade_uf_franquia"]; ?>
                        </span></td>
                </tr><tr>
                <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td><td valign=top width=659 height=1><img height=1 src=imagens/2.png width=659 border=0></td></tr></tbody></table>

        <table cellspacing=0 cellpadding=0 border=0>
            <tbody>
            <tr>
            		<td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=85 height=13>Nosso Número</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=90 height=13>Carteira</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=65 height=13>Espécie</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                     <td class=ct valign=top width=135  height=13>Quantidade</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=135 height=13>Valor</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=136 height=13>Agência/Código do Beneficiário</td>
           </tr>
                    <tr>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=85 align=left height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["nosso_numero"]; ?>
                        </span></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=90 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["carteira"]; ?>
                        </span></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp  align=center width=65 height=12>
                        <span class="campo">
                            <?php echo "DM" ?>
                        </span></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=135  height=12>
                        <span class="campo">
                            <?php echo ""; ?>
                        </span></td>
                     <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=135 height=12>
                        <span class="campo">
                            <?php echo ""; ?>
                        </span></td>
                     <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=113 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["agencia_codigo"]; ?>
                        </span></td>      
                </tr>
                
                <tr>
                    <td valign=top width=7 height=1 ><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=85 height=1 ><img height=1 src=imagens/2.png width=85 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=90 height=1><img height=1 src=imagens/2.png width=90 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=65 height=1><img height=1 src=imagens/2.png width=65 border=0></td>
                    
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=135  height=1><img height=1 src=imagens/2.png width=135 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=135 height=1><img height=1 src=imagens/2.png width=135 border=0></td>
                    
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=113 height=1><img height=1 src=imagens/2.png width=113 border=0></td>
                </tr>
                
                </tbody></table>
                
                <table cellspacing=0 cellpadding=0 border=0>
                <tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=85 height=13>Data do Documento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=90 height=13>Número do Documento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=135 height=13>Espécie do Documento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=55 height=13>Aceite</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=120 height=13>Data de Processamento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=140 height=13>Valor do Documento</td>
                </tr>
                <tr>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=85 align=center  height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["data_documento"]; ?>
                        </span></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top width=90 height=12></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top align=right width=135 height=12></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top align=right width=55 height=12></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                	<td class=cp valign=top align=right width=120 height=12><span class="campo"><?php echo $dadosboleto["data_processamento"]; ?></span></td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0>      </td>
                	<td class=cp valign=top align=center width=140 height=12>
                       <span class="campo">
                            <?php echo $dadosboleto["valor_boleto"]; ?>
                       </span>
                    </td>
                </tr>
                <tr>
                    <td valign=top width=7 height=1 ><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=85 height=1 ><img height=1 src=imagens/2.png width=85 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=90 height=1><img height=1 src=imagens/2.png width=90 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=135 height=1><img height=1 src=imagens/2.png width=135 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=55 height=1><img height=1 src=imagens/2.png width=55 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=120 height=1><img height=1 src=imagens/2.png width=120 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=140 height=1><img height=1 src=imagens/2.png width=140 border=0></td>
                </tr>
                </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border=0>
                	<tbody>
                        <tr>
                                <td class=ct  width=7 height=12></td>
                                <td class=ct  width=564 ></td><td class=ct  width=7 height=12></td>
                                <td class=ct  width=88 >Autenticação mecânica</td>
                        </tr>
                            <tr>
                                <td  width=7 ></td><td class=cp width=564 >
                                    <span class="campo">
                                        <?php echo $dadosboleto["demonstrativo1"] ?><br>
                                        <?php echo $dadosboleto["demonstrativo2"] ?><br>
                                        <?php echo $dadosboleto["demonstrativo3"] ?><br>
                                    </span>
                                </td>
                                <td  width=7 ></td><td  width=88 ></td>
                         </tr>
                    </tbody>
                 </table>
                 <table cellspacing=0 cellpadding=0 width=666 border=0>
                     <tbody>
                         <tr>
                              <td width=7></td>
                              <td  width=500 class=cp><br><br><br></td>
                         	  <td width=159></td>
                          </tr>
                      </tbody>
                  </table>
                  <table cellspacing=0 cellpadding=0 width=666 border=0>
                            <tr>
                                     <td class=ct width=666></td>
                            </tr>
                    	<tbody>
                    <tr>
                    <td class=ct width=666>
                        <div align=right>Corte na linha pontilhada</div></td>
                    </tr>
                    <tr>
                    	<td class=ct width=666><img height=1 src=imagens/6.png width=665 border=0></td>
                    </tr>
                        </tbody>
                   </table>
                        <br>
                        <table cellspacing=0 cellpadding=0 width=666 border=0>
                        <tr>
                        <td class=cp width=150>
                            <span class="campo"><IMG src="imagens/logoitau.jpg" width="150" height="40" border=0></span>
                            </td>
                	   <td width=3 valign=bottom><img height=22 src=imagens/3.png width=2 border=0></td>
                		<td class=cpt width=58 valign=bottom>
                			<div align=center><font class=bc><?php echo $dadosboleto["codigo_banco_com_dv"] ?></font></div>
                		</td>
               			<td width=3 valign=bottom><img height=22 src=imagens/3.png width=2 border=0></td>
                        <td class=ld align=right width=453 valign=bottom>
                            <span class=ld>
                                <span class="campotitulo">
                                    <?php echo $dadosboleto["linha_digitavel"] ?>
                                </span>
                            </span>
                        </td>
            		</tr>
                    <tbody>
                    <tr>
                    <td colspan=5><img height=2 src=imagens/2.png width=666 border=0></td>
                    </tr>
                    </tbody>
                    </table>
                    <table cellspacing=0 cellpadding=0 border=0>
                    <tbody>
                    <tr>
                        <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                        <td class=ct valign=top width=472 height=13>Local de pagamento</td>
                        <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                        <td class=ct valign=top width=180 height=13>Vencimento</td>
                    </tr>
                    <tr>
                    	<td class=cp valign=top width=7 height=13><img height=24 src=imagens/1.png width=1 border=0></td>
                        <td class=cp valign=top width=472 height=13>ATÉ O VENCIMENTO PAGUE PREFERENCIALMENTE NO ITAÚ<br>NÃO RECEBER APÓS O VENCIMENTO</td>
                        <td class=cp valign=top width=7 height=13><img height=24 src=imagens/1.png width=1 border=0></td>
                        <td class=cp valign=top align=center width=180 height=12>
                            <span class="campo">
                                <?php echo $dadosboleto["data_vencimento"] ?>
                            </span>
                        </td>
                	</tr>
                	<tr>
                    	<td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                        <td valign=top width=472 height=1><img height=1 src=imagens/2.png width=472 border=0></td>
                        <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                        <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
                    </tr>
                    </tbody>
                    </table>
                    <table cellspacing=0 cellpadding=0 border=0>
                    <tbody>
                    	<tr>
                        	<td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                            <td class=ct valign=top width=472 height=13><div style="display:inline-block;">Beneficiário</div><div style="display:inline-block; margin-left:314px;">CNPJ/CPF</div></td>
                            <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                            <td class=ct valign=top width=180 height=13>Agência/Código cedente</td>
                        </tr>
                            <tr>
                            <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                            <td class=cp valign=top width=472 height=12>
                                <div style="display:inline-block;"><span class="campo">
                                    <?php echo $dadosboleto["cedente"]; ?>
                                </span></div>
                                 <div style="display:inline-block; margin-left:275px;"><span class="campo">
                                    <?php echo $dadosboleto["cpf_cnpj"]; ?>
                                </span></div>
                       		</td>
                    		<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                            <td class=cp valign=top align=center width=180 height=12>
                                <span class="campo">
                                    <?php echo $dadosboleto["agencia_codigo"]; ?>
                                </span>
                       		 </td>
               			</tr>
                		<tr>
                            <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                            <td valign=top width=472 height=1><img height=1 src=imagens/2.png width=472 border=0></td>
                            <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                            <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
               			</tr>
                </tbody>
                </table>
                <table cellspacing=0 cellpadding=0 border=0><tbody>
                <tr>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=100 height=13>Data do documento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=138 height=13>Número do documento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=90 height=13>Espécie documento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=34 height=13>Aceite</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=82 height=13>Data processamento</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=180 height=13>Nosso número</td>
                </tr>
                <tr>
                		<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    	<td class=cp valign=top  width=100 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto["data_documento"] ?>
                            </span></div></td>
                        <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                        <td class=cp valign=top width=138 height=12>
                            <span class="campo">
                                <?php echo $dadosboleto["numero_documento"] ?>
                            </span></td>
                        <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                        <td class=cp valign=top  width=90 height=12>
                            <div align=left><span class="campo">
                                <?php echo $dadosboleto["especie_doc"] ?>
                            </span>
                        </div>
               			 </td>
                     <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                     <td class=cp valign=top  width=34 height=12>
                         <div align=left>
                         	<span class="campo">
                                    <?php echo $dadosboleto["aceite"] ?>
                         	</span>
            			</div>
            		</td>
            		<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top  width=82 height=12>
                    <div align=left>
                        <span class="campo">
                            <?php echo $dadosboleto["data_processamento"]; ?>
                        </span>
                	</div></td>
                	<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top align=center width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto["nosso_numero"] ?>
                        </span></td>
    			</tr>
                <tr>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=100 height=1><img height=1 src=imagens/2.png width=100 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=138 height=1><img height=1 src=imagens/2.png width=138 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=90 height=1><img height=1 src=imagens/2.png width=90 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=34 height=1><img height=1 src=imagens/2.png width=34 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=82 height=1><img height=1 src=imagens/2.png width=82 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
                </tr>
                </tbody></table>
             <table cellspacing=0 cellpadding=0 border=0>
             <tbody>
             <tr>
            		<td class=ct valign=top width=7 height=13> <img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=100 height=13>Uso do banco</td>
                    <td class=ct valign=top height=13 width=7><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=83 height=13>Carteira</td>
                    <td class=ct valign=top height=13 width=7><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=48 height=13>Espécie</td>
                    <td class=ct valign=top height=13 width=7><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=131 height=13>Quantidade</td>
                    <td class=ct valign=top height=13 width=7><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=82 height=13>Valor</td>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    <td class=ct valign=top width=180 height=13>(=)Valor documento</td>
              </tr>
              <tr> 
              		<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td valign=top class=cp  width=100 height=12 >
                    	<div align=left>
                        </div>
                    </td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top  width=83>
               			 <div align=left>
                         	<span class="campo">
                        		<?php echo $dadosboleto["carteira"] ?>
                   			 </span>
                         </div>
                    </td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top align=center  width=48>
                    	<div >
                            <span class="campo">
                        		<?php echo $dadosboleto["especie"] ?>
                   			 </span>
                		</div>
                    </td>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top  width=131>
                    		<span class="campo">
                    			<?php echo $dadosboleto["quantidade"] ?>
                			</span>
            		</td>
            		<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    <td class=cp valign=top  width=82>
                            <span class="campo">
                                <?php echo $dadosboleto["valor_unitario"] ?>
                            </span>
                    </td>
           			 <td class=cp valign=top width=7 height=12> <img height=12 src=imagens/1.png width=1 border=0></td>
                     <td class=cp valign=top align=center width=180 height=12>
                            <span class="campo">
                                <?php echo $dadosboleto["valor_boleto"] ?>
                            </span>
                	</td>
        	</tr>
            <tr>
                    <td valign=top width=7 height=1> <img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=100 height=1><img height=1 src=imagens/2.png width=100 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=83 height=1><img height=1 src=imagens/2.png width=83 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=48 height=1><img height=1 src=imagens/2.png width=48 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=131 height=1><img height=1 src=imagens/2.png width=131 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=82 height=1><img height=1 src=imagens/2.png width=82 border=0></td>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
            </tr>
            </tbody>
			</table>
            <table cellspacing=0 cellpadding=0 width=666 border=0><tbody>
            <tr>
            	<td align=right width=10>
            <table cellspacing=0 cellpadding=0 border=0 align=left><tbody>
            <tr> 
            	<td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
            </tr>
            <tr>
                <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
            </tr>
            <tr>
                <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=1 border=0></td>
            </tr>
            </tbody>
            </table>
            	</td>
            	<td valign=top width=468 rowspan=5><font class=ct>Instruções de responsabilidade do BENEFICIÁRIO. Qualquer dúvida sobre este boleto, contate o BENEFICIÁRIO.</font><br><br>
                    <span class=cp> <FONT class=campo>
                        <?php echo $dadosboleto["instrucoes1"]; ?><br>
                        <?php echo $dadosboleto["instrucoes2"]; ?><br>
                        <?php echo $dadosboleto["instrucoes3"]; ?><br>
                        <?php echo $dadosboleto["instrucoes4"]; ?></FONT><br><br>
                    </span>
                </td>
            <td align=right width=188>
            <table cellspacing=0 cellpadding=0 border=0><tbody>
            <tr>
            	<td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
            	<td class=ct valign=top width=180 height=13>(-) Desconto / Abatimentos</td>
            </tr>
            <tr> 
            	<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                <td class=cp valign=top align=right width=180 height=12></td>
                </tr>
            <tr>
                <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            <tr>
            	<td align=right width=10>
                <table cellspacing=0 cellpadding=0 border=0 align=left>
                <tbody>
                <tr>
                <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                </tr>
                <tr>
                	<td class=cp valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                </tr>
                <tr>
                	<td valign=top width=7 height=1><img height=1 src=imagens/2.png width=1 border=0></td>
                </tr>
           </tbody>
           </table>
           </td>
               <td align=right width=188>
                    <table cellspacing=0 cellpadding=0 border=0>
                        <tbody>
                            <tr>
                                <td class=ct valign=top width=7 height=14><img height=14 src=imagens/1.png width=1 border=0></td>
                                <td class=ct valign=top width=180 height=14></td>
                          </tr>
                            <tr>
                                <td class=cp valign=top width=7 height=12> <img height=12 src=imagens/1.png width=1 border=0></td>
                                <td class=cp valign=top align=right width=180 height=12></td>
                            </tr>
                            <tr>
                                <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                                <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
                            </tr>
                        </tbody>
                    </table>
               </td>
             </tr>
           <tr>
            <td align=right width=10>
                <table cellspacing=0 cellpadding=0 border=0 align=left>
                    <tbody>
                        <tr>
                            <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                        </tr>
                        <tr>
                        	<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                        </tr>
                        <tr>
                        	<td valign=top width=7 height=1><img height=1 src=imagens/2.png width=1 border=0></td>
                        </tr>
                    </tbody>
                </table>
             </td>
             <td align=right width=188>
                    <table cellspacing=0 cellpadding=0 border=0>
                        <tbody>
                            <tr>
                                <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                                <td class=ct valign=top width=180 height=13>(+)Mora / Multa</td>
                            </tr>
                            <tr>
                                <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                                <td class=cp valign=top align=right width=180 height=12></td>
                            </tr>
                            <tr>
                                <td valign=top width=7 height=1> <img height=1 src=imagens/2.png width=7 border=0></td>
                                <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
                            </tr>
                        </tbody>
                    </table>
             </td>
            </tr>
                    <tr>
                    <td align=right width=10><table cellspacing=0 cellpadding=0 border=0 align=left>
                    <tbody>
                    <tr>
                    <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    </tr>
                    <tr>
                    <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    </tr>
                    <tr>
                    <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=1 border=0></td>
                    </tr>
                	</tbody>
                </table>
              </td>
                <td align=right width=188>
                    <table cellspacing=0 cellpadding=0 border=0>
                    	<tbody>
                    		<tr> 
                    			<td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    			<td class=ct valign=top width=180 height=13></td>
                    		</tr>
                    		<tr>
                    			<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    			<td class=cp valign=top align=right width=180 height=12></td>
                    		</tr>
                    		<tr>
                    			<td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                    			<td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
                    		</tr>
                    	</tbody>
                    </table>
             </td>
            </tr>
            <tr>
                <td align=right width=10><table cellspacing=0 cellpadding=0 border=0 align=left>
                    <tbody>
                    <tr>
                    	<td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                    </tr>
                    <tr>
                    	<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                    </tr>
                    </tbody>
                </table>
                </td>
                <td align=right width=188>
                    <table cellspacing=0 cellpadding=0 border=0>
                    <tbody>
                        <tr>
                        	<td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                        	<td class=ct valign=top width=180 height=13>(=)Valor cobrado</td>
                        </tr>
                    	<tr>
                    		<td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                            <td class=cp valign=top align=right width=180 height=12></td>
                        </tr>
                    </tbody>
                    </table>
                </td>
            </tr>
           </tbody>
           </table>
           <table cellspacing=0 cellpadding=0 width=666 border=0>
                    <tbody>
                    <tr>
                    <td valign=top width=666 height=1><img height=1 src=imagens/2.png width=666 border=0></td>
                    </tr>
                    </tbody>
            </table>
            <table cellspacing=0 cellpadding=0 border=0>
                    <tbody>
                        <tr>
                            <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                            <td class=ct valign=top width=659 height=13>Pagador
                            	<span class="campo" style="margin-left:310px;">CNPJ/CPF: <strong><?php echo $dadosboleto["cnpj_cliente"]; ?></strong></span> 
                            </td>
                        </tr>
                        <tr>
                        <td class=cp valign=top width=7 height=19><img height=19 src=imagens/1.png width=1 border=0></td>
                        <td class=cp valign=top width=659 height=19>
                            <span class="campo">
                            <?php echo $dadosboleto["sacado"] ?>
                                
                            </span>
                        </td>
                        </tr>
        			</tbody>
           </table>
           <table cellspacing=0 cellpadding=0 border=0>
               <tbody>
                   <tr>
                   <td class=cp valign=top width=7 height=12><img height=12 src=imagens/1.png width=1 border=0></td>
                   <td class=cp valign=top width=659 height=12>
                   		<span class="campo">
                            <?php echo $dadosboleto["endereco1"] ?>
                        </span>
                    </td>
                  </tr>
            </tbody>
          </table>
          <table cellspacing=0 cellpadding=0 border=0>
              <tbody>
                  <tr>
                      <td class=ct valign=top width=7 height=13><img height=13 src=imagens/1.png width=1 border=0></td>
                      <td class=cp valign=top width=472 height=13>
                            <span class="campo">
                                <?php echo $dadosboleto["endereco2"] ?>
                            </span>
                      </td>
                        
                    </tr>
                    <TR>
                        <TD class=ct  width=7 height=12><img height=13 src=imagens/1.png width=1 border=0></TD>
                        <TD class=ct  width=409 >Sacador Avalista
                        <span class="campo" style="margin-left:280px;">CNPJ: <?php echo ""; ?></span>  
                        </TD>
                        <TD class=ct  width=7 height=12></TD><TD class=ct  width=409 ><b>Código de baixa</b></TD>
                    </TR>
                    <tr>
                        <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                        <td valign=top width=472 height=1><img height=1 src=imagens/2.png width=472 border=0></td>
                        <td valign=top width=7 height=1><img height=1 src=imagens/2.png width=7 border=0></td>
                        <td valign=top width=180 height=1><img height=1 src=imagens/2.png width=180 border=0></td>
                    </tr>
                </tbody>
            </table>
            <TABLE cellSpacing=0 cellPadding=0 border=0 width=666>
                <TBODY>
                    <TR>
                        <TD class=ct  width=250 ><div align=right>Autenticação mecânica - <b class=cp>FICHA DE COMPENSAÇÃO</b></div></TD>
                    </TR>
                	<TR>
                		<TD class=ct  colspan=3 ></TD>
                	</tr>
                </tbody>
            </table>
            <!--<TABLE cellSpacing=0 cellPadding=0 width=666 border=0>
            	<TBODY>
                    <TR>
                        <TD vAlign=bottom align=left height=50>
                                <?php //fbarcode($dadosboleto["codigo_barras"]); ?>
                        </TD>
                    </tr>
               </tbody>
          </table>-->
          <?php echo getImagemCodigoDeBarras($dadosboleto["codigo_barras"]); ?>
        	<TABLE cellSpacing=0 cellPadding=0 width=666 border=0>
                <TR>
                	<TD class=ct width=666></TD>
                </TR>
        	<TBODY>
                <TR>
                	<TD class=ct width=666><div align=right>Corte na linha pontilhada</div></TD>
                </TR>
                <TR>
               		 <TD class=ct width=666><img height=1 src=imagens/6.png width=665 border=0></TD>
                </tr>
       		 </tbody>
        </table>
</BODY>
</HTML>
