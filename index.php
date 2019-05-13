<?php
	date_default_timezone_set("America/Sao_Paulo");
	
	function saudacao(){
		$hora = date("h");

		if($hora >=0 && $hora <12){
			$respostas = "Bom dia ".date("H:i:s");
		}
		if($hora >=12 && $hora <18){
			$respostas = "Boa tarde ".date("H:i:s");
		}
		if($hora >=18 && $hora <0){
			$respostas = "Boa noite ".date("H:i:s");
		}
		return $respostas;
	}

	echo saudacao();

?>