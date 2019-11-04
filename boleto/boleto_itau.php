<?php


#include("../includes/inicializa.php");
require_once("../includes/database.php");
require_once("../includes/function.php");



$textoCriptografado = base64_encode($_GET['i']);
$textoDescriptografado = base64_decode($_GET['i']);

$id_boleto = $textoDescriptografado;

$q = "SELECT * FROM boletos WHERE id_boleto = '$id_boleto' "; 
$q = $database->query($q);
$r = $database->fetch_object($q);

$vencimento_atual = $r->data_vencimento;




# tipo empresa	
	/*
if($r->tipo == 0 || $r->tipo == 3){
$detalhes = "SELECT SUM(bolsa_pagar) as bolsa_pagar, SUM(transporte_pagar) as transporte_pagar, SUM(alimentacao_pagar) as alimentacao_pagar FROM frequencia_pagamento where id_frequencia_declarada = '$r->id_frequencia_declarada' ";
$e = "SELECT nome_fantasia,endereco,bairro,c.cidade,cep,e.sgl_estado,cnpj FROM empresas em JOIN estados e ON e.cod_estado = em.uf JOIN cidades c ON c.id = em.cidade WHERE em.id = '$r->empresa'  "; 
$e = $database->query($e);
$s = $database->fetch_object($e);
$detalhar = $database->query($detalhes);
$detalhes_boleto = $database->fetch_object($detalhar);
$empresa = utf8_encode($s->nome_fantasia);
$end_empresa = utf8_encode($s->endereco." - ".$s->bairro);

$valor_cobrado = $r->valor_em;

	if($r->valor_bolsa) {
        $valor_cobrado = $r->valor_em + $r->valor_bolsa;
    }

# tipo estagiario
}elseif($r->tipo == 1){

$e = "SELECT e.nome,e.endereco,e.bairro,es.sgl_estado,e.cep,c.cidade FROM estagiarios e JOIN estados es ON es.cod_estado = e.estado JOIN cidades c ON c.id = e.cidade WHERE e.id = '$r->empresa'";
$e = $database->query($e);
$s = $database->fetch_object($e);
$empresa = utf8_encode($s->nome);
$end_empresa = utf8_encode($s->endereco." - ".$s->bairro);

$valor_cobrado = $r->valor_em;
	
}*/
$valor_cobrado = $r->valor_boleto;

// ------------------------- DADOS DINÂMICOS DO SEU CLIENTE PARA A GERAÇÃO DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formulário c/ POST, GET ou de BD (MySql,Postgre,etc)	//

// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 5;
$taxa_boleto = 0;
#$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006";
$data_venc = data($r->data_vencimento);
$valor_cobrado = $valor_cobrado; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto= number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

/*$dadosboleto["nosso_numero"] = $r->id;  // Nosso numero - REGRA: Máximo de 8 caracteres!
$dadosboleto["numero_documento"] = "1".str_pad((string)$r->id, 6, "0", STR_PAD_LEFT);	// Num do pedido ou nosso numero*/
$dadosboleto["nosso_numero"] = $r->nosso_numero;  // Nosso numero - REGRA: Máximo de 8 caracteres!
$dadosboleto["numero_documento"] = "1".str_pad((string)$r->nosso_numero, 6, "0", STR_PAD_LEFT);	// Num do pedido ou nosso numero
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emissão do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula


########### ATUALIZANDO BOLETO CASO TENHA PASSADO A DATA DE VENCIMENTO ###########
// pegando a data de vencimento e convertendo para ser comparada
$vencimento_atual = str_replace("-","",$r->vencimento); 

