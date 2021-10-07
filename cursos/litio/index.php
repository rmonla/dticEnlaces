<?php
	//include_once "../.app.php";
	//goDst("UTNLaRioja");


	header('Content-Type: text/html; charset=utf-8');

	$titu = "CURSOS.LITIO";
	$desc = "INDUSTRIALIZACIÓN NACIONAL DEL LITIO CON TECNOLOGÍA AUTÓNOMA - UTNLaRioja 2021";

	define('SITIO', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('URL', SITIO.'21/cursos/litio');
	
	
	$imag = SITIO."_imgs/logoUTNLR-Mini.png";

	$time = 0;
	$dest = URL;

	$idG    = "615e3fb133ac310d7d7fbc0a";
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
