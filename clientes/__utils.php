<?php
@session_start();
if(isset($_GET["change_country"])){
	$_SESSION["iso_pais"]=$_GET["iso_pais"];
	$_SESSION["moneda"]=$_GET["currency"];
	echo json_encode(array("success"=>true));
}

?>