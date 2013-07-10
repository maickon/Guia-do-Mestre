<?php 

	function gerar_boss(){
		
		$escolido = rand(1,2);
		$personagem = NULL;
		
		switch($escolido){
		
			case 1: $personagem = 'katsuo';
			break;
			
			case 2: $personagem = 'Morbius';
			break;
		}
		
		return $personagem;
	}
	
	gerar_boss();

?>