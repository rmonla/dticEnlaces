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

	$titu = "GAIA.ECIDE.III - UTNLaRioja";
//	$desc = "Martes 16 Noviembre, 19Hs.";
	
 	$desc = "III Encuentro de Comunicación, Investigación, Docencia y Extensión 2021
 	-- 18 y 19 Noviembre, 18Hs.";

	define('SITIO', 'http://www.frlr.utn.edu.ar/l/');
	define('URL', SITIO.'21/ev/ecide/');
	
	
	$imag = URL."logoGAIA2.jpg";
//	$imag = URL."final.png";

	$time = 30;
	$dest = URL;

	$idG    = "61951087ed208e0d9fcbca4e";
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
