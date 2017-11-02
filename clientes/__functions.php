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
 $valor=$dominio[$time];
 return number_format($valor,0,".,",".");
 
}

function getPrecioProducto($id,$time="annually"){

 $producto= $producto=getProductsPricing($id);
 $producto=(array)$producto;
 $valor=$producto[$time];
 return number_format($valor,0,".,",".");
 
 }


?>