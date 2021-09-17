<?php
	//include_once "../.app.php";
	//goDst("UTNLaRioja");


	header('Content-Type: text/html; charset=utf-8');

	$titu = "CURSOS.HUAWEI";
	$desc = "ACADEMIA HUAWEI - UTNLaRioja 2021";

	define('SITIO', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual/');
	define('URL', SITIO.'21/cursos/huawei');
	
	
	$imag = SITIO."_imgs/logoUTNLR-Mini.png";

	$time = 0;
	$dest = URL;

	$idG    = "614284b90b19a40d8ebd00d5";
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
