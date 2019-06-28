<?php
/*
Template Name: Programação por dia - SESC Madureira
*/
?>
<?php get_header(); ?>
<?php
if(!empty($_GET["lang"])) { $lingua = $_GET["lang"]; } ?>
<main class="container programacao">
	<section class="row">
    	<div class="col-0 col-lg-1"></div>
    	<div class="col-4 col-md-3 col-lg-2">
        <ul class="calendario card sticky-top">
        	<a style="background-color: #000099;color: #FFF;font-size: 17px;padding: 6px 10px;"><i class="fas fa-calendar-alt"></i></a>
        	<a href="#21"><li>Quarta 21</li></a>
            <a href="#22"><li>Quinta 22</li></a>
            <a href="#23"><li>Sexta 23</li></a>
            <a href="#24"><li>Sábado 24</li></a>
            <a href="#25"><li>Domingo 25</li></a>
            <a href="#27"><li>Terça 27</li></a>
            <a href="#28"><li>Quarta 28</li></a>
        </ul>
        </div>
        <div class="col-8 col-md-9 col-lg-7">
      <h1 class="titulo">Programação por local: <?php the_title(); ?></h1>
      <p><strong>Endereço:</strong> R. Ewbank da Câmara, 90 - Madureira, Rio de Janeiro</p>
      <p><em>* Verificar a classificação indicativa dos filmes na programação</em></p>
        <a name="21"></a>
        <h2>Quarta 21</h2>
      <h3>        17h</h3>
        <p><strong><a href="/2018/masterclass-com-daniel-queiroz/">MaStErClaSS CirCuito SESC CoM daniEl QuEiroZ</a></strong></p>
        <a name="22"></a>
        <h2>Quinta 22</h2>
        <h3>          15h</h3>
        <p><a href="/2018/filmes/a-poeira-nao-quer-sair-do-esqueleto/"><strong>a poeira não quer sair do Esqueleto</strong><br />
Dir. Daniel Santiso e Max William Morais<br />
[21 min. 2018. RJ.]</a></p>
        <p><a href="/2018/filmes/parque-oeste/"><strong>parque oeste</strong><br />
          Dir. Fabiana Assis<br />
          [70 min. 2018. GO.]</a></p>
        <h6>Classificação 12 anos</h6>
        <h3>18h30</h3>
        <p><a href="/2018/filmes/br3/"><strong>br3</strong><br />
Dir. Bruno Ribeiro<br />
[23 min. 2018. RJ]</a></p>
        <p><a href="/2018/filmes/superpina-gostoso-e-quando-a-gente-faz/"><strong>Superpina: gostoso é quando a gente faz!</strong><br />
          Dir. Jean Santos<br />
          [98 min. 2018. PE.]</a></p>
        <p>(sessão seguida de debate com realizador_s)</p>
        <h6>Classificação 18 anos </h6>
        <a name="23"></a>
        <h2>SeXTA 23</h2>
        <h3>          10h</h3>
        <p><a href="/2018/filmes/acumulo/"><strong>acúmulo</strong><br />
        Dir. Gilson Junior<br />
        [15min. 2017. RJ]</a></p>
        <p><a href="/2018/filmes/folego/"><strong>Fôlego</strong><br />
        Dir. Renato Sircilli<br />
        [85 min. 2018. SP.]</a></p>
        <h6>Classificação 16 anos</h6>
        <h3>15h</h3>
        <p><a href="/2018/filmes/antes-do-lembrar/"><strong>antes do lembrar</strong><br />
Dir. Luciana Mazeto e Vinícius 
Lopes [21 min. 2018. RS.]</a></p>
        <p><a href="/2018/filmes/espera/"><strong>Espera</strong><br />
Dir. Cao Guimarães<br />
[76 min. 2018. MG.]</a></p>
        <h6>Classificação livre</h6>
        <h3>18h30</h3>
        <p><a href="/2018/filmes/obeso-morbido/"><strong>obeso mórbido</strong><br />
Dir. Diego Bauer e Ricardo<br />
Manjaro [14 min. 2018. AM.]</a></p>
        <p><a href="/2018/filmes/meu-nome-e-daniel/"><strong>Meu nome é daniel</strong><br />
        Dir. Daniel Gonçalves<br />
        [83 min. 2018. RJ]</a></p>
        <h6>Classificação 16 anos</h6>
        <a name="24"></a>
        <h2>SÁBADO 24</h2>
        <h3>          10h</h3>
        <p><a href="/2018/filmes/memorias-do-subsolo-ou-o-homem-que-cavou-ate-encontrar-uma-redoma/"><strong>Memórias do Subsolo ou o homem que cavou até encontrar uma redoma</strong><br />
Dir. Felipe Camilo<br />
[11 min. 2017. CE.]</a></p>
        <p><a href="/2018/filmes/bloqueio/"><strong>bloqueio</strong><br />
