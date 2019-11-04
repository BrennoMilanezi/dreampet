<?php


#include("../includes/inicializa.php");
/*require_once("../includes/database.php");
require_once("../includes/function.php");



$textoCriptografado = base64_encode($_GET['i']);
$textoDescriptografado = base64_decode($_GET['i']);

$id_boleto = $textoDescriptografado;

$q = "SELECT * FROM boletos WHERE id_boleto = '$id_boleto' "; 
$q = $database->query($q);
$r = $database->fetch_object($q);*/

$vencimento_atual = '2019-11-25';

$valor_cobrado = 25.00;

// ------------------------- DADOS DINÂMICOS DO SEU CLIENTE PARA A GERAÇÃO DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formulário c/ POST, GET ou de BD (MySql,Postgre,etc)	//

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 5;
$taxa_boleto = 0;
#$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006";
$data_venc = '25/11/2019';
$valor_cobrado = $valor_cobrado; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto= number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

/*$dadosboleto["nosso_numero"] = $r->id;  // Nosso numero - REGRA: Máximo de 8 caracteres!
$dadosboleto["numero_documento"] = "1".str_pad((string)$r->id, 6, "0", STR_PAD_LEFT);	// Num do pedido ou nosso numero*/
$dadosboleto["nosso_numero"] = 1;  // Nosso numero - REGRA: Máximo de 8 caracteres!
$dadosboleto["numero_documento"] = "1".str_pad((string)1, 6, "0", STR_PAD_LEFT);	// Num do pedido ou nosso numero
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emissão do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula


########### ATUALIZANDO BOLETO CASO TENHA PASSADO A DATA DE VENCIMENTO ###########
// pegando a data de vencimento e convertendo para ser comparada
$vencimento_atual = str_replace("-","",$vencimento_atual); 

// pegando a data atual e convertendo para ser comparada
$data_atual = str_replace("-","",date("Y-m-d"));
########### ########### ########### ########### ########### ########### ###########

// DADOS DO SEU CLIENTE
/*
$e = "SELECT nome,endereco,bairro,c.cidade,cep,e.sgl_estado,cpf FROM candidatos em 
	JOIN estados e ON e.cod_estado = em.uf JOIN cidades c ON c.id = em.cidade WHERE  em.id = '$r->id_candidato'  ";

$dados_boleto = $database->query("SELECT c.curso, i.nome_fantasia, i.nome_instituicao
								FROM boletos bs
								JOIN bolsas b ON bs.id_bolsa = b.id_bolsa
								JOIN cursos c ON b.curso = c.id
								JOIN ies i ON b.id_ies = i.id
								WHERE bs.id_boleto = '$id_boleto'");
$r_dados = $database->fetch_object($dados_boleto);*/

$instituicao = "Compra de uma Ração";
/*
$e = $database->query($e);
$s = $database->fetch_object($e);*/
$empresa = utf8_encode("Teste");
$end_empresa = utf8_encode("Teste");

$dadosboleto["sacado"] = $empresa;
$dadosboleto["cnpj_cliente"] = "11976550777";
$dadosboleto["endereco1"] = $end_empresa;
$dadosboleto["endereco2"] = utf8_encode("Vitoria - ES")." -  CEP: 29066-430";

$dadosboleto["demonstrativo1"] = "Valor referente a compra na DreamPet.";
$dadosboleto["demonstrativo2"] = "";
$dadosboleto["demonstrativo4"] = "http://dreampet.herokuapp.com";
$dadosboleto["instrucoes1"] = "- Não receber após o vencimento.";
$dadosboleto["instrucoes2"] = "Valor referente a compra na DreamPet.";
$dadosboleto["instrucoes3"] = "$instituicao";
// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "";

// ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //

// DADOS DA SUA CONTA - ITAÚ
$dadosboleto["agencia"] = "3130"; // Num da agencia, sem digito
$dadosboleto["conta"] = "60555";	// Num da conta, sem digito
$dadosboleto["conta_dv"] = "7";	// Digito do Num da conta

// DADOS PERSONALIZADOS - ITAÚ
$dadosboleto["carteira"] = "109";  // Código da Carteira: pode ser 175, 174, 104, 109, 178, ou 157

// SEUS DADOS
$dadosboleto["identificacao"] = "DREAMPET";
$dadosboleto["cpf_cnpj"] = "29.441.687/0001-82";
$dadosboleto["endereco"] = "Enseada do Suá, 1289";
$dadosboleto["cidade_uf"] = "Vitória/ES";
$dadosboleto["cedente"] = "DREAMPET";

// NÃO ALTERAR!
include("include/funcoes_itau.php"); 
include("include/layout_itau.php");


?>
