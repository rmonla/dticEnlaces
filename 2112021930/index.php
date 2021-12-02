<?php
	
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


	$url = "http://www.frlr.utn.edu.ar/l/";
	
	$tit = "Acto de Colación de Pregrado y Posgrado - UTNLaRioja";
 	
 	$dsc = "Jueves 2 Dic. 19:30 Hs.";

	$dst  = $url.'2112021930/';
	
	// http://www.frlr.utn.edu.ar/l/2112021930?01
	
	$img  = $dst."final.png";
	
	$idG  = "61a81aa169f6550d873730f1";

	$time = 30;
	

	$htmSrc = "https://view.genial.ly/$idG";
	$htmRef = ($time) ? "<meta http-equiv='Refresh' content='$time;url=$dst'/>" : "" ;

	echo <<<HTML

	<html>
		<head>
			<title>$tit</title>
			<meta property="og:title"  content="$tit">
			<meta name="description"   content="$dsc">
			<meta property="og:image"  content="$img">
			$htmRef
		</head>
		<body>
			<center>
				<p>
					<div">
						<div >
							<iframe 
								frameborder="0" 
								style="position: 
								absolute; top: 0; left: 0; width: 100%; height: 100%;" 
								src="$htmSrc">
							</iframe>
						</div>
					</div>	
				</p>
			</center>
		</body>
	</html>		

HTML;


?>
