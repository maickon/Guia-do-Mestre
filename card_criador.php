<?php
	if($_GET['password'] == 'cardgamegdm2013'){
		header('Location:index.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guarra dos Mundos</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/card_edit.css">
</head>

<body>

<div class="container">
  <div class="header"><a href="_index.php?pagina="><img src="img/layout_2.jpg" alt="Guerra dos Mundos" width="100%" height="250" /></a> 
    <!-- end .header --></div>
  <div class="content">
    
    <div class="menu">
    <a href="_index.php?pagina=">Home</a>|
    <a href="_index.php?pagina=efeitos">Efeitos</a>|
    <a href="_index.php?pagina=magias">Magias</a>|
    <a href="_index.php?pagina=cartas">Cartas</a>|
    <a href="_index.php?pagina=regras">Regras</a>|
    <a href="_index.php?pagina=historia">História</a>|
    <a href="_index.php?pagina=sobre">Sobre</a>
    
    </div>
    <br />
    <h1>Seja bem vindo mestre ao centro de criação de Cards aleatórios.</h1>
    <hr />
   <?php
    require('classes/card_criador.class.php');
   
	
		$carta = new Card(1,2,3,'nada',2,5,'L/M',9);
		
		$carta->criar_tipo_card();
		$carta->definir_nivel_card();
	?>
   	<div class="card_edit"> 	
        <img src='img/no-name.jpg' />	
		<label class="tipo"><?php print $carta->tipo; ?></label>
		<label class="atq"><?php print $carta->atq; ?></label>
		<label class="def"><?php print $carta->def; ?></label>
        <label class="res"><?php print $carta->res; ?></label>
        <label class="mag"><?php print $carta->mag; ?></label>
        <label class="lv"><?php print $carta->lv; ?></label>
        <label class="pv"><?php print $carta->pv; ?></label>
		<label class="tendencia"> <?php print $carta->tendencia; ?> </label>
  </div>
  
  <div align="right">
  	<p align="right">
    	<a href="card_criador.php?password"> Novo Card </a>
  	</p>
  </div>
    
    <!-- end .content --></div>
  
  
  <div class="footer" align="center">
    <p>Site Guerra dos Mundos</p>
    <p>Desenvolvido por Maickon Rangel</p>
    &copy; 2013
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