Dir. Victória Álvares e Quentin
          Delaroche<br />
        [75 min. 2018. PE.]</a></p>
        <h6>Classificação 10 anos</h6>
        <h3>14h</h3>
        <p><a href="/2018/filmes/alma-bandida/"><strong>alma bandida</strong><br />
Dir. Marco Antonio Pereira<br />
[14 min. 2017. MG.]</a></p>
        <p><a href="/2018/filmes/com-o-terceiro-olho-na-terra-da-profanacao/"><strong>Com o terceiro olho na terra
          da profanação</strong><br />
          Dir. Catu Rizo<br />
          [66 min. 2016. RJ.]</a></p>
        <p><a href="/2018/filmes/a-chinesa-de-riad/"><strong>a chinesa de riad</strong><br />
          Dir. Leonardo Amaral e Roberto<br />
          Cotta [25 min. 2018. MG.]</a></p>
        <h6>Classificação 12 anos</h6>
        <h3>16h</h3>
        <p><a href="/2018/filmes/tea-for-two/"><strong>tea for two</strong><br />
Dir. Julia Katharine<br />
[25 min. 2018. SP.]</a></p>
        <p><a href="/2018/filmes/cinema-delas/"><strong>Cinema delas</strong><br />
          Dir. Carol Vilamaro<br />
          [42 min. 2017. RJ.]</a></p>
        <h6>Classificação 12 anos</h6>
        <a name="25"></a>
        <h2>DOMINGO 25</h2>
        <h3>          10h</h3>
        <p><a href="/2018/filmes/o-chale-e-uma-ilha-batida-de-vento-e-chuva/"><strong>o chalé é uma ilha batida de vento e chuva</strong><br />
Dir. Letícia Simões<br />
[94 min. 2018. RJ.]</a></p>
        <h6>Classificação livre</h6>
        <h3>14h</h3>
        <p><a href="/2018/filmes/perpetuo"><strong>perpétuo</strong><br />
Dir. Lorran Dias<br />
[25 min. 2018. RJ]</a></p>
        <p><a href="/2018/filmes/inaudito"> <strong>inaudito</strong><br />
          Dir. Gregorio Gananian<br />
          [88 min. 2017. SP.]</a></p>
        <h6>Classificação 12 anos</h6>
        <h3>16h</h3>
        <p><a href="/2018/filmes/nome-de-batismo-alice/"><strong>nome de batismo-alice</strong><br />
Dir. Tila Chitunda<br />
[25 min. 2017. PE.]</a></p>
        <p><a href="/2018/filmes/guardioes-da-memoria/"><strong>guardiões da memória</strong><br />
          Dir. Alberto Alvares<br />
          [55 min. 2018. RJ.]</a></p>
        <h6>Classificação 12 anos</h6>
        <a name="27"></a>
        <h2>TerÇA 27</h2>
        <h3>          15h</h3>
        <p><a href="/2018/filmes/memorias-do-subsolo-ou-o-homem-que-cavou-ate-encontrar-uma-redoma/"><strong>Memórias do Subsolo ou o homem que cavou até encontrar uma redoma</strong><br />
Dir. Felipe Camilo<br />
[11 min. 2017. CE.]</a></p>
        <p><a href="/2018/filmes/bloqueio/"><strong>bloqueio</strong><br />
Dir. Victória Álvares e Quentin
          Delaroche<br />
        [75 min. 2018. PE.]</a></p>
        <h6>Classificação livre</h6>
        <h3>18h30</h3>
        <p><a href="/2018/filmes/eu-minha-mae-e-wallace"><strong>Eu, minha mãe e Wallace</strong><br />
Dir. Irmãos Carvalho<br />
[22 min. 2018. RJ.]</a></p>
        <p><a href="/2018/filmes/negros-dizeres"><strong>Negros dizeres</strong><br />
          Dir. Hugo Lima<br />
          [42 min. 2015. RJ.]</a></p>
        <p>(sessão seguida de debate
          com realizador_s)</p>
        <h6>Classificação: 10 anos</h6>
        <a name="28"></a>
        <h2>QUArTA 28</h2>
        <h3>          15h</h3>
        <p><a href="/2018/filmes/dias-e-dias/"><strong>dias e dias</strong><br />
Dir. Getulio Ribeiro e Melise Fremiot<br />
[18 min. 2016. RJ.]</a></p>
        <p><a href="/2018/filmes/baixo-centro/"><strong>baixo Centro</strong><br />
          Dir. Ewerton Belico e Samuel Marotta [80 min. 2018. MG.]</a></p>
        <h6>Classificação 14 anos</h6>
        <h3>18h30</h3>
        <p><a href="/2018/filmes/a-fundo/"><strong>a fundo</strong><br />
Dir. Raphael Medeiros<br />
[8 min. 2015. RJ.]</a></p>
        <p><a href="/2018/filmes/temporada"><strong>temporada</strong><br />
Dir. André Novais Oliveira<br />
[113 min. 2018. MG.]</a></p>
        <h6>Classificação 12 anos<br />
          <br />
        </h6>
        
        </div>
	</section>
</main>
 
<?php get_footer(); ?>