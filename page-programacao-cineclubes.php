<?php
/*
Template Name: Programação por local: Cineclubes
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
            <a href="#22"><li>Quinta 22</li></a>
            <a href="#23"><li>Sexta 23</li></a>
            <a href="#24"><li>Sábado 24</li></a>
            <a href="#27"><li>Terça 27</li></a>
            <a href="#28"><li>Quarta 28</li></a>
            <a href="#29"><li>Quinta 29</li></a>
        </ul>
        </div>
        <div class="col-8 col-md-9 col-lg-7">
      <h1 class="titulo">Programação por local: <?php the_title(); ?></h1>
      <p>ENDEREÇOS: </p>
      <p><strong>Cineclube Mate com Angu<br />
      </strong>Goméia Galpão Criativo - Rua Dr. Lauro Neiva, 32 - Duque de Caxias, Rio de Janeiro</p>
      <p><strong>Favela Cineclube: </strong><br />
        Nabuco De Freitas, 20 - Santo Cristo, Rio de Janeiro</p>
      <p><strong>Cineclube Imbariê nos Trilhos: </strong><br />
        Casa Brasil Imbariê - 
        Av Coronel Sisson, lt 15 e 16, qd 2, Imbariê - Duque de Caxias, Rio de Janeiro</p>
      <p><strong>Na Favela Cineclube: <br />
      </strong>Vila Pinheiro (pagode da C11) - Complexo da Maré, Rio de Janeiro</p>
      <p><strong>UFRJ – Departamento de Letras: <br />
      </strong>Av. Horácio Macedo, 2151 - Cidade Universitária, Rio de Janeiro</p>
      <p><em>* Verificar a classificação indicativa dos filmes na programação</em></p>
      <a name="22" id="22"></a>
      <h2>Quinta 22</h2>
      <h3><strong>CinEClubE MatE CoM angu</strong><br />
          20h30</h3>
        <p><a href="/2018/filmes/memorias-do-subsolo-ou-o-homem-que-cavou-ate-encontrar-uma-redoma/"><strong>Memórias do Subsolo ou o homem que cavou até encontrar uma redoma</strong><br />
        Dir. Felipe Camilo<br />
        [11 min. 2017. CE.]</a></p>
        <p><a href="/2018/filmes/conte-isso-aqueles-que-dizem-que-fomos-derrotados/"><strong>Conte isso àqueles que dizem que fomos derrotados</strong><br />
        Dir. Aiano Bemfca, Camila 
        Bastos, Cristiano Araújo, Pedro Maia de Brito<br />
        [23 min. 2018. MG.]</a></p>
        <p><a href="/2018/filmes/eu-minha-mae-e-wallace"><strong>Eu, minha mãe e Wallace</strong><br />
Dir. Irmãos Carvalho<br />
[22 min. 2018. RJ.]</a></p>
        <p><a href="/2018/filmes/reforma/"><strong>reforma<br />
        </strong>Dir. Fabio Leal<br />
        [16 min. 2018. PE.]</a></p>
        <p><a href="/2018/filmes/plano-controle"><strong>Plano controle</strong><br />
Dir. Juliana Antunes<br />
[16 min. 2018. MG.]</a></p>
        <h6>Classificação 18 anos</h6>
                <h3><strong>FavEla CinEClubE</strong><br />
          20h
        </h3>
        <p><a href="/2018/filmes/a-poeira-nao-quer-sair-do-esqueleto/"><strong>a poeira não quer sair do Esqueleto</strong><br />
Dir. Daniel Santiso e Max William Morais<br />
[21 min. 2018. RJ.]</a></p>
        <p><a href="/2018/filmes/conte-isso-aqueles-que-dizem-que-fomos-derrotados/"><strong>Conte isso àqueles que dizem que fomos derrotados</strong><br />
Dir. Aiano Bemfca, Camila 
        Bastos, Cristiano Araújo, Pedro Maia de Brito<br />
[23 min. 2018. MG.]</a></p>
        <p><a href="/2018/filmes/eu-minha-mae-e-wallace"><strong>Eu, minha mãe e Wallace</strong><br />
Dir. Irmãos Carvalho<br />
[22 min. 2018. RJ.]</a></p>
        <h6>Classificação livre </h6>
        <a name="23" id="23"></a>
        <h2>Sexta 23</h2>
                <h3><strong>CinEClubE iMbariÊ noS trilHoS</strong><br />
          15h </h3>
        <p><a href="/2018/filmes/parque-oeste/"><strong>parque oeste</strong><br />
          Dir. Fabiana Assis<br />
          [70 min. 2018. GO.]</a><br />
                  </p>
        <h6>Classificação 12 anos</h6>
        <a name="24" id="24"></a>
        <h2>Sábado 24</h2>
        <h3><strong>NA FAVELA CINECLUBE</strong><br />
20h</h3>
        <p><a href="/2018/filmes/bloqueio/"><strong>bloqueio</strong><br />
Dir. Victória Álvares e Quentin Delaroche<br />
[75 min. 2018. PE.]</a></p>
        <a name="27" id="27"></a>
        <h2>TerÇA 27</h2>
        <h3><strong>uFrJ – dEpartaMEnto
          dE lEtraS – Fundão</strong><br />
          12h30</h3>
        <p><a href="/2018/filmes/temporada"><strong>temporada</strong><br />
          Dir. André Novais Oliveira<br />
          [113 min. 2018. MG.]</a></p>
        <h6>Classificação: 12 anos</h6>
        <h3>16h</h3>
        <p><a href="/2018/filmes/num-pais-estrangeiro/"><strong>num país estrangeiro</strong><br />
          Dir. Karen Akerman e Miguel Seabra Lopes<br />
          [25 min. 2018. RJ/Portugal.]</a></p>
        <p><a href="/2018/filmes/antes-do-lembrar/"><strong>antes do lembrar</strong><br />
          Dir. Luciana Mazeto e Vinícius<br />
          Lopes [21 min. 2018. RS.]</a></p>
        <p><a href="/2018/filmes/el-meraya/"><strong>El Meraya</strong><br />
          Dir Melissa Dullius 
          e Gustavo Jahn<br />
          [19 min. 2018. SC/Brasil, 
          Alemanha, Egito.]</a></p>
        <p><a href="/2018/filmes/bem-no-meio-do-ceu/"><strong>bem no meio do céu</strong><br />
          Dir. Isabella Raposo e Thiago 
          Brito [13 min. 2018. RJ.]</a></p>
        <h6>Classificação 16 anos</h6>
        <a name="28" id="28"></a>
        <h2>Quarta 28</h2>
        <h3><strong>uFrJ – dEpartaMEnto 
          dE lEtraS – Fundão</strong><br />
          12h30</h3>
        <p><a href="/2018/filmes/calma/"><strong>Calma</strong><br />
          Dir. Rafael Simões<br />
          [30 min. 2018. RJ.]</a></p>
        <p><a href="/2018/filmes/eu-minha-mae-e-wallace/"><strong>Eu, minha mãe e Wallace</strong><br />
          Dir. Irmãos Carvalho<br />
          [22 min. 2018. RJ.]</a></p>
        <h6>Classificação12 anos</h6>
        <h3>16h</h3>
        <p><a href="/2018/filmes/sol-alegria"><strong>Sol alegria</strong><br />
          Dir. Mariah Teixeira e Tavinho<br />
          Teixeira [90 min. 2018. PB.]</a></p>
        <h6>Classificação 18 anos</h6>
        <a name="29" id="29"></a>
        <h2>QUINTA 29</h2>
        <h3><strong>uFrJ – dEpartaMEnto dE lEtraS – Fundão</strong><br />
          12h30</h3>
        <p><a href="/2018/filmes/a-poeira-nao-quer-sair-do-esqueleto/"><strong>a poeira não quer sair do Esqueleto</strong><br />
          Dir. Daniel Santiso e Max William Morais<br />
          [21 min. 2018. RJ.]</a></p>
        <p><a href="/2018/filmes/inconsciencia/"><strong>(in)Consciência</strong><br />
          Dir. Jéferson<br />
          [18 min. 2018. RJ.]</a></p>
        <p><a href="/2018/filmes/conte-isso-aqueles-que-dizem-que-fomos-derrotados/"><strong>Conte isso àqueles que dizem que fomos derrotados</strong><br />
          Dir. Aiano Bemfca, Camila 
          Bastos, Cristiano Araújo, Pedro Maia de Brito</a></p>
        <h6>Classificação 16 anos</h6>
        <h3>16h</h3>
        <p><a href="/2018/filmes/bloqueio/"><strong>bloqueio</strong><br />
          Dir. Victória Álvares e Quentin
          Delaroche<br />
          [75 min. 2018. PE.]</a></p>
        <h6>Classificação livre </h6>
        <p>&nbsp;</p>
        
        </div>
	</section>
</main>
 
<?php get_footer(); ?>