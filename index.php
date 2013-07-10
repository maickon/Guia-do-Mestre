<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guia do mestre</title>
<link rel="stylesheet" type="text/css" href= "css/index.css" />
<link rel="stylesheet" type="text/css" href="css/armas.css" />
</head>

<body>

<div class="container">
  <div class="header">
  	 <?php require_once 'cabecalho.php';?>
    <!-- fim do cabeçalho -->
  </div>
  
  <div class="sidebar1" >
  
    <?php require_once 'menu.php';?>
    
   	<?php require_once 'menuLateral.php'; ?>
   	
   	<!-- fim dos menus laterais -->
  </div>
  
  	<?php 
  		require_once 'corpo.php'; 
  		
  		require_once 'pics.php'; 
  	?>
    <br />
    <br />
  <div class="footer">
    <?php require_once 'rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>
