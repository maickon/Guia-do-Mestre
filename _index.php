<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META NAME="guerra dos mundos - o novo Card Game" CONTENT="Autor: Maickon Rangel, Categoria: jogos de cartas">
<META NAME="google-site-verification" CONTENT="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
<META NAME="robots" CONTENT="noindex,nofollow">
<link rel="shortcut icon" href="icon.png" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guarra dos Mundos</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
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
    <a href="_index.php?pagina=cartas&tipo=criaturas">Cartas</a>|
    <a href="_index.php?pagina=regras">Regras</a>|
    <a href="_index.php?pagina=historia">Hist&oacute;ria</a>|
    <a href="_index.php?pagina=sobre">Sobre</a>|
    <a href="_index.php?pagina=download">Download</a>
    <!--<div class="login">
        <form action="verificar_usu.php" method="post">
        Logar <input name="password" type="password" size="30" maxlength="50" /><input name="logar" type="submit" value="logar" />
        </form>
    </div>-->
    </div>
    <br />
    
   <?php
   		
		if($_GET['pagina'] == ''){
			require('home.php');
		}else{
			switch($_GET['pagina']){
				
				case 'efeitos':require('efeitos.php');
				break;
				
				case 'cartas':require('cartas.php');
				break;
				
				case 'regras':require('regras.php');
				break;
				
				case 'historia':require('historia.php');
				break;
				
				case 'magias':require('magias.php');
				break;
				
				case 'sobre':require('sobre.php');
				break;
				
				case 'download':require('download.php');
				break;
			}
		}
   ?>
    
    <!-- end .content --></div>
  
  
  <div class="footer" align="center">
    <p>Site Guerra dos Mundos</p>
    <p>Desenvolvido por Maickon Rangel</p>
     Card Game &copy; 2013
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
