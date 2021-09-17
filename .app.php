<?php

	include_once '.appDATs.php';

	define('AVIRTUAL', APPHOST.'dtic/aulavirtual/');

	$bdDestinos = [
		"pi22"       => [ AVIRTUAL."22/preing", "Pre-Ingreso 2022"],
		"gaia.confs" => [ AVIRTUAL."21/gaia", "Pres. Proy. Final Ing. Electrónica"],
		"0623iel"    => [ AVIRTUAL."21/final/0623IEL", "Pres. Proy. Final Ing. Electrónica"]
	];

//  exit('Parada11');

	function goDst($id=''){
		global $bdDestinos;

		$dst = ( isset($bdDestinos[$id]) ) ? $bdDestinos[$id][0] : APPHOST ;	
		header('Location: '.$dst);
		die();
	}

?>
