<?php 

  include_once '.appVERs.php';


/* «® CONSTANTES  ®» */

  define('APPNOM', 'dticEnlaces');
  define('APPDET', '

      ## Acortador de Enlaces y Re-Direccionador. ## 
      El objetivo del presente módulo es el generar enlaces mas cortos en el sitio UTNLaRioja.
      Se encuentra en la URL 
        --> http://www.frlr.utn.edu.ar/l

    ');
  
  //define('APPVER', $appVer);
  define('APPAUT', '«®» Ricardo MONLA <rmonla@gmail.com> «®»');
  define('APPDEV', 'https://github.com/rmonla/dticEnlaces');
  define('APPPUB', 'http://www.frlr.utn.edu.ar/l/');
  
  define('APPHOST', 'http://www.frlr.utn.edu.ar/');
  
  define('APPYTB', 'https://www.youtube.com/channel/UC_cmKYtM9hy9-UI_qHpmahw');
  //define('APPIMG', APPHOST.'_imgs/');

/* «® PREDETERMINACION  ®» */
  header('Content-Type: text/html; charset=utf-8');
  date_default_timezone_set('America/Argentina/La_Rioja');

?>
