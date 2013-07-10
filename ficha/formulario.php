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

    <div class="formulario">
            
            <h1>Criar personagem</h1>
            <p>Caso queira criar um personagem sem ser de forma aleatória, basta preencher este formulário e seu novo personagem será criado ao lado.</p>
   
             <p>	 
                     OBS: Quando você for passar a ficha para txt(bloco de notas) preste atenção na lista de pericias. 
                     As pericias listadas que não stiverem neste formato,EX (Diplomacia (Car)14 = 12 +2), são pericias que não pertencem ao personagem
                     mas para facilitar para você caso não goste da lista que veio, você poderá modificar com as outras pericia sugeridas que vem junto
                     com a lista de pericias do personagem ferado. Resumindo toda pericia que seje perecido com essa, EX
                    (Conhecimento (religião) (Int)3=  +3) ou seja faltando numeros, serão apenas pericias de sugestão caso queira alterar 
                     posteriormente.
              </p>
            <h3>Informe os dados do seu personagem</h3> 
            <hr />
            <form action="ficha_montada.php?estado=montado"  adiciona target = "_blank" method="post">
                <table>
                              <tr class="fundo" id="historia">
                                <td class="negrito">Nome </td>
                                <td><input name="nome" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia">
                                <td class="negrito">Jogador</td>
                                <td><input name="jogador" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia">  
                                <td class="negrito">Tendencia</td>
                                <td>
                                    <select name="tendencia">
                                        <option>Leal e Bom</option>
                                        <option>Leal e Mau</option>
                                        <option>Leal e Neutro</option>
                                        <option>Caótico e Bom</option>
                                        <option>Neutro e Bom</option>
                                        <option>Caótico e Mau</option>
                                        <option>Neutro e Mau</option>
                                        <option>Neutro</option>
                                        <option>Neutro e Caótico</option>
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia">
                                <td class="negrito">Olhos </td>
                                <td><input name="olhos" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia">
                                <td class="negrito">Pele</td>
                                <td><input name="pele" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">Cabelos</td>
                                <td><input name="cabelos" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia">
                                <td class="negrito">Nivel </td>
                                <td>
                                    <select name="nivel">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option> 
                                    </select>
                                </td>
                               </tr>
                               <tr class="fundo" id="historia"> 
                                <td class="negrito">Raça</td>
                                <td>
                                    <select name="raca">
                                        <option>Humano</option>
                                        <option>Humana</option>
                                        <option>Halfling</option>
                                        <option>Gnomo</option>
                                        <option>Gnoma</option>
                                        <option>Meio-Orc</option>
                                        <option>Anão</option>
                                        <option>Anã</option>
                                        <option>Meio-Elfo(</option>
                                        <option>Meio-Elfa</option>
                                        <option>Elfo</option>
                                        <option>Elfa</option>
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia">  
                                <td class="negrito">Classe</td>
                                <td>
                                    <select name="classe">
                                        <option>barbaro</option>
                                        <option>barbara</option>
                                        <option>bardo</option>
                                        <option>barda</option>
                                        <option>clérigo</option>
                                        <option>clériga</option>
                                        <option>druida</option>
                                        <option>feiticeiro</option>
                                        <option>feiticeira</option>
                                        <option>guerreiro</option>
                                        <option>guerreira</option>
                                        <option>ladino</option>
                                        <option>ladina</option>
                                        <option>mago</option>
                                        <option>maga</option>
                                        <option>monge</option>
                                        <option>paladino</option>
                                        <option>paladina</option>
                                        <option>ranger</option>
                                        
                                    </select>
                                </td>
                              </tr>                          
                              <tr class="fundo" id="historia">
                                <td class="negrito">Divindade </td>
                                <td><input name="divindade" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia">
                                <td class="negrito">Tamanho</td>
                                <td><input name="tamanho" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">Idade</td>
                                <td><input name="idade" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia">
                                <td class="negrito">Sexo </td>
                                <td>
                                    <select name="sexo">
                                        <option>masculino</option>
                                        <option>feminino</option> 
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">Altura</td>
                                <td><input name="altura" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">Peso</td>
                                <td><input name="peso" type="text" size="30" maxlength="100" /></td>
                              </tr>
                              
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">FOR</td>
                                <td>
                                    <select name="for">
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option> 
                                        <option>71</option>
                                        <option>72</option>
                                        <option>73</option>
                                        <option>74</option>
                                        <option>75</option>
                                        <option>76</option>
                                        <option>77</option>
                                        <option>78</option>
                                        <option>79</option>
                                        <option>80</option> 
                                        <option>81</option>
                                        <option>82</option>
                                        <option>83</option>
                                        <option>84</option>
                                        <option>85</option>
                                        <option>86</option>
                                        <option>87</option>
                                        <option>88</option>
                                        <option>89</option>
                                        <option>90</option> 
                                        <option>91</option>
                                        <option>92</option>
                                        <option>93</option>
                                        <option>94</option>
                                        <option>95</option>
                                        <option>96</option>
                                        <option>97</option>
                                        <option>98</option>
                                        <option>99</option>
                                        <option>100</option> 
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">CON</td>
                                <td>
                                    <select name="con">
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option> 
                                        <option>71</option>
                                        <option>72</option>
                                        <option>73</option>
                                        <option>74</option>
                                        <option>75</option>
                                        <option>76</option>
                                        <option>77</option>
                                        <option>78</option>
                                        <option>79</option>
                                        <option>80</option> 
                                        <option>81</option>
                                        <option>82</option>
                                        <option>83</option>
                                        <option>84</option>
                                        <option>85</option>
                                        <option>86</option>
                                        <option>87</option>
                                        <option>88</option>
                                        <option>89</option>
                                        <option>90</option> 
                                        <option>91</option>
                                        <option>92</option>
                                        <option>93</option>
                                        <option>94</option>
                                        <option>95</option>
                                        <option>96</option>
                                        <option>97</option>
                                        <option>98</option>
                                        <option>99</option>
                                        <option>100</option> 
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">DES</td>
                                <td>
                                    <select name="des">
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option> 
                                        <option>71</option>
                                        <option>72</option>
                                        <option>73</option>
                                        <option>74</option>
                                        <option>75</option>
                                        <option>76</option>
                                        <option>77</option>
                                        <option>78</option>
                                        <option>79</option>
                                        <option>80</option> 
                                        <option>81</option>
                                        <option>82</option>
                                        <option>83</option>
                                        <option>84</option>
                                        <option>85</option>
                                        <option>86</option>
                                        <option>87</option>
                                        <option>88</option>
                                        <option>89</option>
                                        <option>90</option> 
                                        <option>91</option>
                                        <option>92</option>
                                        <option>93</option>
                                        <option>94</option>
                                        <option>95</option>
                                        <option>96</option>
                                        <option>97</option>
                                        <option>98</option>
                                        <option>99</option>
                                        <option>100</option> 
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">INT</td>
                                <td>
                                    <select name="int">
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">SAB</td>
                                <td>
                                    <select name="sab">
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option> 
                                        <option>71</option>
                                        <option>72</option>
                                        <option>73</option>
                                        <option>74</option>
                                        <option>75</option>
                                        <option>76</option>
                                        <option>77</option>
                                        <option>78</option>
                                        <option>79</option>
                                        <option>80</option> 
                                        <option>81</option>
                                        <option>82</option>
                                        <option>83</option>
                                        <option>84</option>
                                        <option>85</option>
                                        <option>86</option>
                                        <option>87</option>
                                        <option>88</option>
                                        <option>89</option>
                                        <option>90</option> 
                                        <option>91</option>
                                        <option>92</option>
                                        <option>93</option>
                                        <option>94</option>
                                        <option>95</option>
                                        <option>96</option>
                                        <option>97</option>
                                        <option>98</option>
                                        <option>99</option>
                                        <option>100</option> 
                                    </select>
                                </td>
                              </tr>
                              <tr class="fundo" id="historia"> 
                                <td class="negrito">CAR</td>
                                <td>
                                    <select name="car">
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                        <option>61</option>
                                        <option>62</option>
                                        <option>63</option>
                                        <option>64</option>
                                        <option>65</option>
                                        <option>66</option>
                                        <option>67</option>
                                        <option>68</option>
                                        <option>69</option>
                                        <option>70</option> 
                                        <option>71</option>
                                        <option>72</option>
                                        <option>73</option>
                                        <option>74</option>
                                        <option>75</option>
                                        <option>76</option>
                                        <option>77</option>
                                        <option>78</option>
                                        <option>79</option>
                                        <option>80</option> 
                                        <option>81</option>
                                        <option>82</option>
                                        <option>83</option>
                                        <option>84</option>
                                        <option>85</option>
                                        <option>86</option>
                                        <option>87</option>
                                        <option>88</option>
                                        <option>89</option>
                                        <option>90</option> 
                                        <option>91</option>
                                        <option>92</option>
                                        <option>93</option>
                                        <option>94</option>
                                        <option>95</option>
                                        <option>96</option>
                                        <option>97</option>
                                        <option>98</option>
                                        <option>99</option>
                                        <option>100</option> 
                                    </select>
                                </td>
                              </tr>
    
    
    
                    
    
    
                         </table>
                         <br />
                          <input name="enviar" type="submit" value="Finalizar Personagem" />
                          <input name="limpar" type="reset" value="Limpar" />
                        
                   </form>
               <br />
              
 	</div>   
    
 <div class="footer">
    <?php require_once '../rodape.php'; ?>
  </div><!-- fim do rodape -->
</div><!-- fim do container  -->
</body>
</html>

