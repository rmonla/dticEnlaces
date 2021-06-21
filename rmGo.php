<?php
	define('SITIO', 'http://www.frlr.utn.edu.ar/');
	define('AVIRTUAL', SITIO.'dtic/aulavirtual/');

	$bdDestinos = [
		"0623iel" => [ AVIRTUAL."21/final/0623iel", "Pres. Proy. Final Ing. Electrónica"]
	];

	function goDst($id=''){
		global $bdDestinos;

		$dst = ( isset($bdDestinos[$id]) ) ? $bdDestinos[$id][0] : SITIO ;	
		header('Location: '.$dst);
		die();
	}

?>
