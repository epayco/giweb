<?php
include dirname(__FILE__).'/configuration.php';
require_once dirname(__FILE__).'/vokusql/vendor/autoload.php';
use voku\db\DB;

$db =  DB::getInstance($db_host,$db_username, $db_password, $db_name);
global $db;

function getDomainPricing($ext="",$type="domainregister"){
	//types
	//domainregister,domaintransfer,domainrenew,domainaddons
	global $db;
	$where=array();
	$params=array();
	$currency=getCurrency();
	$currency_id=$currency->id;


	$sql="SELECT* FROM tbldomainpricing d inner join tblpricing p on p.relid=d.id WHERE p.currency=$currency_id";

	if($ext!=""){
		$sql.=" AND d.extension= :extension";
		$params["extension"]=$ext;
	}
	if($type!=""){
		$sql.=" AND p.type= :type";
		$params["type"]=$type;
	}
	$sql.=" order by d.order asc";

	$query=$db->query($sql,$params);
	if($ext!=""){
		$results=$query->fetchObject();

	}else{
		$results=$query->fetchAll();

	}
	return $results;

}


function getProductsPricing($id="",$type="product"){

	global $db;
	global $moneda;
	
	$currency=getCurrency();
	$currency_id=$currency->id;

	$where=array();
	$params=array();

	$sql="SELECT* FROM tblproducts pr inner join tblpricing p on p.relid=pr.id WHERE p.currency=$currency_id";

	if($id!=""){
		$sql.=" AND pr.id= :id";
		$params["id"]=$id;
	}
	if($type!=""){
		$sql.=" AND p.type= :type";
		$params["type"]=$type;
	}
	$sql.=" order by pr.id asc";

	$query=$db->query($sql,$params);
	if($id!=""){
		$results=$query->fetchObject();

	}else{
		$results=$query->fetchAll();

	}
	return $results;

}

function getPricing(){

	global $db;

	$sql="SELECT* FROM tblpricing p order by id asc";
	$query=$db->query($sql);
	$results=$query->fetchAll();
	return $results;

}	


function getCurrency(){
	global $db;
	global $moneda;

	$sql="SELECT* FROM tblcurrencies WHERE code='$moneda'";
	$query=$db->query($sql);
	$result=$query->fetchObject();
	return $result;


}


?>