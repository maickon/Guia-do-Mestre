<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; ecoding=utf-8" />
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
  <p><h1>Gerador de armaduras aleatórias</h1></p>
  <p class="margem">Apenas pressionando o botão "Gerar" você encontrará uma arma como características conforme descrita no
  livro do jogador. As armaduras podem ser: Simples,comuns e exóticas (tanto mágica ou não).</p>
	<br />
	<?php 
	
		require_once '../classes/armadura.php';
		require_once '../classes/armadurasMagica.php';
		
		if($_GET['estado'] == 'comun'){
			 $comun = new Armaduras('', '', 0, '', '', '', '', '', '', '', '', '', 'Armaduras');
			 
			 $comun->gerarTipoDeArmadura();
			 $comun->gerarNomeDaArmadura();
			 $comun->gerarArmadura();
			 
			 $nome = $comun->nome; 
			 $tipo = $comun->tipo;
			 $custo = $comun->custo;
			 $bonusNaCa = $comun->bonusNaCa;
			 $destrezaMaxima = $comun->destrezaMaxima;
			 $penalidadeNaPericia = $comun->penalidadeNaPericia;
			 $falhaDeMagiaArcana = $comun->falhaDeMagiaArcana;
			 $deslocamentoMedio = $comun->deslocamentoMedio;
			 $deslocamentoPequeno = $comun->deslocamentoPequeno;
			 $peso = $comun->peso;
			 $descricao = $comun->descricao;
			 
			 require_once '../armaduras/armadurasFormulario.php';
			}else if($_GET['estado'] == 'magica'){
				 $magica = new ArmadurasMagicas('', '', 0, '', '', '', '', '', '', '', '', 'Armaduras Mágicas','',0);
			 
				 $magica->gerarTipoDeArmadura();
				 $magica->gerarNomeDaArmadura();
				 $magica->gerarHabilidadeMagica();
				 $magica->gerarArmadura();
				 
				 $nome = $magica->nome; 
				 $tipo = $magica->tipo;
				 $bonusNaCa = $magica->bonusNaCa;
				 $destrezaMaxima = $magica->destrezaMaxima;
				 $penalidadeNaPericia = $magica->penalidadeNaPericia;
				 $falhaDeMagiaArcana = $magica->falhaDeMagiaArcana;
				 $deslocamentoMedio = $magica->deslocamentoMedio;
				 $deslocamentoPequeno = $magica->deslocamentoPequeno;
				 $peso = $magica->peso;
				 $habilidade = $magica->habilidade;
				 $custo = $magica->custo;
				 $custoMagico = $magica->precoBase;
				 $precoTotal =  $magica->gerarPrecoTotal();
				 $descricao = $magica->descricao;
				 
				 require_once '../armaduras/armadurasMagicasFormulario.php';
			}elseif($_GET['estado'] == 'false'){
	?>		
		<p align="center">
			<img src="../img/armaduras.jpg" alt="Armadura Sagrada Do Paladino Virtuoso " title="Armadura Sagrada Do Paladino Virtuoso" width="500" height="400"/>
		</p>
	<?php 		}
	?>
	
	<br />
    	<?php require_once '../armaduras/armadurasMenu.php';?>
    <br />
    
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>

