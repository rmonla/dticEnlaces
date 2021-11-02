<?php
	
	// http://www.frlr.utn.edu.ar/l/21/ev/coros?03


	header('Content-Type: text/html; charset=utf-8');

	$titu = "Feria de la Música 7ª Edición | UTNLaRioja";
	$desc = "Encuentro de COROS |>> Coro Provincial de Jóvenes
- Dir. Nehuen CAMACHO

|>> Coro Escuela Dante Alighieri
- Dir. Andres FLORES

|>> Coro Docentes Municiales
- Dir. Ricardo FLORES

|>> Coro Polifónico de la Provincia
- Dir. Jorge SALICA";

	define('SITIO', 'http://www.frlr.utn.edu.ar/l/');
	define('URL', SITIO.'21/ev/coros/');
	
	
	$imag = URL."02Nov.jpeg";

	$time = 30;
	$dest = URL;

	$idG    = "618065512a7a440db7581a25";
	$source = "https://view.genial.ly/$idG";

	$htmRefresh = ($time) ? "<meta http-equiv='Refresh' content='$time;url=$dest'/>" : "" ;


	echo <<<HTML

	<html>
		<head>
			<title>$titu</title>
			<meta property="og:title"  content="$titu">
			<meta name="description"   content="$desc">
			<meta property="og:image"  content="$imag">
			$htmRefresh
		</head>
		<body>
			<center>
				<p>
					<div">
						<div >
							<iframe frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="$source"></iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;


?>
