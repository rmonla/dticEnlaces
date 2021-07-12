<?php 

    define('APPAUT', 'Ricardo MONLA <rmonla@gmail.com>');
    define('APPDEV', 'https://github.com/rmonla/dticEnlaces');
    define('APPPUB', 'http://www.frlr.utn.edu.ar/dtic/aulavirtual');

    define('APPNOM', 'dticEnlaces');
    define('APPDET', '

      ## Acortador de Enlaces y Re-Direccionador. ## 
      El objetivo del presente módulo es el generar enlaces mas cortos en el sitio UTNLaRioja.
      Se encuentra en la URL 
        --> http://www.frlr.utn.edu.ar/l

      ');

    $logVERs = [
      '1.1.5' => 'pi22: Crea el salto.',
      '1.1.4' => 'gaia.confs: Crea el salto.',
      '1.1.3' => '0623iel: Edita información de los enlaces.',
      '1.1.2' => 'Crea los saltos INDEX y PPFINAL0623',
      '1.1.1' => 'Generación de la función de re-direccionamiento goDst($id='')',
      '1.0.1' => 'Inicia codificación del módulo'
    ];
    
    $vers = array_keys($logVERs);
    
    define('APPVER', $vers[0]);

 ?>
