<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href= "../css/index.css" />
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
      <p><h1>Gerador de Idéias aleatórias</h1></p>
      <p class="margem">São mais de 100 trechos de idéias de aventuras disponíveis para você mestre, mestrar a sua campanha.</p>
 	  <p class="margem">As idéias vão desde uma simples busca por uma reliquia até uma complexa história de personagens voltando
 	  no tempo para evitar certas coisas. O objetivo principal não é ditar uma aventura, mas sim dar uma 
 	  simples idéia do começo de uma aventura para auxiliar o mestre que esteja sem uma boa idéia no momento.</p>
	<br />

	<?php 
		require_once '../classes/historias.php';
			
			if(($_GET['aventura'] == true)){
			
				 $aventura = new Historias('', '');
				 
				 $aventura->gerarAventura();
				 $codigo = $aventura->numero;
				 $titulo = $aventura->titulo;
				 $descricao = $aventura->descricao;
				 
				 require_once 'aventuras_formulario.php';
			}else{
				echo '<h1>Error !</h1>';
			}
?>

	<br />
    <?php require_once 'aventurasMenu.php';?>
    <br />
      
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>



	