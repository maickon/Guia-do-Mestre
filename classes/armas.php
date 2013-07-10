<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	
	abstract class Armas{
		
		var $nome = '';
		var $custo = 0;
		var $preco = 0;
		var $dano = '';
		var $decisivo = '';
		var $distancia = '';
		var $peso = '';
		var $tipo = '';
		var $descricao = '';
		
		abstract function gerarNomeDaArma();
		
	function __construct($nome,$custo,$preco,$dano,$decisivo,$distancia,$peso,$tipo,$descricao,$categoria){
		
		$this->nome = $nome;
		$this->custo = $custo;
		$this->preco = $preco;
		$this->dano = $dano;
		$this->decisivo = $decisivo;
		$this->distancia = $distancia;
		$this->peso = $peso;
		$this->tipo = $tipo;
		$this->descricao = $descricao;
	}
	function gerarTipoDeArma(){
		$categoria = array("Armas Leves - Corpo a Corpo","Armas de Uma Mão - Corpo a Corpo",
				"Armas de Duas Mãos - Corpo a Corpo","Armas de Ataque à Distância");
		$tamanho  = count($categoria);
		$escolido = rand(0, $tamanho-1);
		$this->tipo = $categoria[$escolido];
		
		return $this->tipo;
	}
	}

?>