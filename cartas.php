
<p>Esta lista de cartas pertencem a primeira expanção OFICIAL do jogo, quando uma nova expanção for lançada, será aqui que apresentaremos a lista.</p>
<p>Observe que dividimos as lista em CRIATURAS, MAGIAS e ARTEFATOS para melhor organização.</p>

<div class="menu_cards">
    <a href="_index.php?pagina=cartas&tipo=criaturas">Criaturas</a>|
    <a href="_index.php?pagina=cartas&tipo=magias">Magias</a>|
    <a href="_index.php?pagina=cartas&tipo=artefatos">Artefatos</a>|
    <br />
</div>
<?php

	if($_GET['pagina'] == 'cartas' && $_GET['tipo'] == 'criaturas'){
			require('classes/card.class.php');
			require('classes/criaturas.php');
				for($i = 0; $i< count($cartas); $i++){
					print "<div class='card'>";
						print "<h3>".$cartas[$i]->nome."</h3>";
						print "<p>Expanção: ".$cartas[$i]->expancao." | ".$cartas[$i]->nivel."</p>";
						print "<p> ".$cartas[$i]->atk." <>".$cartas[$i]->def."</p>";
						print "<p> ".$cartas[$i]->mag." <>".$cartas[$i]->res."</p>";
						print "<p> ".$cartas[$i]->descricao."</p>";
					print "</div>";
					print "<hr />";
				}
				
			}elseif($_GET['pagina'] == 'cartas' && $_GET['tipo'] == 'magias'){
				require('classes/card.class.php');
				require('classes/magias.php');
				
				for($i = 0; $i< count($cartas); $i++){
		
					print "<div class='card'>";
						print "<h3>".$cartas[$i]->nome."</h3>";
						print "<p>Expanção: ".$cartas[$i]->expancao."</p>";
						print "<p> ".$cartas[$i]->descricao."</p>";
						print "<p> ".$cartas[$i]->mag."<>".$cartas[$i]->for_."</p>";
					print "</div>";
					print "<hr />";
				}
				
			}elseif($_GET['pagina'] == 'cartas' && $_GET['tipo'] == 'artefatos'){	
				require('classes/card.class.php');
				require('classes/artefatos.php');
				
					for($i = 0; $i< count($cartas); $i++){
		
					print "<div class='card'>";
						print "<h3>".$cartas[$i]->nome."</h3>";
						print "<p>Expanção: ".$cartas[$i]->expancao."</p>";
						print "<p> ".$cartas[$i]->descricao."</p>";
						print "<p> ".$cartas[$i]->mag."<>".$cartas[$i]->for_."</p>";
					print "</div>";
					print "<hr />";
					
					}
			}
			

	

?>
