<?php
@session_start();
include dirname(__FILE__).'/__queries.php';

$moneda="COP";
$iso_pais="CO";
$symbol="$";

if(isset($_SESSION["moneda"])){
	 $moneda=@$_SESSION["moneda"];
	 $obj_currency=getCurrency();
	 $symbol=$obj_currency->prefix;
}

if(isset($_SESSION["iso_pais"])){
	 $iso_pais=@$_SESSION["iso_pais"];
}

function getMoneda(){
	global $moneda;
	return $moneda;
}

 function getSymbol(){
 	global $symbol;
 	return $symbol;
 }	

function getTelefonoPais(){

	$telefonos=getPaisesTelefonos();
	global $iso_pais;

	return $telefonos[$iso_pais];
}

function getPais(){

$paises=getPaises();
global $iso_pais;
return $paises[$iso_pais];

}

function getISOPais(){

$paises=getPaises();
global $iso_pais;
return $iso_pais;

}
function getPaises(){

$paises=array("AR"=>"Argentina",
			 "CO"=>"Colombia",
			 "US"=>"Estados Unidos",
			 "ES"=>"España",
			 "PE"=>"Peru",
			 "ME"=>"Mexico",
			 );

return $paises;

}

function getPaisesTelefonos(){

$paises=array("AR"=>"(+54) 115-199-3130",
			 "CO"=>"(+57-4) 444-89-10",
			 "US"=>"(+1) 646-432-68-31",
			 "ES"=>"(+34) 902-041-172",
			 "PE"=>"(+51) 1-720-01-95",
			 "ME"=>"(+54) 115-199-31-30",
			 );

return $paises;

}


function getDomainExtensions(){
 
 $dominios=getDomainPricing();
 $extensions=array();
 foreach ($dominios as $dominio) {
 	$extensions[]=$dominio->extension;
 }
 return $extensions;

}

function getPrecioDominio($ext,$time="msetupfee",$type="domainregister"){

 $dominio= $dominios=getDomainPricing($ext,$type);
 $dominio=(array)$dominio;
 //var_dump($dominio);

 $valor=$dominio[$time];
 return number_format($valor,0,".,",".");
 
}

function getPrecioProducto($id,$time="annually",$meses=1){

 $producto= $producto=getProductsPricing($id);
 $producto=(array)$producto;
 $valor=$producto[$time]/$meses;
 return number_format($valor,0,".,",".");
 
 }

 function getPrecioPlanoProducto($id,$time="annually",$meses=1){

 $producto= $producto=getProductsPricing($id);
 $producto=(array)$producto;
 $valor=$producto[$time]/$meses;
 return $valor;
 
 }


?>