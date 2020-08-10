<?php

	
	$página_inicio = file_get_contents('https://login.live.com');

	
	//echo htmlentities($página_inicio); //quitar comentario si se desea el codigo de la pagina
	
	header('content-type: text/plain'); //setea el contenido de la pagina en formato texto plano
	
	
	preg_match_all('/(?:href|src)="([^"]+)"/i', $página_inicio, $matches); //expresion regular que busca los recursos y archivos css cargados por el portal 
	$l = sizeof($matches[1]);
	$i = 0;
	while($i < $l){
		if(preg_match('/^(https?)/i', $matches[1][$i])){
			print_r($matches[1][$i]);
			echo "\r\n";
		}
		$i++;
	}
	
	print_r($matches);

?>
