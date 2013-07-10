<?php
//PAGINAS DE ERRO
// header('Location:error.php?tipo=atributo_nao_encontrado');
// header('Location:error.php?tipo=atributo_errado');

class Personagem{

	public $nome;
	public $nomeJogador;
	public $xp;
	public $nivel;
	public $dv;
	public $raca;
	public $classe;
	public $divindade;
	public $religao;
	public $tendencia;
	public $tamanho;
	public $idade;
	public $sexo;
	public $altura;
	public $peso;
	public $olhos;
	public $cabelos;
	public $pele;
	public $img;
	public $dado_dano;
	
	public $for_;
	public $des_;
	public $con_;
	public $int_;
	public $sab_;
	public $car_;
	
	public $fortitude;
	public $reflexos;
	public $vontade;
	
	public $bonus_base_ataque;
	public $BBA;
	public $deslocamento = 0;
	
	public $talentos = array();
	public $pericias_grad = array();
	public $pericias_nome = array();
	public $pericias_mod = array();
	
	function __construct($nome = '',$nomeJogador = '',$xp = '',$nivel = 0,$dv = 0,$raca = '',$classe = '',$divindade = '',$religiao = '',
						 $tendencia = '',$tamanho = '',$idade = 0,$sexo = '',$altura = '',$peso = '',$olhos = '',$cabelos = '',$pele = '',
						 $img = '',$dado_dano = '',
						 $for_ = 0,$des_ = 0,$con_ = 0,$int_ = 0,$sab_ = 0,$car_ = 0,
						 $bonus_base_ataque = '',$BBA = '',$deslocamento = '',$talentos = '',$pericias_valor = '',$pericias = ''){
		
		$this->nome = $nome;
		$this->nomeJogador = $nomeJogador;
		$this->xp = $xp;
		$this->nivel = $nivel;
		$this->dv = $dv;
		$this->raca = $raca;
		$this->classe = $classe;
		$this->divindade = $divindade;
		$this->religao = $religiao;
		$this->tendencia = $tendencia;
		$this->tamanho = $tamanho;
		$this->idade = $idade;
		$this->sexo = $sexo;
		$this->altura = $altura;
		$this->peso = $peso;
		$this->olhos = $olhos;
		$this->cabelos = $cabelos;
		$this->pele = $pele;
		$this->img = $img;
		$this->dado_dano = $dado_dano;
		$this->for_ = $for_;
		$this->des_ = $des_;
		$this->con_ = $con_;
		$this->int_ = $int_;
		$this->sab_ = $sab_;
		$this->car_ = $car_;
		$this->bonus_base_ataque = $bonus_base_ataque;
		$this->BBA = $BBA;
		$this->deslocamento = $deslocamento;
		$this->talentos = $talentos;
		$this->pericias_valor = $pericias_valor;
		$this->pericias = $pericias;
	}
	
