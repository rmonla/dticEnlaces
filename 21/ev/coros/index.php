<?php
	
	// http://www.frlr.utn.edu.ar/l/21/ev/coros?13
	// 
	// FACEBOOK
	//  EVENTO: 
	//  	https://www.facebook.com/events/1029159644528296/
	//  	https://www.facebook.com/live/producer/1398955060530177/?entry_point=event_confirmation_dialog
	//  	
	//  	https://www.facebook.com/ElBoletinUtnLaRioja/videos
	//  	
	//  
	//  CLAVE: FB-541283073851852-0-AbwxGsm8X4eCUhXi
	//  URL:   rtmps://live-api-s.facebook.com:443/rtmp/
	//  
	//  https://www.facebook.com/ElBoletinUtnLaRioja/live_videos/
	//  
	//  
	// YOUTUBE
	//  EVENTO: 
	//  	https://www.facebook.com/events/1029159644528296/
	//  	https://www.facebook.com/live/producer/1398955060530177/?entry_point=event_confirmation_dialog
	//  	
	//  	https://www.facebook.com/ElBoletinUtnLaRioja/videos
	//  	
	//  
	//  CLAVE: 7g1r-grz5-4cp9-4tuj-9maz
	//  URL:   rtmp://a.rtmp.youtube.com/live2



	header('Content-Type: text/html; charset=utf-8');

	$titu = "Encuentro de COROS - Feria de la Música 7ª Edición | UTNLaRioja";
	// $desc = "";
	$desc = "Coro Provincial de Niños y Niñas
- Dir. Daniel MERCADO

| Coro Infantil Madre Catalina
- Dir. Rubén CASTAÑEDA

| Coro Kuntur
- Dir. Ricardo PELLIZA

| Coro de Canto Popular Legislatura
- Dir. Andrés FLORES";

	define('SITIO', 'http://www.frlr.utn.edu.ar/l/');
	define('URL', SITIO.'21/ev/coros/');
	
	
	$imag = URL."03Nov.jpeg";

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
