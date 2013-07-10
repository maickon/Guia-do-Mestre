<?php

	$opcao = $_GET['opcao'];
	
	switch($opcao){
		case 'armas':
			require_once 'Paginas/armasPage.php';
			
		case 'escudos':
			require_once  'Paginas/esudosPage.php';
			
		case 'armaduras':
			require_once 'Paginas/armadurasPage.php';
			
		default: echo '<h1>Error 404<br \> Objeto não encontrado!</h1>';
	}

?>