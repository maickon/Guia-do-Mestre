
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
      <p><h1>Gerador de Armas Mágicas Aleatórias</h1></p>
      <p class="margem">Apenas pressionando o botão "Gerar" você encontrará uma arma como características conforme descrita no
      livro do jogador. As armas podem ser: Simples,comuns e exóticas (tanto mágica ou não).</p>
 	  <p class="margem">As opções acima referem-se a que categoria você deseja gerar as armas, caso deseje somente armas simples,
      marque apenas armas simples, caso deseje armas mágicas, marque-a ou se desejar mais de uma categoria, merque todas
      	que desejar. Após marcado as opções desejadas pressione o botão e gere a sua arma.</p>
	<br />

	<?php 
		require_once '../classes/armas.php';
		require_once '../classes/armasMagicas.php';
			
			if($_GET['magica'] == true){
			
				 $magica = new ArmasMagicas('', 0, 0, '', '', '',
				 						    '', '', '', '', '',
				 						    '', '', '', 
				 						    '', '', 0, 0,'Armas Mágicas');
				 $magica->gerarTipoDeArma();
				 $magica->gerarNomeDaArma();
				 $magica->gerarArma();
				 $magica->gerarBonusMagico();
				 $magica->gerarCategoriaMagica();
				 $magica->gerarPrecoBase();
				 $magica->gerarCustoDaArma();
				 $magica->gerarArtefato();
				 $cat = $magica->categoriaMagica;
				 $magica->categoriaMaisCinco($cat);
				 
				 
				 $nome = $magica->nome;
				 //$custo = $magica->custo;
				 //$preco = $magica->preco;
				 $dano = $magica->dano;
				 $decisivo = $magica->decisivo;
				 $distancia = $magica->distancia;
				 $peso = $magica->peso;
				 $tipo = $magica->tipo;
				 $categoria = $magica->categoria;
				 $bonusMagico = $magica->bonusMagico;
				 $categoriaMagica = $magica->categoriaMagica;
				 $habilidade1  = $magica->habilidadeMagica1;
				 $habilidade2  = $magica->habilidadeMagica2;
				 $habilidade3  = $magica->habilidadeMagica3;
				 $habilidade4  = $magica->habilidadeMagica4;
				 $artefato = $magica->artefato;
				 $custoDaArma = $magica->custoDaArma;
				 $precoBase = $magica->precoBase;
				 $preco = $magica->custoTotal();
				 $descricao = $magica->descricao;				 
				 
				 require_once '../armas/armasMagicaFormulario.php';
			}else{
				echo '<h1>Error !</h1>';
			}
?>

	<br />
    <?php require_once '../armas/armasMenu.php';?>
    <br />
      
  <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>



	