<?php
	if($_POST['password'] == 'cardgamegdm2013'){
		header('Location:card_criador.php?password');
		
	}else{
		print '<h1>Senha incorreta !</h1>';
	};
?>