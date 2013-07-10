<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href= "../css/index.css" />
<link rel="stylesheet" type="text/css" href="../css/historias.css" />
<link rel="stylesheet" type="text/css" href="../css/armas.css" />
</head>

<body>

<div class="container">
  <div class="header">
  	 <?php require_once '../cabecalho.php';?>
    <!-- fim do cabeçalho -->
  </div>
  
  <div class="sidebar1" >
  
    <?php require_once '../menu.php';?>
    
   	<?php require_once '../menuLateral.php'; ?>
   	
   	<!-- fim dos menus laterais -->
  </div>
      <p><h1>Histórias de NPCs</h1></p>
      <p class="margem">Olá ! Aqui temos uma gerador de hstórias eleatórias para seus personagens NPC.</p>
 	  <p class="margem">Para dar mais vida aos personagens NPCs resolvi criar um simples gerador de história
 	  na qual você poderá ter uma breve base da história de seus NPCs.</p>
 	  <p class="margem">Por enquanto as combinações de histórias possiveis são poucas mas conforme o andar da carroagem,
 	  ampliarei esta ferramenta que inrriquece a sua aventura.</p>
	<br />

	<?php

		require_once '../classes/historiasPersonagem.php';
		
		if(($_GET['estado'] == true)){
			
			$historia = new HistoriasPersonagem('', '', '');
			$historia->gerarInicio();
			$historia->gerarMeio();
			$historia->gerarFim();
	?>
	<div class="historia">
			<?php echo '<br />'.$historia->gerarHistoriaCompleta(); ?>
	</div>
	<?php 
		}else{
			echo '<div align="center">
					<h1 align="center">Gere uma História !</h1>
				  </div>';
		}
	?>

	<br />
    <?php require_once '../historias/historiaDoPersonagemMenu.php';?>
    <br />
      
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>