// pegando a data atual e convertendo para ser comparada
$data_atual = str_replace("-","",date("Y-m-d"));
/*
if($data_atual > $vencimento_atual){
	$diff_dias = diffDate(date("Y-m-d"),$r->vencimento, 'D')+1; // somando 1 para contar o dia atual
	$dadosboleto["data_vencimento"] = date("d/m/Y");
		
	//Alteração Manual de Datas
	if($_GET['df']){
		$_POST['data_futura'] = converte_data(base64_decode($_GET['df']));
	}
	if($_GET['nj']){
		$_POST['nao_cobrar_juros'] = $_GET['nj'];	
	}

	if(isset($_POST['data_futura']) && !(is_null($_POST['data_futura'])) && $_POST['data_futura'] != "" && $_POST['data_futura'] != 0){
		
		//echo $_POST['data_futura'];
		//echo "<!--".$data_atual." > ".$vencimento_atual."-->";
		
		$data_futura_bd = $_POST['data_futura'];
		$data_futura = converte_data($data_futura_bd);
		$data_atual = str_replace("-","",$data_futura_bd);
		$diff_dias = diffDate($r->vencimento,$data_futura, 'D')+1; // somando 1 para contar o dia atual
		$dadosboleto["data_vencimento"] = converte_data($data_futura);
	}
	if(!isset($_POST['nao_cobrar_juros']) || is_null($_POST['nao_cobrar_juros']) || $_POST['nao_cobrar_juros'] == "" || $_POST['nao_cobrar_juros'] == 0){
		$dados_franquia = $database->fetch_object($database->query("SELECT multa/100 multa, juros/100 juros FROM franquia_dados_bancarios WHERE id_franquia = '$r->id_franquia'"));
		$multa_calculada = $valor_boleto * $dados_franquia->multa;
	    $taxa_por_dia = ($valor_boleto * $dados_franquia->juros)/30;
	    $dadosboleto["valor_boleto"] = number_format($valor_boleto + ($taxa_por_dia*$diff_dias) + $multa_calculada,2,',','');
	    $valor_echo = $dadosboleto["valor_boleto"];
		
		//$dadosboleto["valor_boleto"] = number_format( (($valor_boleto + ($valor_boleto/10) ) + ( ($valor_boleto*0.02/30)*$diff_dias ) ),2,',','');
	}
}*/
########### ########### ########### ########### ########### ########### ###########

// DADOS DO SEU CLIENTE

$e = "SELECT nome,endereco,bairro,c.cidade,cep,e.sgl_estado,cpf FROM candidatos em 
	JOIN estados e ON e.cod_estado = em.uf JOIN cidades c ON c.id = em.cidade WHERE  em.id = '$r->id_candidato'  ";

$dados_boleto = $database->query("SELECT c.curso, i.nome_fantasia, i.nome_instituicao
								FROM boletos bs
								JOIN bolsas b ON bs.id_bolsa = b.id_bolsa
								JOIN cursos c ON b.curso = c.id
								JOIN ies i ON b.id_ies = i.id
								WHERE bs.id_boleto = '$id_boleto'");
$r_dados = $database->fetch_object($dados_boleto);

$instituicao = utf8_encode($r_dados->nome_fantasia)." - ".utf8_encode($r_dados->nome_instituicao)." Curso: ".utf8_encode($r_dados->curso);

$e = $database->query($e);
$s = $database->fetch_object($e);
$empresa = utf8_encode($s->nome);
$end_empresa = utf8_encode($s->endereco." - ".$s->bairro);

$dadosboleto["sacado"] = $empresa;
$dadosboleto["cnpj_cliente"] = $s->cpf;
$dadosboleto["endereco1"] = $end_empresa;
$dadosboleto["endereco2"] = utf8_encode($s->cidade." - ".$s->sgl_estado)." -  CEP: ".$s->cep;

// INFORMACOES PARA O CLIENTE
$qtd_decimal = explode('.', $r->qtd_estagiarios);
if($qtd_decimal[1] > 0){
    $r->qtd_estagiarios = number_format($r->qtd_estagiarios,4,',','');
}else{
    $r->qtd_estagiarios = intval($r->qtd_estagiarios);
}

$dadosboleto["demonstrativo1"] = "Valor referente a adesão ao progama Mais Bolsas Brasil.";
$dadosboleto["demonstrativo2"] = "";
$dadosboleto["demonstrativo4"] = "http://www.maisbolsasbrasil.com.br";
$dadosboleto["instrucoes1"] = "- Não receber após o vencimento.";
$dadosboleto["instrucoes2"] = "Valor referente a adesão ao progama Mais Bolsas Brasil.";
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
$dadosboleto["identificacao"] = "MAIS BOLSAS BRASIL - WJC GESTAO";
$dadosboleto["cpf_cnpj"] = "30.731.245/0001-50";
$dadosboleto["endereco"] = "Rua Alvorada, 1289, CONJ 609";
$dadosboleto["cidade_uf"] = "São Paulo/SP";
$dadosboleto["cedente"] = "MAIS BOLSAS BRASIL - WJC GESTAO";

// NÃO ALTERAR!
include("include/funcoes_itau.php"); 
include("include/layout_itau.php");


?>
