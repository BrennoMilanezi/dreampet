<?php
include("../includes/inicializa.php");

$campo = $_GET['campo'];
$valor = $_GET['valor'];
$tipo = $_GET['tipo'];

if($campo == "busca_produtos" && $tipo == "filtro"){
	$valor = explode("@", $valor);
	$ordem = $valor[0];
	$categoria = $valor[1];
	$preco_array = explode("-", $valor[2]);
	$preco_menor = $preco_array[0];
	$preco_maior = $preco_array[1];
	if(!$preco_maior){
		$preco_maior = 500;
	}
	
	$and_busca = "";
	
	if($categoria > 0){
		$and_busca .= " AND id_categoria = '$categoria' ";
	}

	$and_busca .= " AND valor >= '$preco_menor' AND valor <= '$preco_maior' ";

	if($ordem == 1){
		$and_busca .= " ORDER BY valor ASC ";
	}elseif($ordem == 2){
		$and_busca .= " ORDER BY valor DESC ";
	}
	include("../lista_produtos.php");
}
?>