	function gerar_habilidades_pts(){
		
		
		$total_da_rolagem = 0;
		$total_geral = 0;
		
		for($x = 1;$x <= 6;$x++){
			
			$rolagem_1 =  rand(1, 6);
			$rolagem_2 =  rand(1, 6);
			$rolagem_3 =  rand(1, 6);
			$rolagem_4 =  rand(1, 6);
			
			if(($rolagem_1 < $rolagem_2) and ($rolagem_1 < $rolagem_3) and ($rolagem_1 < $rolagem_4)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_3 + $rolagem_4);
			}
			elseif(($rolagem_2 < $rolagem_1) and ($rolagem_2 < $rolagem_3) and ($rolagem_2 < $rolagem_4)){
				$total_da_rolagem = ($rolagem_1 + $rolagem_3 + $rolagem_4);
			}
			elseif(($rolagem_3 < $rolagem_1) and ($rolagem_3 < $rolagem_2) and ($rolagem_3 < $rolagem_4)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_1 + $rolagem_4);
			}
			elseif(($rolagem_4 < $rolagem_1) and ($rolagem_4 < $rolagem_2) and ($rolagem_4 < $rolagem_3)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_3 + $rolagem_1);
			}
			elseif(($rolagem_1 == $rolagem_2)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_3 + $rolagem_4);
			}
			elseif(($rolagem_1 == $rolagem_3)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_3 + $rolagem_4);
			}
			elseif(($rolagem_1 == $rolagem_4)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_3 + $rolagem_4);
			}
			elseif(($rolagem_2 == $rolagem_3)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_1 + $rolagem_4);
			}
			elseif(($rolagem_2 == $rolagem_4)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_1 + $rolagem_3);
			}
			elseif(($rolagem_4 == $rolagem_3)){
				$total_da_rolagem = ($rolagem_2 + $rolagem_1 + $rolagem_4);
			}
			//echo "{$x}- Rolagem: valor tirado: {$total_da_rolagem} <br />";
			if($x == 1){
				$this->for_ = $total_da_rolagem;
			}
			elseif($x == 2){
				$this->con_ = $total_da_rolagem;
			}
			elseif($x == 3){
				$this->des_ = $total_da_rolagem;
			}
			elseif($x == 4){
				$this->int_ = $total_da_rolagem;
			}
			elseif($x == 5){
				$this->sab_ = $total_da_rolagem;
			}
			elseif($x == 6){
				$this->car_ = $total_da_rolagem;
			}
			
			$total_geral += $total_da_rolagem;
		}
		//echo "Pontos Total: {$total_geral}<br />";
	}
	
	function gerar_pts_de_habilidade_add(){
		
		$pts_add = intval(($this->nivel/4));
		return $pts_add;
	}
	
	function distribuir_pts_de_habilidade(){

		$classe = $this->classe;
		switch($classe){
			case "barbaro": 
				$escolha_barbaro = rand(1,3);
				if($escolha_barbaro == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_barbaro == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_barbaro == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}
			break;
			
			case "guerreiro":
				$escolha_guerreiro = rand(1,3);
				if($escolha_guerreiro == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_guerreiro == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_guerreiro == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}	
			break;
			
			case "paladino":
				$escolha_paladino = rand(1,4);
				if($escolha_paladino == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_paladino == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_paladino == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}elseif($escolha_paladino == 4){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;
					$this->car_ = $distribuicao_add;
				}
			break;
			
			case "monge":
				$escolha_monge = rand(1,4);
				if($escolha_monge == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_monge == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_monge == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}elseif($escolha_monge == 4){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->sab_;
					$this->sab_ = $distribuicao_add;
				}
			break;
			
			case 'ladino':
				$escolha_ladino = rand(1,3);
				if($escolha_ladino == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_ladino == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->int_;
					$this->int_ = $distribuicao_add;
				}elseif($escolha_ladino == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->sab_;
					$this->sab_ = $distribuicao_add;
				}
				
			break;
			
			case 'clerigo':
				$escolha_clerigo = rand(1,2);
				if($escolha_clerigo == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;
					$this->car_ = $distribuicao_add;
				}elseif($escolha_clerigo == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->sab_;
					$this->sab_ = $distribuicao_add;
				}
			break;
			
			case 'bardo':
				$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;	
				$this->car_ = $distribuicao_add;
			break;
			
			case 'feiticeiro':
				$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;
				$this->car_ = $distribuicao_add;
			break;
			
			case 'mago':
				$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->int_;
				$this->int_ = $distribuicao_add;
			break;
			
			case 'druida':
				$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->sab_;
				$this->sab_ = $distribuicao_add;
			break;
			
			case 'ranger':
				$escolha_ranger = rand(1,4);
				if($escolha_ranger == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_ranger == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_ranger == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}elseif($escolha_ranger == 4){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->sab_;
					$this->sab_ = $distribuicao_add;
				}
			break;
			
			case 'barbara':
				$escolha_barbaro = rand(1,3);
				if($escolha_barbaro == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_barbaro == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_barbaro == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}
			break;
			
			case 'guerreira':
				$escolha_guerreiro = rand(1,3);
				if($escolha_guerreiro == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_guerreiro == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_guerreiro == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}	
			break;
			
			case 'paladina':
				$escolha_paladino = rand(1,4);
				if($escolha_paladino == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->for_;
					$this->for_ = $distribuicao_add;
				}elseif($escolha_paladino == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_paladino == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->con_;
					$this->con_ = $distribuicao_add;
				}elseif($escolha_paladino == 4){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;
					$this->car_ = $distribuicao_add;
				}
			break;
			
			case 'ladina':
				$escolha_ladino = rand(1,3);
				if($escolha_ladino == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->des_;
					$this->des_ = $distribuicao_add;
				}elseif($escolha_ladino == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->int_;
					$this->int_ = $distribuicao_add;
				}elseif($escolha_ladino == 3){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->sab_;
					$this->sab_ = $distribuicao_add;
				}
				
			break;
			
			case 'cleriga':
				$escolha_clerigo = rand(1,2);
				if($escolha_clerigo == 1){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;
					$this->car_ = $distribuicao_add;
				}elseif($escolha_clerigo == 2){
					$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->sab_;
					$this->sab_ = $distribuicao_add;
				}
			break;
			
			case 'barda':
				$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;	
				$this->car_ = $distribuicao_add;
			break;
			
			case 'feiticeira':
				$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->car_;
				$this->car_ = $distribuicao_add;
			break;
			
			case 'maga':
				$distribuicao_add = $this->gerar_pts_de_habilidade_add() + $this->int_;
				$this->int_ = $distribuicao_add;
			break;
			
		}
	}
	
	function gerar_modificador_forca(){
		
			if(($this->for_ -10)/2 == -0.5){
				$ajuste = -1;
			}elseif(($this->for_ -10)/2 == -1.5){
				$ajuste = -2;
			}elseif(($this->for_ -10)/2 == -2.5){
				$ajuste = -3;
			}elseif(($this->for_ -10)/2 == -3.5){
				$ajuste = -4;
			}elseif(($this->for_ -10)/2 == -4.5){
				$ajuste = -5;
			}else{
				$ajuste = ($this->for_ -10)/2;
			}
	
			$modificador = intval($ajuste);
			if($modificador >= 0){
				$modificador = "+".$modificador;
			}
			return $modificador;
		}
		
	function gerar_modificador_destreza(){
		
		if(($this->des_ -10)/2 == -0.5){
			$ajuste = -1;
		}elseif(($this->des_ -10)/2 == -1.5){
			$ajuste = -2;
		}elseif(($this->des_ -10)/2 == -2.5){
			$ajuste = -3;
		}elseif(($this->des_ -10)/2 == -3.5){
			$ajuste = -4;
		}elseif(($this->des_ -10)/2 == -4.5){
			$ajuste = -5;
		}else{
			$ajuste = ($this->des_ -10)/2;
		}

		$modificador = intval($ajuste);
		if($modificador >= 0){
			$modificador = "+".$modificador;
		}
		return $modificador;
	}
	
	function gerar_modificador_constituicao(){
		
		if(($this->con_ -10)/2 == -0.5){
			$ajuste = -1;
		}elseif(($this->con_ -10)/2 == -1.5){
			$ajuste = -2;
		}elseif(($this->con_ -10)/2 == -2.5){
			$ajuste = -3;
		}elseif(($this->con_ -10)/2 == -3.5){
			$ajuste = -4;
		}elseif(($this->con_ -10)/2 == -4.5){
			$ajuste = -5;
		}else{
			$ajuste = ($this->con_ -10)/2;
		}

		$modificador = intval($ajuste);
		if($modificador >= 0){
			$modificador = "+".$modificador;
		}
		return $modificador;
	}
	
	function gerar_modificador_inteligencia(){
		
		if(($this->int_ -10)/2 == -0.5){
			$ajuste = -1;
		}elseif(($this->int_ -10)/2 == -1.5){
			$ajuste = -2;
		}elseif(($this->int_ -10)/2 == -2.5){
			$ajuste = -3;
		}elseif(($this->int_ -10)/2 == -3.5){
			$ajuste = -4;
		}elseif(($this->int_ -10)/2 == -4.5){
			$ajuste = -5;
		}else{
			$ajuste = ($this->int_ -10)/2;
		}

		$modificador = intval($ajuste);
		if($modificador >= 0){
			$modificador = "+".$modificador;
		}
		return $modificador;
	}
	
	function gerar_modificador_sabedoria(){
		
		if(($this->sab_ -10)/2 == -0.5){
			$ajuste = -1;
		}elseif(($this->sab_ -10)/2 == -1.5){
			$ajuste = -2;
		}elseif(($this->sab_ -10)/2 == -2.5){
			$ajuste = -3;
		}elseif(($this->sab_ -10)/2 == -3.5){
			$ajuste = -4;
		}elseif(($this->sab_ -10)/2 == -4.5){
			$ajuste = -5;
		}else{
			$ajuste = ($this->sab_ -10)/2;
		}
		
		$modificador = intval($ajuste);
		if($modificador >= 0){
			$modificador = "+".$modificador;
		}
		return $modificador;
	}
	
	function gerar_modificador_carisma(){
		
		if(($this->car_ -10)/2 == -0.5){
			$ajuste = -1;
		}elseif(($this->car_ -10)/2 == -1.5){
			$ajuste = -2;
		}elseif(($this->car_ -10)/2 == -2.5){
			$ajuste = -3;
		}elseif(($this->car_ -10)/2 == -3.5){
			$ajuste = -4;
		}elseif(($this->car_ -10)/2 == -4.5){
			$ajuste = -5;
		}else{
			$ajuste = ($this->car_ -10)/2;
		}

		$modificador = intval($ajuste);
		if($modificador >= 0){
			$modificador = "+".$modificador;
		}
		return $modificador;
	}
	
	function gerar_nivel(){
			$valor = rand(1, 20);
			$this->nivel = $valor;
			$this->BBA = $valor;
			return $this->nivel;	
		}
		
	function gerar_sexo(){
		$valor = rand(1,2);
		if($valor == 1){
			$sexo = 'masculino';
		}else {
			$sexo = 'feminino';
		}
		$this->sexo = $sexo;
		return $this->sexo;
	}
	
	function gerar_nome(){
		include_once('nomes.php');
			if($this->sexo == 'masculino'){
				$posicao = rand(0,count($nomesMasculinos)-1);
				$this->nome = $nomesMasculinos[$posicao];
			}elseif($this->sexo == 'feminino'){
				$posicao = rand(0,count($nomesFemininos)-1);
				$this->nome = $nomesFemininos[$posicao];
			}
		return $this->nome;
	}

	function gerar_cor_do_cabelo(){
		
		$corCabelo = array("Preto","Branco","Azul","Cinza","Verde","Vermelho","Loiro","Violeta","Castanhos","Ruivo");
		$escolido = rand(0,count($corCabelo)-1);
		$this->cabelos = $corCabelo[$escolido];
		
		return $this->cabelos;
	}	
		
	function gerar_cor_dos_olhos(){
		
		$corOlhos = array("Preto","Branco","Azul","Cinza","Verde","Vermelho","Castanho","violeta");
		$escolido = rand(0,count($corOlhos)-1);
		$this->olhos = $corOlhos[$escolido];
		
		return $this->olhos;
	}
	
	function gerar_cor_da_pele(){
		
		$corPele = array("Muito clara","Clara","Parda","Negra","Morena","Branca");
		$escolido = rand(0,count($corPele)-1);
		$this->pele = $corPele[$escolido];
		
		return $this->pele;
	}
	
	function gerar_raca(){
		if(empty($this->sexo)){
			header('Location:error.php?tipo=atributo_nao_encontrado');
		}else{
			$sexo = $this->sexo;
		}
		if($sexo == "masculino"){
			$racas = array("Humano","Anão","Elfo","Gnomo","Meio elfo","Meio orc","Halfling");
			$escolido = rand(0, count($racas)-1);
			$this->raca = $racas[$escolido];
		}else{
			if($sexo == "feminino"){
				$racas = array("Humana","Anã","Elfa","Gnoma","Meio elfa","Meio orc","Halfling");
				$escolido = rand(0, count($racas)-1);
				$this->raca = $racas[$escolido];
			}
		}
		
		return $this->raca;
	}
	
	function gerar_deslocamento(){
		
		switch($this->raca){
			case "Humano": 	$deslocamento = "9 m";
			break;
			
			case "Halfling": $deslocamento = "6 m ";
			break;
			
			case "Gnomo": $deslocamento = "6 m ";
			break;
			
			case "Meio orc": $deslocamento = "9 m ";
			break;
			
			case "Anão": $deslocamento = "6 m ";
			break;
			
			case "Meio elfo": $deslocamento = "9 m ";
			break;
			
			case "Elfo": $deslocamento = "9 m ";
			break;
			
			case "Humana": 	$deslocamento = "9 m";
			break;
			
			case "Gnoma": $deslocamento = "6 m ";
			break;
			
			case "Anã": $deslocamento = "6 m ";
			break;
			
			case "Meio elfa": $deslocamento = "9 m ";
			break;
			
			case "Elfa": $deslocamento = "9 m ";
			break;
		}
		$this->deslocamento = $deslocamento;
		
		return $this->deslocamento;
	}
	
	function gerar_xp(){
		
		if(empty($this->nivel)){
			header('error.php?tipo=atributo_nao_encontrado');
		}else{
			$nivel = $this->nivel;
		}
		$numero = rand(001,999);
		if($numero < 10){
			$numero = "00".$numero;
		}elseif($numero < 100){
			$numero = "0".$numero;
		}
		$xp = "";
		if($nivel == 0){
			$nivel = 1;
		}
		
		switch($nivel){
		
			case 1: $xp = "0";
			break;
			
			case 2: $xp = "1.".$numero;
			break;
			
			case 3: $xp = "3.".$numero;;
			break;
			
			case 4: $xp = "6.".$numero;
			break;
			
			case 5: $xp = "10.".$numero;
			break;
			
			case 6: $xp = "15.".$numero;
			break;
			
			case 7: $xp = "21.".$numero;
			break;
			
			case 8: $xp = "28.".$numero;
			break;
			
			case 9: $xp = "36.".$numero;
			break;
			
			case 10: $xp = "45.".$numero;
			break;
			
			case 11: $xp = "55.".$numero;
			break;
			
			case 12: $xp = "66.".$numero;
			break;
			
			case 13: $xp = "78.".$numero;
			break;
			
			case 14: $xp = "91.".$numero;
			break;
			
			case 15: $xp = "105.".$numero;
			break;
			
			case 16: $xp = "120.".$numero;
			break;
			
			case 17: $xp = "136.".$numero;
			break;
			
			case 18: $xp = "153.".$numero;
			break;
			
			case 19: $xp = "171.".$numero;
			break;
			
			case 20: $xp = "190.".$numero;
			break;
			
			case 21: $xp = "210.".$numero;
			break;
			
			case 22: $xp = "231.".$numero;
			break;
			
			case 23: $xp = "253.".$numero;
			break;
			
			case 24: $xp = "276.".$numero;
			break;
			
			case 25: $xp = "300.".$numero;
			break;
			
			case 26: $xp = "325.".$numero;
			break;
			
			case 27: $xp = "351.".$numero;
			break;
			
			case 28: $xp = "378.".$numero;
			break;
			
			case 29: $xp = "405.".$numero;
			break;
			
			case 30: $xp = "433.".$numero;
			break;
			
			case 31: $xp = "562.".$numero;
			break;
		}
		$this->xp = $xp;
	
	return $this->xp;
	
	}
	
	function gerar_classe() {
		$sexo = $this->sexo;
		if($sexo == "masculino"){
		$nomes = array("barbaro","guerreiro","paladino","monge","ladino","clerigo","bardo","feiticeiro","mago","druida","ranger");
		$escolido = rand(0, count($nomes)-1);
		$this->classe = $nomes[$escolido];
		}else{
			if($sexo == "feminino"){
				$nomes = array("barbara","guerreira","paladina","monge","ladina","cleriga","barda","feiticeira","maga","druida","ranger");
				$escolido = rand(0, count($nomes)-1);
				$this->classe = $nomes[$escolido];
			}
		}
		return $this->classe;
		
	}
	
	function  gerar_tendencia(){
		
		$classe = $this->classe;
		if($classe == "paladino" or $classe == "paladina"){
			$this->tendencia = "Leal e Bom";
		}else{
			if($classe == "monge"){
				$tendencia = array("Leal e Bom","Leal e Mau","Leal e Neutro");
				$escolido = rand(0, count($tendencia)-1);
				$this->tendencia = $tendencia[$escolido];
			}else{
				if($classe == "barbaro" || $classe == "barbara" || $classe == "bardo" || $classe == "barda"){
					$tendencia = array("Caótico e Bom","Neutro e Bom","Caótico e Mau","Neutro e Mau");
					$escolido = rand(0, count($tendencia)-1);
					$this->tendencia = $tendencia[$escolido];
				}else if($classe == "druida"){
					$tendencia = array("Neutro e Bom","Leal e Neutro","Neutro","Neutro e Caótico","Neutro e Mau");
					$escolido = rand(0, count($tendencia)-1);
					$this->tendencia = $tendencia[$escolido];
				}else{
					$tendencia = array("Leal e Bom","Caótico e Bom","Neutro e Bom","Leal e Mal","Caótico e Mau",
					"Neutro e Mau","Caótico e Bom","Caótico e Mau","Neutro e Bom","Neutro e Mau","Leal e Bom","Leal e Mau");
					$escolido = rand(0, count($tendencia)-1);
					$this->tendencia = $tendencia[$escolido];
				}
			}
		}
		return $this->tendencia;
	}
	
	function gerar_CA(){
		
		$bonusPorSabedoria = 0;
		$bonusPorClasse = 0;
		
		if($this->classe == "monge"){
			if($this->gerar_modificador_sabedoria() > 0){
				$bonusPorSabedoria = $this->gerar_modificador_sabedoria();
			}else{
				$bonusPorSabedoria = 0;
			}
			if($this->nivel >= 5 and $this->nivel <= 9){
				$bonusPorClasse = 1;
			}elseif($this->nivel >= 10 and $this->nivel <= 14){
				$bonusPorClasse = 2;
			}elseif($this->nivel >= 15 and $this->nivel <= 19){
				$bonusPorClasse = 3;
			}elseif($this->nivel >= 20 and $this->nivel <= 24){
				$bonusPorClasse = 4;
			}else{
				$bonusPorClasse = 0;
			}
			
				 
		}
		$destrezaMod = $this->gerar_modificador_destreza();
		$this->CA = ($destrezaMod + 13 + $bonusPorSabedoria + $bonusPorClasse);
		return $this->CA;
	}

	function gerar_PV(){
		
		$nivel = $this->nivel; 
		$classe = $this->classe;
		$nivelNegativo = $nivel -1;
		$qtdPontosDeVida = 0;
		$qtdPontosDeVidaInicial = 0;

		$d4  = rand(1,4);
		$d6  = rand(1,6);
		$d8  = rand(1,8);
		$d10 = rand(1,10);
		$d12 = rand(1,12);
		
		$modificador = $this->gerar_modificador_constituicao();
		
		$rolagem = 0;
		
		for($i = 1; $i <= $nivel; $i++){
	
			if($i == 1){
				switch($this->classe){
					case "barbaro": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((12 + $modificador));
					$this->dv = 12;
					break;
					
					case "bardo": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((6 + $modificador));
					$this->dv = 6;
					break;
					
					case "clerigo": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((8 + $modificador));
					$this->dv = 8;
					break;
					
					case "druida": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((6 + $modificador));
					$this->dv = 6;
					break;
					
					case "feiticeiro": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((4 + $modificador));
					$this->dv = 4;
					break;
					
					case "guerreiro": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((10 + $modificador));
					$this->dv = 10;
					break;
					
					case "ladino": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((6 + $modificador));
					$this->dv = 6;
					break;
					
					case "mago": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((4 + $modificador));
					$this->dv = 4;
					break;
					
					case "monge": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((8 + $modificador));
					$this->dv = 8;
					break;
					
					case "paladino": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((10 + $modificador));
					$this->dv = 10;
					break;
					
					case "ranger": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((10 + $modificador));
					$this->dv = 10;
					break;
					
					case "barbara": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((12 + $modificador));
					$this->dv = 12;
					break;
					
					case "barda": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((6 + $modificador));
					$this->dv = 6;
					break;
					
					case "cleriga": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((8 + $modificador));
					$this->dv = 8;
					break;
					
					case "feiticeira": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((4 + $modificador));
					$this->dv = 4;
					break;
					
					case "guerreira": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((10 + $modificador));
					$this->dv = 10;
					break;
					
					case "ladina": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((6 + $modificador));
					$this->dv = 6;
					break;
					
					case "maga": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((4 + $modificador));
					$this->dv = 4;
					break;
					
					case "paladina": $qtdPontosDeVidaInicial = $qtdPontosDeVidaInicial + ((10 + $modificador));
					$this->dv = 10;
					break;
				}
			}else{
				
				switch($this->classe){
					case "barbaro": $qtdPontosDeVida = ($qtdPontosDeVida + $d12 + $modificador);			
					break;
					
					case "guerreiro": $qtdPontosDeVida = ($qtdPontosDeVida + $d10 + $modificador);
					break;
					
					case "paladino": $qtdPontosDeVida = ($qtdPontosDeVida + $d10 + $modificador);
					break;
					
					case "monge": $qtdPontosDeVida = ($qtdPontosDeVida + $d8 + $modificador);
					break;
					
					case "ladino": $qtdPontosDeVida = ($qtdPontosDeVida + $d8 + $modificador);
					break;
					
					case "clerigo": $qtdPontosDeVida = ($qtdPontosDeVida + $d8 + $modificador);
					break;
					
					case "bardo": $qtdPontosDeVida = ($qtdPontosDeVida + $d6 + $modificador);
					break;
					
					case "feiticeiro": $qtdPontosDeVida = ($qtdPontosDeVida + $d4 + $modificador);
					break;
					
					case "mago": $qtdPontosDeVida = ($qtdPontosDeVida + $d4 + $modificador);		  
					break;
					
					case "druida": $qtdPontosDeVida = ($qtdPontosDeVida + $d8 + $modificador);
					break;
					
					case "ranger": $qtdPontosDeVida = ($qtdPontosDeVida + $d8 + $modificador);
	  				break;
					
					case "barbara": $qtdPontosDeVida = ($qtdPontosDeVida + $d12 + $modificador);			
					break;
					
					case "guerreira": $qtdPontosDeVida = ($qtdPontosDeVida + $d10 + $modificador);
					break;
					
					case "paladina": $qtdPontosDeVida = ($qtdPontosDeVida + $d10 + $modificador);
					break;
					
					case "ladina": $qtdPontosDeVida = ($qtdPontosDeVida + $d8 + $modificador);
					break;
					
					case "cleriga": $qtdPontosDeVida = ($qtdPontosDeVida + $d8 + $modificador);
					break;
					
					case "barda": $qtdPontosDeVida = ($qtdPontosDeVida + $d6 + $modificador);
					break;
					
					case "feiticeira": $qtdPontosDeVida = ($qtdPontosDeVida + $d4 + $modificador);
					break;
					
					case "maga": $qtdPontosDeVida = ($qtdPontosDeVida + $d4 + $modificador);		  
					break;
					
				}
		
			}
		}
		
		$this->PV = ($qtdPontosDeVida + $qtdPontosDeVidaInicial);
		return $this->PV;
	
	}
	
	
	function gerar_altura(){
		
		$raca = $this->raca;
		
		$humano = array
		(
				"1,60 m","1,61 m","1,62 m","1,63 m","1,64 m","1,65 m","1,66 m","1,67m","1,68 m","1,69 m",
				"1,70 m","1,71 m","1,72 m","1,73 m","1,74 m","1,75 m","1,76 m","1,77m","1,78 m","1,79 m",
				"1,80 m","1,81 m","1,82 m","1,83 m","1,84 m","1,85 m","1,86 m","1,87m","1,88 m","1,89 m",
				"1,90 m"
		);
		$halfling = array
		(
				"60 cm","61 cm","62 cm","63 cm","64 cm","65 cm","66 cm","67 cm","68 cm","69 cm",
				"70 cm","71 cm","72 cm","73 cm","74 cm","75 cm","76 cm","77 cm","78 cm","79 cm",
				"80 cm","81 cm","82 cm","83 cm","84 cm","85 cm","86 cm","87 cm","88 cm","89 cm",
				"90 cm","91 cm","92 cm","93 cm","94 cm","95 cm","96 cm","97 cm","98 cm","99 cm",
				"1,00 m"
		);
		$gnomo = array
		(
				"1,00 m","1,01 m","1,02 m","1,03 m","1,04 m","1,05 m","1,06 m","1,07m","1,08 m","1,09 m",
				"1,10 m","1,11 m","1,12 m","1,13 m","1,14 m","1,15 m","1,16 m","1,17m","1,18 m","1,19 m",
				"1,20 m"
		);
		$meioOrc = array
		(
				"1,80 m","1,81 m","1,82 m","1,83 m","1,84 m","1,85 m","1,86 m","1,87m","1,88 m","1,89 m",
				"1,90 m","1,91 m","1,92 m","1,93 m","1,94 m","1,95 m","1,96 m","1,97m","1,98 m","1,99 m",
				"2,00 m","2,01 m","2,02 m","2,03 m","2,04 m","2,05 m","2,06 m","2,07m","2,08 m","2,09 m",
				"2,10 m"
		);
		$anao = array
		(
				"1,30 m","1,31 m","1,32 m","1,33 m","1,34 m","1,35 m","1,36 m","1,37m","1,38 m","1,39 m",
				"1,40 m","1,41 m","1,42 m","1,43 m","1,44 m","1,45 m","1,46 m","1,47m","1,48 m","1,49 m",
				"1,50 m"
		);
		$meioElfo = array
		(
				"1,50 m","1,51 m","1,52 m","1,53 m","1,54 m","1,55 m","1,56 m","1,57m","1,58 m","1,59 m",
				"1,60 m","1,61 m","1,62 m","1,63 m","1,64 m","1,65 m","1,66 m","1,67m","1,68 m","1,69 m",
				"1,70 m","1,71 m","1,72 m","1,73 m","1,74 m","1,75 m","1,76 m","1,77m","1,78 m","1,79 m",
				"1,80 m"
		);
		
		$elfo = array
		(
				"1,40 m","1,41 m","1,42 m","1,43 m","1,44 m","1,45 m","1,46 m","1,47m","1,48 m","1,49 m",
				"1,50 m","1,51 m","1,52 m","1,53 m","1,54 m","1,55 m","1,56 m","1,57m","1,58 m","1,59 m",
				"1,60 m","1,61 m","1,62 m","1,63 m","1,64 m","1,65 m","1,66 m","1,67m","1,68 m","1,69 m",
				"1,70 m"
		);
		
		
		switch($raca){
			case "Humano": 	$escolido = rand(0, count($humano)-1);
							$this->altura = $humano[$escolido];
			break;
			
			case "Halfling": $escolido = rand(0, count($halfling)-1);
							 $this->altura = $halfling[$escolido];
			break;
			
			case "Gnomo": $escolido = rand(0, count($gnomo)-1);
						  $this->altura = $gnomo[$escolido];
			break;
			
			case "Meio orc": $escolido = rand(0, count($meioOrc)-1);
							 $this->altura = $meioOrc[$escolido];
			break;
			
			case "Anão": $escolido = rand(0, count($anao)-1);
						 $this->altura = $anao[$escolido];
			break;
			
			case "Meio elfo": $escolido = rand(0, count($meioElfo)-1);
							  $this->altura = $meioElfo[$escolido];
			break;
			
			case "Elfo": $escolido = rand(0, count($elfo)-1);
						 $this->altura = $elfo[$escolido];
			break;
			
			case "Humana": 	$escolido = rand(0, count($humano)-1);
							$this->altura = $humano[$escolido];
			break;
			
			case "Gnoma": $escolido = rand(0, count($gnomo)-1);
						  $this->altura = $gnomo[$escolido];
			break;
			
			case "Anã": $escolido = rand(0, count($anao)-1);
						 $this->altura = $anao[$escolido];
			break;
			
			case "Meio elfa": $escolido = rand(0, count($meioElfo)-1);
							  $this->altura = $meioElfo[$escolido];
			break;
			
			case "Elfa": $escolido = rand(0, count($elfo)-1);
						 $this->altura = $elfo[$escolido];
			break; 

		}
		return $this->altura;
	}	
	
	function gerar_peso(){
		
		$raca = $this->raca;
		
		$humano = array ("60kg","61kg","62kg","63kg","64kg","65kg","66kg","67kg","68kg","69kg",
							"70kg","71kg","72kg","73kg","74kg","75kg","76kg","77kg","78kg","79kg","80kg"); 
		
		$halfling = array ("15kg","16kg","17kg","18kg");
		
		$gnomo = array ("18kg","19kg","20kg","21kg","22kg","23kg","24kg","25kg");
		
		$meioOrc = array ("90kg","91kg","92kg","93kg","94kg","95kg","96kg","97kg","98kg","99kg",
	  			  			 "100kg","101kg","102kg","103kg","104kg","105kg","106kg","107kg","108kg","109kg",
	  			  			 "110kg","111kg","112kg","113kg","114kg","115kg","116kg","117kg","118kg","119kg",
	  			  			 "120kg","121kg","122kg","123kg","124kg","125kg");
		
		$anao = array ("50kg","51kg","52kg","53kg","54kg","55kg","56kg","57kg","58kg","59kg","60kg",
				 		  "61kg","62kg","63kg","64kg","65kg","66kg","67kg","68kg","69kg","70kg","71kg",
				 		  "72kg","73kg","74kg","75kg","76kg","77kg","78kg","79kg","80kg","81kg","82kg",
				 		  "83kg","84kg","85kg","86kg","87kg","88kg","89kg","90kg");
		
		$meioElfo = array ("45kg","46kg","47kg","48kg","49kg","50kg","51kg","52kg","53kg","54kg",
				  			  "55kg","56kg","57kg","58kg","59kg","60kg","61kg","62kg","63kg","64kg",
				  			  "65kg","66kg","67kg","68kg","69kg","70kg","71kg","72kg","73kg","74kg",
				  			  "75kg","76kg","77kg","78kg","79kg","80kg","81kg","82kg","83kg","84kg",
				  			  "85kg","86kg","87kg","88kg","89kg","90kg");
		
		$elfo = array ("40kg","41kg","42kg","43kg","44kg","45kg","46kg","47kg","48kg","49kg",
						  "40kg","41kg","42kg","43kg","44kg","45kg","46kg","47kg","48kg","49kg",
				          "50kg","51kg","52kg","53kg","54kg","55kg","56kg","57kg","58kg","59kg",
				          "60kg","61kg","62kg","63kg","64kg","65kg");
		
		switch($raca){
			case "Humano": 	$escolido = rand(0, count($humano)-1);
							$this->peso = $humano[$escolido];
			break;
			
			case "Halfling": $escolido = rand(0, count($halfling)-1);
							 $this->peso = $halfling[$escolido];
			break;
			
			case "Gnomo": $escolido = rand(0, count($gnomo)-1);
						  $this->peso = $gnomo[$escolido];
			break;
			
			case "Meio orc": $escolido = rand(0, count($meioOrc)-1);
							 $this->peso = $meioOrc[$escolido];
			break;
			
			case "Anão": $escolido = rand(0, count($anao)-1);
						 $this->peso = $anao[$escolido];
			break;
			
			case "Meio elfo": $escolido = rand(0, count($meioElfo)-1);
							  $this->peso = $meioElfo[$escolido];
			break;
			
			case "Elfo": $escolido = rand(0, count($elfo)-1);
						 $this->peso = $elfo[$escolido];
			break;
			
			case "Humana": 	$escolido = rand(0, count($humano)-1);
							$this->peso = $humano[$escolido];
			break;
			
			case "Gnoma": $escolido = rand(0, count($gnomo)-1);
						  $this->peso = $gnomo[$escolido];
			break;
			
			case "Anã": $escolido = rand(0, count($anao)-1);
						 $this->peso = $anao[$escolido];
			break;
			
			case "Meio elfa": $escolido = rand(0, count($meioElfo)-1);
							  $this->peso = $meioElfo[$escolido];
			break;
			
			case "Elfa": $escolido = rand(0, count($elfo)-1);
						 $this->peso = $elfo[$escolido];
			break;
		}
		
		return $this->peso;
	}

	function gerar_idade(){
		
		$raca = $this->raca;
		
		switch($raca){
			case "Humano": 	$escolido = rand(15,100);
							$this->idade = $escolido;
			break;
			
			case "Halfling": $escolido = rand(15,200);
							 $this->idade = $escolido;
			break;
			
			case "Gnomo": $escolido = rand(30,400);
						  $this->idade = $escolido;
			break;
			
			case "Meio orc": $escolido = rand(10,85);
							 $this->idade = $escolido;
			break;
			
			case "Anão": $escolido = rand(35,600);
						 $this->idade = $escolido;
			break;
			
			case "Meio elfo": $escolido = rand(15,500);
							  $this->idade = $escolido;
			break;
			
			case "Elfo": $escolido = rand(85,1200);
						 $this->idade = $escolido;
			break;
			
			case "Humana": 	$escolido = rand(15,100);
							$this->idade = $escolido;
			break;
			
			case "Gnoma": $escolido = rand(30,400);
						  $this->idade = $escolido;
			break;
			
			case "Anã": $escolido = rand(35,600);
						$this->idade = $escolido;
			break;
			
			case "Meio elfa": $escolido = rand(15,500);
							  $this->idade = $escolido;
			break;
			
			case "Elfa": $escolido = rand(85,1200);
						 $this->idade = $escolido;
			break;
		}
		
		return $this->idade;
	}

	function formatar_BBA(){
	
		$nivel = $this->BBA;
		
		if($nivel > 20){
			$atualizarNivel = 20;
			
			switch($nivel){
			
				case 21: $nivelAdd = 1;
				break;
				
				case 22: $nivelAdd = 1;
				break;
				
				case 23: $nivelAdd = 2;
				break;
				
				case 24: $nivelAdd = 2;
				break;
				
				case 25: $nivelAdd = 3;
				break;
				
				case 26: $nivelAdd = 3;
				break;
				
				case 27: $nivelAdd = 4;
				break;
				
				case 28: $nivelAdd = 4;
				break;
				
				case 29: $nivelAdd = 5;
				break;
				
				case 30: $nivelAdd = 5;
				break;
			}
	
			$nivel = $atualizarNivel + $nivelAdd;
			
		}
		
		$estagio_1 = $nivel;
		$estagio_2 = $nivel;
		$estagio_3 = $nivel;
		$estagio_4 = $nivel;
		
		
		$Atq1 = 0;
		$Atq2 = 0;
		$Atq3 = 0;
		$Atq4 = 0;
		
			for($i = $estagio_1; $i > 0; $i--){
				
				if($i == 16){
					for($j = $estagio_2-15; $j > 0; $j--){
						$Atq4++;
					}
				}else{
					if($i == 11){
						for($k = $estagio_3-10; $k > 0; $k--){
							$Atq3++;
						}
					}else{
						if($i == 6){
							for($l = $estagio_4-5; $l > 0; $l--){
								$Atq2++;
							}
						}
					}
				}
				
				$Atq1++;
			}	
		
			
		if($Atq2 == 0 && $Atq3 == 0 && $Atq4 == 0){
			$this->bonus_base_ataque[0] = ($Atq1);
			$this->bonus_base_ataque[1] = '';
			$this->bonus_base_ataque[2] = '';
			$this->bonus_base_ataque[3] = '';
		}else{
			if($Atq3 == 0 && $Atq4 == 0){
				$this->bonus_base_ataque[0] = ($Atq1);
				$this->bonus_base_ataque[1] = ($Atq2);
				$this->bonus_base_ataque[2] = '';
				$this->bonus_base_ataque[3] = '';
			}else{
				if($Atq4 == 0){
					$this->bonus_base_ataque[0] = ($Atq1);
					$this->bonus_base_ataque[1] = ($Atq2);
					$this->bonus_base_ataque[2] = ($Atq3);
					$this->bonus_base_ataque[3] = '';
				}else{
					$this->bonus_base_ataque[0] = ($Atq1);
					$this->bonus_base_ataque[1] = ($Atq2);
					$this->bonus_base_ataque[2] = ($Atq3);
					$this->bonus_base_ataque[3] = ($Atq4);
				}
			}
		}
	}
	
	function formatar_BBA_medio(){
		$bba = $this->BBA;
		
		switch($bba){
			case 1: $bbaMedio = -1;
			break;
			
			case 2: $bbaMedio = -1;
			break;
			
			case 3: $bbaMedio = -1;
			break;
			
			case 4: $bbaMedio = -1;
			break;
			
			case 5: $bbaMedio = -2;
			break;
			
			case 6: $bbaMedio = -2;
			break;
			
			case 7: $bbaMedio = -2;
			break;
			
			case 8: $bbaMedio = -2;
			break;
			
			case 9: $bbaMedio = -3;
			break;
			
			case 10: $bbaMedio = -3;
			break;
			
			case 11: $bbaMedio = -3;
			break;
			
			case 12: $bbaMedio = -3;
			break;
			
			case 13: $bbaMedio = -4;
			break;
			
			case 14: $bbaMedio = -4;
			break;
			
			case 15: $bbaMedio = -4;
			break;
			
			case 16: $bbaMedio = -4;
			break;
			
			case 17: $bbaMedio = -5;
			break;
			
			case 18: $bbaMedio = -5;
			break;
			
			case 19: $bbaMedio = -5;
			break;
			
			case 20: $bbaMedio = -5;
			break;
			
			case 21: $bbaMedio = -4;
			break;
			
			case 22: $bbaMedio = -4;
			break;
			
			case 23: $bbaMedio = -3;
			break;
			
			case 24: $bbaMedio = -3;
			break;
			
			case 25: $bbaMedio = -2;
			break;
			
			case 26: $bbaMedio = -2;
			break;
			
			case 27: $bbaMedio = -1;
			break;
			
			case 28: $bbaMedio = -1;
			break;
			
			case 29: $bbaMedio = 0;
			break;
			
			case 30: $bbaMedio = 0;
			break;
			
			case 31: $bbaMedio = 1;
			break;
		}
		$bba = $bba + $bbaMedio;
		if($bba < 0){
			$bba = 0;
		}
		$this->BBA = $bba;
		return $this->BBA;
	}
	
	function  formatar_BBA_ruin(){
		
		$bba = $this->BBA;
		
		switch($bba){
			case 1: $bbaRuin = -1;
			break;
			
			case 2: $bbaRuin = -1;
			break;
			
			case 3: $bbaRuin = -2;
			break;
			
			case 4: $bbaRuin = -2;
			break;
			
			case 5: $bbaRuin = -3;
			break;
			
			case 6: $bbaRuin = -3;
			break;
			
			case 7: $bbaRuin = -4;
			break;
			
			case 8: $bbaRuin = -4;
			break;
			
			case 9: $bbaRuin = -5;
			break;
			
			case 10: $bbaRuin = -5;
			break;
			
			case 11: $bbaRuin = -6;
			break;
			
			case 12: $bbaRuin = -6;
			break;
			
			case 13: $bbaRuin = -7;
			break;
			
			case 14: $bbaRuin = -7;
			break;
			
			case 15: $bbaRuin = -8;
			break;
			
			case 16: $bbaRuin = -8;
			break;
			
			case 17: $bbaRuin = -9;
			break;
			
			case 18: $bbaRuin = -9;
			break;
			
			case 19: $bbaRuin = -10;
			break;
			
			case 20: $bbaRuin = -10;
			break;
			
			case 21: $bbaRuin = -9;
			break;
			
			case 22: $bbaRuin = -9;
			break;
			
			case 23: $bbaRuin = -8;
			break;
			
			case 24: $bbaRuin = -8;
			break;
			
			case 25: $bbaRuin = -7;
			break;
			
			case 26: $bbaRuin = -7;
			break;
			
			case 27: $bbaRuin = -6;
			break;
			
			case 28: $bbaRuin = -6;
			break;
			
			case 29: $bbaRuin = -5;
			break;
			
			case 30: $bbaRuin = -5;
			break;
			
			case 31: $bbaRuin = -4;
			break;
		}
		
		$bba = $bba + $bbaRuin;
		if($bba < 0){
			$bba = 0;
		}
		$this->BBA = $bba;
		return $this->BBA;	
	
	}
	
	function exibir_BBA(){
		
			$this->BBA = $this->nivel;
			if($this->BBA <= 0){
				header('Location:error.php?tipo=atributo_errado');
			}
			$classe = $this->classe;
			switch($classe){
				
				case "barbaro": $categoria = "combatente";
				break;
				
				case "guerreiro": $categoria = "combatente";
				break;
				
				case "paladino": $categoria = "combatente";
				break;
				
				case "monge": $categoria = "combatenteDiferente";
				break;
				
				case "ladino": $categoria = "combatenteDiferente";
				break;
				
				case "bardo": $categoria = "combatenteDiferente";
				break;
				
				case "clerigo": $categoria = "combatenteDiferente";
				break;
				
				case "feiticeiro": $categoria = "conjurador";
				break;
				
				case "mago": $categoria = "conjurador"; 	 
				break;
				
				case "ranger": $categoria = "combatente";
				break;
				
				case "druida": $categoria = "combatenteDiferente"; 	 
				break;
				
				case "barbara": $categoria = "combatente";
				break;
				
				case "guerreira": $categoria = "combatente";
				break;
				
				case "paladina": $categoria = "combatente";
				break;
				
				case "ladina": $categoria = "combatenteDiferente";
				break;
				
				case "barda": $categoria = "combatenteDiferente";
				break;
				
				case "cleriga": $categoria = "combatenteDiferente";
				break;
				
				case "feiticeira": $categoria = "conjurador";
				break;
				
				case "maga": $categoria = "conjurador"; 	 
				break;
			}
		
		if($categoria == "combatente"){
			$this->formatar_BBA();
		}else{
			if($categoria == "combatenteDiferente"){
				$this->formatar_BBA_medio();
				$this->formatar_BBA();
		}else{
			if($categoria == "conjurador"){
				$this->formatar_BBA_ruin();
				$this->formatar_BBA();	
			}else{
				header('Location:error.php?tipo=atributo_errado');
				print "la error";
				}
			}
		}
	}
	
	function ataque_1(){
		$for_ = $this->gerar_modificador_forca();
		$bba_1 = $this->bonus_base_ataque[0];
		//print $for_;
		if($bba_1 <= 0){
			$bba_1 = 0;
			$for_  = 0;
		}
		return $bba_1 + $for_;
	}
	function ataque_2(){
		$for_ = $this->gerar_modificador_forca();
		$bba_2 = $this->bonus_base_ataque[1];
		if($bba_2 <= 0){
			$bba_2 = 0;
			$for_  = 0;
		}
		return $bba_2 + $for_;
	}

	function ataque_3(){
		$for_ = $this->gerar_modificador_forca();
		$bba_3 = $this->bonus_base_ataque[2];
		if($bba_3 <= 0){
			$bba_3 = 0;
			$for_  = 0;
		}
		return $bba_3 + $for_;
	}
	function ataque_4(){
		$for_ = $this->gerar_modificador_forca();
		$bba_4 = $this->bonus_base_ataque[3];
		if($bba_4 <= 0){
			$bba_4 = 0;
			$for_  = 0;
		}
		return $bba_4 + $for_;
	}
	
	function ataque_distancia_1(){
		$des_ = $this->gerar_modificador_destreza();
		$bba_1 = $this->bonus_base_ataque[0];
		//print $for_;
		if($bba_1 <= 0){
			$bba_1 = 0;
			$des_  = 0;
		}
		return $bba_1 + $des_;
	}
	function ataque_distancia_2(){
		$des_ = $this->gerar_modificador_destreza();
		$bba_2 = $this->bonus_base_ataque[1];
		if($bba_2 <= 0){
			$bba_2 = 0;
			$des_  = 0;
		}
		return $bba_2 + $des_;
	}

	function ataque_distancia_3(){
		$des_ = $this->gerar_modificador_destreza();
		$bba_3 = $this->bonus_base_ataque[2];
		if($bba_3 <= 0){
			$bba_3 = 0;
			$des_  = 0;
		}
		return $bba_3 + $des_;
	}
	function ataque_distancia_4(){
		$des_ = $this->gerar_modificador_destreza();
		$bba_4 = $this->bonus_base_ataque[3];
		if($bba_4 <= 0){
			$bba_4 = 0;
			$des_  = 0;
		}
		return $bba_4 + $des_;
	}
		
	function exibir_ataque_corpo_a_corpo(){
		$bonus_base_ataque = 0;
		$bba1 = $this->ataque_1();
		if($bba1 == 0)
			$bba1 = '';
		$bba2 = $this->ataque_2();
		if($bba1 == 0)
			$bba2 = '';
		$bba3 = $this->ataque_3();
		if($bba1 == 0)
			$bba3 = '';
		$bba4 = $this->ataque_4();
		if($bba1 == 0)
			$bba4 = '';
		
		if(!empty($bba1) && !empty($bba2) && !empty($bba3) && !empty($bba4)){
			$bonus_base_ataque =  $bba1." / ".$bba2." / ".$bba3." / ".$bba4;
		}
		elseif(!empty($bba1) && !empty($bba2) && !empty($bba3)){
			$bonus_base_ataque =  $bba1." / ".$bba2." / ".$bba3;
		}
		elseif(!empty($bba1) && !empty($bba2)){
			$bonus_base_ataque =  $bba1." / ".$bba2;
		}
		elseif(!empty($bba1)){
			$bonus_base_ataque =  $bba1;
		}
		return $bonus_base_ataque;
	}
	
	function exibir_ataque_a_distancia(){
		
		$bonus_base_ataque = 0;
		$bba1 = $this->ataque_distancia_1();
		if($bba1 == 0)
			$bba1 = '';
		$bba2 = $this->ataque_distancia_2();
		if($bba1 == 0)
			$bba2 = '';
		$bba3 = $this->ataque_distancia_3();
		if($bba1 == 0)
			$bba3 = '';
		$bba4 = $this->ataque_distancia_4();
		if($bba1 == 0)
			$bba4 = '';
		
		if(!empty($bba1) && !empty($bba2) && !empty($bba3) && !empty($bba4)){
			$bonus_base_ataque =  $bba1." / ".$bba2." / ".$bba3." / ".$bba4;
		}
		elseif(!empty($bba1) && !empty($bba2) && !empty($bba3)){
			$bonus_base_ataque =  $bba1." / ".$bba2." / ".$bba3;
		}
		elseif(!empty($bba1) && !empty($bba2)){
			$bonus_base_ataque =  $bba1." / ".$bba2;
		}
		elseif(!empty($bba1)){
			$bonus_base_ataque =  $bba1;
		}
		return $bonus_base_ataque;
	}
	
	function gerar_teste_de_resistencia_bom(){
		$nivel = $this->nivel;
		$resistenciaBom = 0;
		
		if($nivel == 1){
			$resistenciaBom = 2;
		}else{
			$resistenciaBom = intval(($nivel/2) + 2);
		}
		
		return $resistenciaBom;
	}
	
	function gerar_teste_de_resistencia_ruin(){
		$nivel = $this->nivel;
		$resistenciaRuin = 0;
		
			if($nivel == 1 && $nivel == 2){
				$resistenciaRuin = 0;
			}else{
				if($nivel >= 3 && $nivel <= 5){
					$resistenciaRuin = 1;
				}else{
					if($nivel >= 6 && $nivel <= 8){
						$resistenciaRuin = 2;
					}else{
						if($nivel >= 9 && $nivel <= 11){
							$resistenciaRuin = 3;
						}else{
							if($nivel >= 12 && $nivel <= 14){
								$resistenciaRuin = 4;
							}else{
								if($nivel >= 15 && $nivel <= 17){
									$resistenciaRuin = 5;
								}else{
									if($nivel >= 18 && $nivel <= 20){
										$resistenciaRuin = 6;
									}
								}
							}
						}
					}
				}
			}
	
	return $resistenciaRuin;
	}
	
	function gerar_testes_de_resistencia(){
		
		$nivel = $this->nivel;
		$classe = $this->classe;
		
		switch($classe){
		
		case "barbaro": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
							$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
							$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
						
		case "bardo": 		$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
					  		$this->reflexos  = $this->gerar_teste_de_resistencia_bom();
					  		$this->vontade   = $this->gerar_teste_de_resistencia_bom();
		break;
					  		
		case "clerigo": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_bom();

		break;

		case "feiticeiro": 	$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_bom();
		break;
		  					
		case "guerreiro": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
		  					
		case "ladino": 		$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
							$this->reflexos  = $this->gerar_teste_de_resistencia_bom();
							$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
							
		case "mago": 		$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_bom();
		break;
		  					
		case "monge": 		$this->fortitude = $this->gerar_teste_de_resistencia_bom();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_bom();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_bom();				
		break;
		  					
		case "paladino": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
							$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
							$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
		
		case "ranger": 		$this->fortitude = $this->gerar_teste_de_resistencia_bom();
							$this->reflexos  = $this->gerar_teste_de_resistencia_bom();
							$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
		
		case "druida": 		$this->fortitude = $this->gerar_teste_de_resistencia_bom();
							$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
							$this->vontade   = $this->gerar_teste_de_resistencia_bom();
		break;
		
		case "barbara": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
							$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
							$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
						
		case "barda": 		$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
					  		$this->reflexos  = $this->gerar_teste_de_resistencia_bom();
					  		$this->vontade   = $this->gerar_teste_de_resistencia_bom();
		break;
					  		
		case "cleriga": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_bom();

		break;

		case "feiticeira": 	$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_bom();
		break;
		  					
		case "guerreira": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
		  					
		case "ladina": 		$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
							$this->reflexos  = $this->gerar_teste_de_resistencia_bom();
							$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
							
		case "maga": 		$this->fortitude = $this->gerar_teste_de_resistencia_ruin();
		  					$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
		  					$this->vontade   = $this->gerar_teste_de_resistencia_bom();
		break;
		  					
		case "paladina": 	$this->fortitude = $this->gerar_teste_de_resistencia_bom();
							$this->reflexos  = $this->gerar_teste_de_resistencia_ruin();
							$this->vontade   = $this->gerar_teste_de_resistencia_ruin();
		break;
		
		}
		
	}
	
	function gerar_fortitude_total(){
		
		return ($this->fortitude + $this->gerar_modificador_constituicao());
	}
	
	function gerar_reflexo_total(){
		
		return ($this->reflexos + $this->gerar_modificador_destreza());
	}

	function gerar_vontade_total(){
	
		return ($this->vontade + $this->gerar_modificador_sabedoria());
	}
	 function  gerar_dano(){
		
		return $this->gerarModificadorForca();
	}
	
	
	function gerar_pts_de_pericia(){
		$classe = $this->classe;
		$nivel  = $this->nivel;
		
		$qtdPontosDePericia = 0;
		$qtdPontosDePericiaInicial = 0;
		
		for($i = 1 ; $i <= $nivel; $i++){
		
			if($i == 1){
		
				switch($classe){
					case "barbaro": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((4 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "bardo": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((6 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "clerigo": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "druida": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((4 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "feiticeiro": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "guerreiro": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "ladino": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((8 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "mago": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "monge": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((4 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "paladino": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "ranger": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((4 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "barbara": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((4 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "barda": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((6 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "cleriga": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "feiticeira": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "guerreira": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "ladina": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((8 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "maga": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
					case "paladina": $qtdPontosDePericiaInicial = $qtdPontosDePericiaInicial + ((2 + ($this->gerar_modificador_inteligencia())) * 4);
					break;
					
				}
			}else{
				
				switch($classe){
					case "barbaro": $qtdPontosDePericia = $qtdPontosDePericia + ((4 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "bardo": $qtdPontosDePericia = $qtdPontosDePericia + ((6 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "clerigo": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "druida": $qtdPontosDePericia = $qtdPontosDePericia + ((4 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "feiticeiro": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "guerreiro": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "ladino": $qtdPontosDePericia = $qtdPontosDePericia + ((8 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "mago": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "monge": $qtdPontosDePericia = $qtdPontosDePericia + ((4 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "paladino": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "ranger": $qtdPontosDePericia = $qtdPontosDePericia + ((4 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "barbara": $qtdPontosDePericia = $qtdPontosDePericia + ((4 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "barda": $qtdPontosDePericia = $qtdPontosDePericia + ((6 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "cleriga": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "feiticeira": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "guerreira": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "ladina": $qtdPontosDePericia = $qtdPontosDePericia + ((8 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "maga": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;
					
					case "paladina": $qtdPontosDePericia = $qtdPontosDePericia + ((2 + $this->gerar_modificador_inteligencia()));
					break;

				}
				
			}
		}
			
		return ($qtdPontosDePericia + $qtdPontosDePericiaInicial);
	}
	
	function distribuir_pts_de_pericia(){
		
		$nivel = $this->nivel;
		$ptsPericia = $this->gerar_pts_de_pericia();
		$periciaTotal = $ptsPericia;
		
		$graduacaoMaxima = ($nivel + 3);
		$qtdPericias = intval(($periciaTotal/$graduacaoMaxima));
		$resto = ($periciaTotal%$graduacaoMaxima);
		for($i = 0; $i <= $qtdPericias; $i++){
			$this->pericias_grad[$i] = $graduacaoMaxima;
		}
	}
	
	function identificar_hab_chave_da_pericia(){
		
		$qtd_pericias = count($this->pericias_nome);
		for($i=0; $i <=$qtd_pericias-1; $i++){
			
			$nome = substr($this->pericias_nome[$i],-5);
				
			if($nome == '(For)'){
				$this->pericias_mod[$i] = $this->gerar_modificador_forca();
			}elseif($nome == '(Con)'){
				$this->pericias_mod[$i] = $this->gerar_modificador_constituicao();
			}elseif($nome == '(Des)'){
				$this->pericias_mod[$i] = $this->gerar_modificador_destreza();
			}elseif($nome == '(Int)'){
				$this->pericias_mod[$i] = $this->gerar_modificador_inteligencia();
			}elseif($nome == '(Sab)'){
				$this->pericias_mod[$i] = $this->gerar_modificador_sabedoria();
			}elseif($nome == '(Car)'){
				$this->pericias_mod[$i] = $this->gerar_modificador_carisma();
			}
		}
		
	}
	
	function inicializar_listas(){
			
			for($i = 0; $i <= 22; $i++){
							
				$this->pericias_nome[$i] = '';
				$this->pericias_grad[$i] = '';
				$this->pericias_mod[$i] = '';
			}
		}
	
	function pericias_de_barbaro(){
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Saltar (For)", "Escalar (For)", "Intimidação (Car)","Sobrevivência (Sab)", 
				"Natação (For)", "Ofícios (Int)", "Ouvir (Sab)", "Cavalgar (Des)" ,"Adestrar Animais (Car)",
				
				 "Observar (Sab)","Profissão (Sab)","Esconder-se (Des)","Furtividade (Des)",
				 "Abrir Fechaduras (Des)", "Acrobacia (Des)", "Arte da Fuga (Des)", "Atuação (Car)",
				"Avaliação (Int)" ,"Blefar (Car)", "Conhecimento (local) (Int)", "Decifrar Escrita (Int)", "Diplomacia (Car)", 
				"Disfarces (Car)", "Equilíbrio (Des)","Esconder-se (Des)", "Falsificação (Int)", "Furtividade (Des)", 
				"Intimidação (Car)", "Observar (Sab)", "Obter Informação (Car)", "Operar Mecanismo (Int)", "Prestidigitação (Des)", 
				"Procurar (Int)",  "Sentir Motivação (Sab)", "Usar Cordas (Des)", "Usar Instrumento Mágico (Car)");
				
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}

	}
	
	
	function pericias_de_bardo(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Identificar Magia (Int)", "Diplomacia (Car)", "Atuação (Car)", "Concentração (Con)", "Blefar(Car)",
		"Avaliação (Int)", "Conhecimento Arcano (Int)", "Decifrar Escrita (Int)", "Arte da Fuga (Des)",
		"Disfarces (Car)", "Equilíbrio (Des)","Escalar (For)","Esconder-se (Des)", "Falar Idioma (Int)",
		"Furtividade (Des)","Acrobacia (Des)" , "Natação (For)", "Obter Informação (Car)", "Ofícios (Int)", "Ouvir (Sab)",
		"Prestidigitação (Des)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", "Usar Instrumento Mágico (Car)",
		"Saltar (For)", "Escalar (For)", "Intimidação (Car)","Sobrevivência (Sab)", 
				"Natação (For)", "Ofícios (Int)", "Ouvir (Sab)", "Cavalgar (Des)" ,"Adestrar Animais (Car)");
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_clerigo(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Concentração (Con)", "Conhecimento (arcano) (Int)","Conhecimento (religião) (Int)" ,
				"Identificar Magia (Int)","Conhecimento (planos) (Int)","Conhecimento (história) (Int)" , "Cura (Sab)", "Diplomacia (Car)", 
				"Ofícios (Int)" , "Profissão (Sab)",
				
				 "Cavalgar (Des)","Adestrar Animais (Car)", "Sentir Motivação (Sab)","Escalar (For)","Esconder-se (Des)","Furtividade (Des)",
				 "Atuação (Car)", "Blefar(Car)",
				 "Avaliação (Int)", "Decifrar Escrita (Int)", "Arte da Fuga (Des)",
				 "Disfarces (Car)", "Equilíbrio (Des)","Escalar (For)","Esconder-se (Des)", "Falar Idioma (Int)",
				 "Furtividade (Des)","Acrobacia (Des)" , "Natação (For)", "Obter Informação (Car)", "Ofícios (Int)", "Ouvir (Sab)",
				 "Prestidigitação (Des)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", "Usar Instrumento Mágico (Car)",
				 "Saltar (For)", "Escalar (For)", "Intimidação (Car)","Sobrevivência (Sab)", 
				 "Natação (For)", "Ofícios (Int)", "Ouvir (Sab)", "Cavalgar (Des)" ,"Adestrar Animais (Car)");
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_druida(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Adestrar Animais (Car)", "Cavalgar (Des)", "Concentração (Con)", "Conhecimento (natureza) (Int)", "Cura (Sab)",
		"Diplomacia (Car)", "Identificar Magia (Int)", "Natação (For)", "Observar (Sab)", "Ofícios (Int)", "Ouvir (Sab)",
		"Profissão (Sab)", "Sobrevivência (Sab)",
		
				 "Conhecimento (arcano) (Int)","Conhecimento (religião) (Int)" ,
				"Conhecimento (planos) (Int)","Conhecimento (história) (Int)" ,
				"Ofícios (Int)" , "Profissão (Sab)",
				
				 "Sentir Motivação (Sab)","Escalar (For)","Esconder-se (Des)","Furtividade (Des)",
				 "Atuação (Car)", "Blefar(Car)",
				 "Avaliação (Int)", "Decifrar Escrita (Int)", "Arte da Fuga (Des)",
				 "Disfarces (Car)", "Equilíbrio (Des)","Escalar (For)","Esconder-se (Des)", "Falar Idioma (Int)",
				 "Furtividade (Des)","Acrobacia (Des)" , "Natação (For)", "Obter Informação (Car)", "Ofícios (Int)",
				 "Prestidigitação (Des)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", "Usar Instrumento Mágico (Car)",
				 "Saltar (For)", "Escalar (For)", "Intimidação (Car)","Sobrevivência (Sab)", 
				 "Natação (For)", "Ofícios (Int)", "Ouvir (Sab)" );

		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_feiticeiro(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Identificar Magia (Int)", "Concentração (Con)", "Conhecimento (arcano) (Int)", 
				"Blefar (Car)", "Conhecimento (história) (Int)", "Diplomacia (Car)", 
						
				 "Conhecimento (religião) (Int)" ,
				 "Conhecimento (planos) (Int)",
				
				"Sentir Motivação (Sab)","Escalar (For)","Esconder-se (Des)","Furtividade (Des)",
				"Atuação (Car)", "Blefar(Car)",
				 
				"Adestrar Animais (Car)", "Cavalgar (Des)", "Concentração (Con)", "Conhecimento (natureza) (Int)", "Cura (Sab)",
				"Diplomacia (Car)", "Natação (For)", "Observar (Sab)", "Ofícios (Int)", "Ouvir (Sab)",
				"Profissão (Sab)", "Sobrevivência (Sab)",
		
				
				 "Avaliação (Int)", "Decifrar Escrita (Int)", "Arte da Fuga (Des)",
				 "Disfarces (Car)", "Equilíbrio (Des)","Escalar (For)","Esconder-se (Des)", "Falar Idioma (Int)",
				 "Furtividade (Des)","Acrobacia (Des)" , "Natação (For)", "Obter Informação (Car)", "Ofícios (Int)",
				 "Prestidigitação (Des)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", "Usar Instrumento Mágico (Car)",
				 "Saltar (For)", "Escalar (For)", "Intimidação (Car)","Sobrevivência (Sab)", 
				 "Natação (For)", "Ofícios (Int)", "Ouvir (Sab)",		
				 "Conhecimento (religião) (Int)" ,
				 "Conhecimento (planos) (Int)","Ofícios (Int)" , "Cura (Sab)","Profissão (Sab)","Adestrar Animais (Car)", "Cavalgar (Des)", "Concentração (Con)", "Conhecimento (natureza) (Int)", "Cura (Sab)",
				 "Diplomacia (Car)", "Identificar Magia (Int)", "Natação (For)", "Observar (Sab)", "Ofícios (Int)", "Ouvir (Sab)",
				 "Profissão (Sab)", "Sobrevivência (Sab)" );
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_guerreiro(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Saltar (For)", "Cavalgar (Des)", "Escalar (For)","Ofícios (Int)",
				"Intimidação (Car)", "Adestrar Animais (Car)","Natação (For)",
				
				"Observar (Sab)", "Ofícios (Int)", "Ouvir (Sab)",
				"Profissão (Sab)", "Sobrevivência (Sab)","Diplomacia (Car)","Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)",
				"Identificar Magia (Int)", "Concentração (Con)", "Conhecimento (arcano) (Int)", 
				"Blefar (Car)", "Conhecimento (história) (Int)", "Diplomacia (Car)", 
						
				 "Conhecimento (religião) (Int)" ,
				 "Conhecimento (planos) (Int)",
				
				"Sentir Motivação (Sab)","Escalar (For)","Esconder-se (Des)","Furtividade (Des)",
				"Atuação (Car)", "Blefar(Car)",
				 
				"Adestrar Animais (Car)", "Cavalgar (Des)", "Concentração (Con)", "Conhecimento (natureza) (Int)", "Cura (Sab)",
				"Diplomacia (Car)", "Natação (For)", "Observar (Sab)", "Ofícios (Int)", "Ouvir (Sab)",
				"Profissão (Sab)", "Sobrevivência (Sab)",);
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_ladino(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Abrir Fechaduras (Des)", "Acrobacia (Des)", "Arte da Fuga (Des)", "Atuação (Car)",
				"Avaliação (Int)" ,"Blefar (Car)", "Conhecimento (local) (Int)", "Decifrar Escrita (Int)", "Diplomacia (Car)", 
				"Disfarces (Car)", "Equilíbrio (Des)", "Escalar (For)", "Esconder-se (Des)", "Falsificação (Int)", "Furtividade (Des)", 
				"Intimidação (Car)", "Natação (For)", "Observar (Sab)", "Obter Informação (Car)", "Ofícios (Int)", "Operar Mecanismo (Int)", 
				"Ouvir (Sab)", "Prestidigitação (Des)", "Procurar (Int)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)",
				"Identificar Magia (Int)", "Concentração (Con)", "Conhecimento (arcano) (Int)", 
				"Blefar (Car)", "Conhecimento (história) (Int)", "Diplomacia (Car)", 
						
				 "Conhecimento (religião) (Int)" ,
				 "Conhecimento (planos) (Int)",
				
				"Sentir Motivação (Sab)","Escalar (For)","Esconder-se (Des)","Furtividade (Des)",
				"Atuação (Car)", "Blefar(Car)",
				 
				"Adestrar Animais (Car)", "Cavalgar (Des)", "Concentração (Con)", "Conhecimento (natureza) (Int)", "Cura (Sab)",
				"Diplomacia (Car)", "Natação (For)", "Observar (Sab)", "Ofícios (Int)", "Ouvir (Sab)",
				"Profissão (Sab)", "Sobrevivência (Sab)",);
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_mago(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Concentração (Con)", "Conhecimento (arcano) (Int)", "Decifrar Escrita (Int)",
				"Identificar Magia (Int)", "Ofícios (Int)", "Profissão (Sab)",
						
				"Conhecimento (religião) (Int)" ,
				"Conhecimento (planos) (Int)","Ofícios (Int)" , "Cura (Sab)","Profissão (Sab)","Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)",
				"Abrir Fechaduras (Des)", "Acrobacia (Des)", "Arte da Fuga (Des)", "Atuação (Car)",
				"Avaliação (Int)" ,"Blefar (Car)", "Conhecimento (local) (Int)", "Decifrar Escrita (Int)", "Diplomacia (Car)", 
				"Disfarces (Car)", "Equilíbrio (Des)", "Escalar (For)", "Esconder-se (Des)", "Falsificação (Int)", "Furtividade (Des)", 
				"Intimidação (Car)", "Natação (For)", "Observar (Sab)", "Obter Informação (Car)", "Ofícios (Int)", "Operar Mecanismo (Int)", 
				"Ouvir (Sab)", "Prestidigitação (Des)", "Procurar (Int)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)");
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_monge(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Acrobacia (Des)", "Arte da Fuga (Des)", "Atuação (Car)", "Concentração (Con)", "Conhecimento (arcano) (Int)",
				" Conhecimento (religião) (Int)", "Diplomacia (Car)", "Equilíbrio (Des)", "Escalar (For)", "Esconder-se (Des)",
				"Furtividade (Des)", "Natação (For)", "Observar (Sab)", "Ofícios (Int)", "Ouvir (Sab)", "Profissão (Sab)",
				"Saltar (For)", "Sentir Motivação (Sab)",
				
				
				"Conhecimento (religião) (Int)" ,
				"Conhecimento (planos) (Int)","Ofícios (Int)" , "Cura (Sab)","Profissão (Sab)","Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)",
				"Abrir Fechaduras (Des)", "Acrobacia (Des)", "Arte da Fuga (Des)", "Atuação (Car)",
				"Avaliação (Int)" ,"Blefar (Car)", "Conhecimento (local) (Int)", "Decifrar Escrita (Int)", "Diplomacia (Car)", 
				"Disfarces (Car)", "Equilíbrio (Des)", "Escalar (For)", "Esconder-se (Des)", "Falsificação (Int)", "Furtividade (Des)", 
				"Intimidação (Car)", "Natação (For)", "Observar (Sab)", "Obter Informação (Car)", "Ofícios (Int)", "Operar Mecanismo (Int)", 
				"Ouvir (Sab)", "Prestidigitação (Des)", "Procurar (Int)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)");	
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}
	
	function pericias_de_paladino(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Conhecimento (religião) (Int)", "Cavalgar (Des)", "Concentração (Con)", "Diplomacia (Car)",
				"Cura (Sab)","Adestrar Animais (Car)", "Ofícios (Int)", "Profissão (Sab)", "Sentir Motivação (Sab)",
				
				"Natação (For)", "Ouvir (Sab)","Adestrar Animais (Car)",
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)","Escalar (For)","Esconder-se (Des)","Furtividade (Des)",
				
				"Conhecimento (religião) (Int)" ,
				"Conhecimento (planos) (Int)","Ofícios (Int)" , "Cura (Sab)","Profissão (Sab)","Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)",
				"Abrir Fechaduras (Des)", "Acrobacia (Des)", "Arte da Fuga (Des)", "Atuação (Car)",
				"Avaliação (Int)" ,"Blefar (Car)", "Conhecimento (local) (Int)", "Decifrar Escrita (Int)", "Diplomacia (Car)", 
				"Disfarces (Car)", "Equilíbrio (Des)", "Escalar (For)", "Esconder-se (Des)", "Falsificação (Int)", "Furtividade (Des)", 
				"Intimidação (Car)", "Natação (For)", "Observar (Sab)", "Obter Informação (Car)", "Ofícios (Int)", "Operar Mecanismo (Int)", 
				"Ouvir (Sab)", "Prestidigitação (Des)", "Procurar (Int)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)");	
		
		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		

	}
	
	function pericias_de_ranger(){
		
		$qtdPericias = count($this->pericias_grad);
		$periciasLista = array("Concentração (Con)","Adestrar animas (Car)","Cavalgar (Des)","Sobrevivência (Sab)",
			 "Conhecimento (geografia) (Int)","Conhecimento (masmorras) (Int)","Conhecimento (natureza) (Int)",
			 "Cura (Sab)","Escalar (For)","Esconder-se (Des)","Furtividade (Des)","Natação (For)","Observar (Sab)",
			 "Ofícios (Int)","Ouvir (Sab)","Procurar (Sab)","Profissão (Sab)",
			 "Saltar (For)","Usar Cordas (Des)",
			 
			 
			 "Conhecimento (religião) (Int)" ,
				"Conhecimento (planos) (Int)","Ofícios (Int)" , "Cura (Sab)","Profissão (Sab)","Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)",
				"Abrir Fechaduras (Des)", "Acrobacia (Des)", "Arte da Fuga (Des)", "Atuação (Car)",
				"Avaliação (Int)" ,"Blefar (Car)", "Conhecimento (local) (Int)", "Decifrar Escrita (Int)", "Diplomacia (Car)", 
				"Disfarces (Car)", "Equilíbrio (Des)", "Escalar (For)", "Esconder-se (Des)", "Falsificação (Int)", "Furtividade (Des)", 
				"Intimidação (Car)", "Natação (For)", "Observar (Sab)", "Obter Informação (Car)", "Ofícios (Int)", "Operar Mecanismo (Int)", 
				"Ouvir (Sab)", "Prestidigitação (Des)", "Procurar (Int)", "Profissão (Sab)", "Saltar (For)", "Sentir Motivação (Sab)", 
				"Usar Cordas (Des)", "Usar Instrumento Mágico (Car)"
			);

		for($i = 0; $i <= $qtdPericias-1; $i++){
			
			$this->pericias_nome[$i] = $periciasLista[$i];
		}
		
	}


	function selecionar_pericas_de_classe(){
		
		$classe = $this->classe;
		
		switch ($classe){
			case 'barbaro':$this->pericias_de_barbaro();
			break;
			
			case 'guerreiro':$this->pericias_de_guerreiro();
			break;
			
			case 'paladino':$this->pericias_de_paladino();
			break;
			
			case 'monge':$this->pericias_de_monge();
			break;
			
			case 'ladino':$this->pericias_de_ladino();
			break;
			
			case 'clerigo':$this->pericias_de_clerigo();
			break;
			
			case 'bardo':$this->pericias_de_bardo();
			break;
			
			case 'feiticeiro':$this->pericias_de_feiticeiro();
			break;
			
			case 'mago':$this->pericias_de_mago();
			break;
			
			case 'druida':$this->pericias_de_druida();
			break;
			
			case 'ranger':$this->pericias_de_ranger();
			break;
			
			case 'barbara':$this->pericias_de_barbaro();
			break;
			
			case 'guerreira':$this->pericias_de_guerreiro();
			break;
			
			case 'paladina':$this->pericias_de_paladino();
			break;
			
			case 'ladina':$this->pericias_de_ladino();
			break;
			
			case 'cleriga':$this->pericias_de_clerigo();
			break;
			
			case 'barda':$this->pericias_de_bardo();
			break;
			
			case 'feiticeira':$this->pericias_de_feiticeiro();
			break;
			
			case 'maga':$this->pericias_de_mago();
			break;
			
		}
	}
	
	function talentos(){
		
		$classe = $this->classe;
		
		switch($classe){
			
			case 'barbaro':$this->inicializar_talentos_de_barbaro();
			break;
			
			case 'guerreiro':$this->inicializar_talentos_de_guerreiro();
			break;
			
			case 'paladino':$this->inicializar_talentos_de_paladino();
			break;
			
			case 'monge':$this->inicializar_talentos_de_monge();
			break;
			
			case 'ladino':$this->inicializar_talentos_de_ladino();
			break;
			
			case 'clerigo':$this->inicializar_talentos_de_clerigo();
			break;
			
			case 'bardo':$this->inicializar_talentos_de_bardo();
			break;
			
			case 'feiticeiro':$this->inicializar_talentos_de_feiticeiro();
			break;
			
			case 'mago':$this->inicializar_talentos_de_mago();
			break;
			
			case 'druida':$this->inicializar_talentos_de_druida();
			break;
			
			case 'ranger':$this->inicializar_talentos_de_ranger();
			break;
			
			case 'barbara':$this->inicializar_talentos_de_barbaro();
			break;
			
			case 'guerreira':$this->inicializar_talentos_de_guerreiro();
			break;
			
			case 'paladina':$this->inicializar_talentos_de_paladino();
			break;
			
			case 'ladina':$this->inicializar_talentos_de_ladino();
			break;
			
			case 'cleriga':$this->inicializar_talentos_de_clerigo();
			break;
			
			case 'barda':$this->inicializar_talentos_de_bardo();

			break;
			
			case 'feiticeira':$this->inicializar_talentos_de_feiticeiro();
			break;
			
			case 'maga':$this->inicializar_talentos_de_mago();
			break;
		}
		
	}
	
	
	
	function inicializar_talentos_de_barbaro(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Movimento Rápido, analfabetismo, fúria 1/dia",
							  "Esquiva sobrenatural",
							  "Sentir armadilhas +1",
				 			  "Fúria 2/dia",
							  "Esquiva sobrenatural aprimorada",
							  "Sentir armadilhas +2",
				 			  "Redução de dano 1/-",
							  "Fúria 3/dia",
							  "Sentir armadilhas +3",
							  "Redução de dano 2/-",
							  "Fúria maior",
							  "Fúria 4/dia, sentir armadilhas +4",
				 			  "Redução de dano 3/-",
							  "Vontade inabalável",
							  "Sentir armadilhas +5",
							  "Redução de dano 4/-, fúria 5/dia",
				 			  "Fúria incansável",
							  "Sentir armadilhas +6",
							  "Redução de dano 5/-",
							  "Fúria poderosa, fúria 6/dia"
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	function inicializar_talentos_de_bardo(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Música de bardo, conhecimento de bardo, música de proteção, fascinar, inspirar coragem +1",
							  "",
							  "Inspirar competência",
							  "",
				 			  "",
							  "Sugestão",
							  "",
				 			  "Inspirar coragem +2",
							  "Inspirar grandeza",
							  "",
							  "",
							  "Melodia da libertação",
							  "",
				 			  "Inspirar coragem +3",
							  "Inspirar heroísmo",
							  "",
							  "",
				 			  "",
							  "Sugestão em massa",
							  "",
							  "Inspirar coragem +4"
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	function inicializar_talentos_de_clerigo(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Expulsar ou fascinar mortos-vivos",
							  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
							  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
							  ""
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	function inicializar_talentos_de_druida(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Companheiro animal, senso da natureza, empatia com a natureza",
							  "Caminho da Floresta",
							  "Rastro Invisível",
							  "Resistir à tentação da natureza",
				 			  "Forma selvagem (1/dia)",
							  "Forma selvagem (2/dia)",
							  "Forma selvagem (3/dia)",
				 			  "Forma selvagem (Grande)",
							  "Imunidade a venenos",
							  "Forma selvagem (4/dia)",
							  "Forma selvagem (Miúda)",
							  "Forma selvagem (plantas)",
							  "Mil faces",
				 			  "Forma selvagem (5/dia)",
							  "Corpo atemporal, forma selvagem (Enorme)",
							  "Forma selvagem (elemental 1/dia)",
							  "",
				 			  "Forma selvagem (6/dia, elemental 2/dia)",
							  "",
							  "Forma selvagem (elemental 3/dia, elemental Enorme)",
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	function inicializar_talentos_de_feiticeiro(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Invocar familiar",
							  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
							  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
							  "",
				 			  "",
							  "",
							  "",
							  "",
							  ""
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}

				
	}
	
	
		function inicializar_talentos_de_guerreiro(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Talento Adicional",
							  "Talento Adicional",
							  "",
							  "Talento Adicional",
				 			  "",
							  "Talento Adicional",
							  "",
				 			  "Talento Adicional",
							  "",
							  "Talento Adicional",
							  "",
							  "Talento Adicional",
							  "",
				 			  "Talento Adicional",
							  "",
							  "Talento Adicional",
							  "",
				 			  "Talento Adicional",
							  "",
							  "Talento Adicional",
							  "",
							  "Talento Adicional"
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	
	function inicializar_talentos_de_ladino(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Ataque furtivo +1d6, encontrar armadilhas",
							  "Evasão",
							  "Ataque furtivo +2, sentir armadilhas +1d6",
							  "Esquiva sobrenatural",
				 			  "Ataque furtivo +3d6",
							  "Sentir armadilhas +2",
							  "Ataque furtivo +4d6",
				 			  "Esquiva sobrenatural aprimorada",
							  "Ataque furtivo +5d6, sentir armadilhas +3",
							  "Habilidade especial",
							  "Ataque furtivo +6d6",
							  "Sentir armadilhas +4",
							  "Ataque furtivo +7d6, habilidade especial",
				 			  "",
							  "Ataque furtivo +8d6, sentir armadilhas +5",
							  "Habilidade especial",
							  "Ataque furtivo +9d6",
				 			  "Sentir armadilhas +6",
							  "Ataque furtivo +10d6, habilidade especial",
							  "",
							  "",
							  ""
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	
	function inicializar_talentos_de_mago(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Invocar familiar, escrever pergaminho",
							  "",
							  "",
							  "",
				 			  "Talento Adicional",
							  "",
							  "",
				 			  "",
							  "",
							  "Talento Adicional",
							  "",
							  "",
							  "",
				 			  "",
							  "Talento Adicional",
							  "",
							  "",
				 			  "",
							  "",
							  "Talento Adicional",
							  "",
							  ""
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	function inicializar_talentos_de_monge(){
		
		$qtdTalentos = $this->nivel;
			$talentos = array("Talento adicional, rajada de golpes, ataque desarmado",
							  "Talento adicional, evasão",
							  "Mente tranqüila",
							  "Ataque chi (mágico), queda suave 6 m",
				 			  "Pureza corporal",
							  "Talento adicional, queda suave 9 m ",
							  "Integridade corporal",
				 			  "Queda suave 12 m",
							  "Evasão aprimorada",
							  "Ataque chi (ordem). Queda suave 15 m",
							  "Corpo de diamante, rajada maior",
							  "Passo etéreo, queda suave 18 m",
							  "Alma de diamante",
				 			  "Queda suave 21 m",
							  "Mão vibrante",
							  "Ataque chi (adamante), queda suave 24 m",
							  "Corpo atemporal, idiomas do sol e da lua",
				 			  "Queda suave 27 m ",
							  "Corpo vazio",
							  "Auto-perfeição, queda suave qualquer distância",
							  "",
							  ""
				);
			if($this->nivel >= 1 && $this->nivel<= 3){
				$this->dado_dano = '1d6';
			}elseif($this->nivel >= 4 && $this->nivel<= 7){
				$this->dado_dano = '1d8';
			}elseif($this->nivel >= 8 && $this->nivel<= 11){
				$this->dado_dano = '1d10';
			}elseif($this->nivel >= 12 && $this->nivel<= 15){
				$this->dado_dano = '2d6';
			}elseif($this->nivel >= 16 && $this->nivel<= 19){
				$this->dado_dano = '2d8';
			}elseif($this->nivel >= 20 && $this->nivel<= 24){
				$this->dado_dano = 'd20';
			}
			
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	
	function inicializar_talentos_de_paladino(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("Aura do bem, detectar o mal, destruir o mal 1/dia",
							  "Graça divina, cura pelas mãos",
							  "Aura de coragem, saúde divina",
							  "Expulsar mortos-vivos",
				 			  "Destruir o mal 2/dia, montaria especial",
							  "Remover doença 1/semana",
							  "",
				 			  "",
							  "Remover doença 2/semana",
							  "Destruir o mal 3/dia ",
							  "",
							  " Remover doença 3/semana",
							  "",
				 			  "",
							  "Remover doença 4/semana, destruir o mal 4/dia",
							  "",
							  "",
				 			  " Remover doença 5/semana",
							  "",
							  "Destruir o mal 5/dia",
							  "",
							  ""
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	function inicializar_talentos_de_ranger(){
		
		$this->dado_dano = '1d3';
		$qtdTalentos = $this->nivel;
			$talentos = array("1° inimigo predileto, rastrear, empatia com a natureza",
							  "Estilo de Combate",
							  "Tolerância",
							  "Companheiro animal",
				 			  "2° inimigo predileto",
							  "Estilo de Combate Aprimorado",
							  "Caminho da floresta",
				 			  "Rastreador Eficaz ",
							  "Evasão",
							  "3° inimigo predileto",
							  "Domínio do Estilo de Combate",
							  "",
							  "Camuflagem ",
				 			  "",
							  "4° inimigo predileto",
							  "",
							  "Mimetismo ",
				 			  "",
							  "",
							  "5° inimigo predileto",
							  "",
							  ""
				);
	
			for($i = 0; $i <= $qtdTalentos-1; $i++){
				
				$this->talentos[$i] = $talentos[$i];
			}
				
	}
	
	function acumular_talento(){
		
		$talentos_total = 0;
		
		for($i = 1; $i <= $this->nivel; $i++){
			
			if($i == 1){
				$talentos_total = $talentos_total+1;
			}elseif($i == 3){
				$talentos_total = $talentos_total+1;
			}elseif($i == 6){
				$talentos_total = $talentos_total+1;
			}elseif($i == 9){
				$talentos_total = $talentos_total+1;
			}elseif($i == 12){
				$talentos_total = $talentos_total+1;
			}elseif($i == 15){
				$talentos_total = $talentos_total+1;
			}elseif($i == 18){
				$talentos_total = $talentos_total+1;
			}
			
		}
		
		return $talentos_total;
	}
	
	function img(){
		$img_classe = $this->classe;
		switch($img_classe){
			case "barbaro":$this->img = "PHB35_PG25_WEB.jpg";
			break;
			
			case "bardo":$this->img = "PHB35_PG27_WEB.jpg";
			break;
			
			case "clerigo":$this->img = "PHB35_PG31_WEB.jpg";
			break;
			
			case "druida":$this->img = "PHB35_PG34_WEB.jpg";
			break;
			
			case "guerreiro":$this->img = "PHB35_PG37_WEB.jpg";
			break;
			
			case "monge":$this->img = "PHB35_PG41_WEB.jpg";
			break;
			
			case "paladino":$this->img = "PHB35_PG43_WEB.jpg";
			break;
			
			case "ranger":$this->img = "PHB35_PG46_WEB.jpg";
			break;
			
			case "ladino":$this->img = "PHB35_PG50_WEB.jpg";
			break;
			
			case "feiticeiro":$this->img = "PHB35_PG51_WEB.jpg";
			break;
			
			case "mago":$this->img = "PHB35_PG56_WEB.jpg";
			break;
			
			case "barbara":$this->img = "PHB35_PG25_WEB.jpg";
			break;
			
			case "barda":$this->img = "PHB35_PG27_WEB.jpg";
			break;
			
			case "cleriga":$this->img = "PHB35_PG31_WEB.jpg";
			break;
			
			case "guerreira":$this->img = "PHB35_PG37_WEB.jpg";
			break;
			
			case "paladina":$this->img = "PHB35_PG43_WEB.jpg";
			break;
			
			case "ladina":$this->img = "PHB35_PG50_WEB.jpg";
			break;
			
			case "feiticeira":$this->img = "PHB35_PG51_WEB.jpg";
			break;
			
			case "maga":$this->img = "PHB35_PG56_WEB.jpg";
			break;
		}
		return $this->img;
	}
	
	function gerar_descricao_visual(){
		$img_classe = $this->classe;
		switch($img_classe){
			case "barbaro":	$barbaro = array("pic_58.jpg","pic_59.jpg","pic_60jpg","pic_61.jpg","pic_62.jpg");
							$escolido = rand(0, count($barbaro)-1);
							$this->img = $escolido;
			break;
			
			case "bardo":$this->img = $bardo = array("pic_25.jpg","pic_93.jpg","pic_11jpg","pic_81.jpg");
									  $escolido = rand(0, count($barbaro)-1);
									  $this->img = $escolido;
			break;
			
			case "clerigo":$this->img = $clerigo = array("pic_87.jpg","pic_33.jpg","pic_85jpg","pic_82.jpg");
									    $escolido = rand(0, count($clerigo)-1);
									    $this->img = $escolido;
			break;
			
			case "druida":$this->img = "PHB35_PG34_WEB.jpg";
			break;
			
			case "guerreiro":$this->img = "PHB35_PG37_WEB.jpg";
			break;
			
			case "monge":$this->img = "PHB35_PG41_WEB.jpg";
			break;
			
			case "paladino":$this->img = "PHB35_PG43_WEB.jpg";
			break;
			
			case "ranger":$this->img = "PHB35_PG46_WEB.jpg";
			break;
			
			case "ladino":$this->img = "PHB35_PG50_WEB.jpg";
			break;
			
			case "feiticeiro":$this->img = "PHB35_PG51_WEB.jpg";
			break;
			
			case "mago":$this->img = "PHB35_PG56_WEB.jpg";
			break;
			
			case "barbara":$this->img = "PHB35_PG25_WEB.jpg";
			break;
			
			case "barda":$this->img = "PHB35_PG27_WEB.jpg";
			break;
			
			case "cleriga":$this->img = "PHB35_PG31_WEB.jpg";
			break;
			
			case "guerreira":$this->img = "PHB35_PG37_WEB.jpg";
			break;
			
			case "paladina":$this->img = "PHB35_PG43_WEB.jpg";
			break;
			
			case "ladina":$this->img = "PHB35_PG50_WEB.jpg";
			break;
			
			case "feiticeira":$this->img = "PHB35_PG51_WEB.jpg";
			break;
			
			case "maga":$this->img = "PHB35_PG56_WEB.jpg";
			break;
		}
		return $this->img;
	}
	
	function visualizar_personagens(){
		$personagens = array(
						array("pic_1.jpg","pic_2.jpg","pic_3.jpg","pic_4.jpg","pic_5.jpg","pic_6.jpg","pic_7.jpg","pic_8.jpg","pic_9.jpg","pic_10.jpg","pic_11.jpg",
							 "pic_12.jpg","pic_13.jpg","pic_14.jpg","pic_15.jpg","pic_16.jpg","pic_17.jpg","pic_18.jpg","pic_19.jpg","pic_20.jpg","pic_21.jpg","pic_22.jpg",
							 "pic_23.jpg","pic_24.jpg","pic_25.jpg","pic_26.jpg","pic_27.jpg","pic_28.jpg","pic_29.jpg","pic_30.jpg","pic_31.jpg","pic_32.jpg","pic_33.jpg",
							 "pic_34.jpg","pic_35.jpg","pic_36.jpg","pic_37.jpg","pic_38.jpg","pic_39.jpg","pic_40.jpg","pic_41.jpg","pic_42.jpg","pic_43.jpg","pic_44.jpg",
							 "pic_45.jpg","pic_46.jpg","pic_47.jpg","pic_48.jpg","pic_49.jpg","pic_50.jpg","pic_51.jpg","pic_52.jpg","pic_53.jpg","pic_54.jpg","pic_55.jpg",
							 "pic_56.jpg","pic_57.jpg","pic_58.jpg","pic_59.jpg","pic_60.jpg","pic_61.jpg","pic_62.jpg","pic_63.jpg","pic_64.jpg","pic_65.jpg","pic_66.jpg",
							 "pic_67.jpg","pic_68.jpg","pic_69.jpg","pic_70.jpg","pic_71.jpg","pic_72.jpg","pic_73.jpg","pic_74.jpg","pic_75.jpg","pic_76.jpg","pic_77.jpg",
							 "pic_78.jpg","pic_79.jpg","pic_80.jpg","pic_81.jpg","pic_82.jpg","pic_83.jpg","pic_84.jpg","pic_85.jpg","pic_86.jpg","pic_87.jpg","pic_88.jpg",
							 "pic_89.jpg","pic_90.jpg","pic_91.jpg","pic_92.jpg","pic_93.jpg","pic_94.jpg",
							 ));
		for($yIndex = 0; $yIndex < count($personagens); $yIndex++){
		echo("<tr>");
			for($xIndex = 0; $xIndex < count($personagens[$yIndex]); $xIndex++){
				echo("<td align=center valign=middle> <img src='../img_personagens/".$personagens[$yIndex][$xIndex]."' width='100' height='100'/> </td>");
			}
		echo("</tr>");
} 
	
	}
	
	
	function __init_personagem__(Personagem $personagem){
		
		$personagem->gerar_nivel();
		$personagem->gerar_sexo();
		$personagem->gerar_nome();
		$personagem->gerar_classe();
		$personagem->gerar_pts_de_habilidade_add();
		$personagem->gerar_habilidades_pts();
		$personagem->distribuir_pts_de_habilidade();
		$personagem->gerar_cor_do_cabelo();
		$personagem->gerar_cor_dos_olhos();
		$personagem->gerar_cor_da_pele();
		$personagem->gerar_raca();
		$personagem->gerar_deslocamento();
		$personagem->gerar_xp();
		$personagem->gerar_tendencia();
		$personagem->gerar_CA();
		$personagem->gerar_PV();
		$personagem->gerar_altura();
		$personagem->gerar_peso();
		$personagem->gerar_idade();
		$personagem->exibir_BBA();
		$personagem->exibir_ataque_corpo_a_corpo();
		$personagem->exibir_ataque_a_distancia();
		$personagem->gerar_testes_de_resistencia();
		$personagem->inicializar_listas();
		$personagem->gerar_pts_de_pericia();
		$personagem->distribuir_pts_de_pericia();
		$personagem->selecionar_pericas_de_classe();
		$personagem->identificar_hab_chave_da_pericia();
		$personagem->talentos();
		$personagem->acumular_talento();
		$personagem->img();
		
	}
}

?>