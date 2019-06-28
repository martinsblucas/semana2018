<?php get_header(); ?>
<?php
if(!empty($_GET["lang"])) { $lingua = $_GET["lang"]; } ?>
<main class="container">
<?php
global $query_string;
$loop = new WP_Query ($query_string);
// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
	$loop->the_post();
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "foto_filme_grande");
	$src = $thumb['0'];
	$thumb_src2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "foto_noticia");
	$src2 = $thumb_src2['0'];
	$post_id = get_the_id();
?>
<?php
// Infos
$direcao =  get_post_custom_values( 'wpcf-direcao' );
if (!empty(get_post_meta($post->ID, 'wpcf-codiretor', true))) {
$codiretor = get_post_custom_values( 'wpcf-codiretor' );
}
$duracao = get_post_meta($post->ID, 'wpcf-duracao', true);
$formato = get_post_meta($post->ID, 'wpcf-formato', true);
$ano = get_post_meta($post->ID, 'wpcf-ano', true);
$pais = get_post_custom_values( 'wpcf-pais' );
$classificacao0 = get_post_meta($post->ID, 'wpcf-classificacao-individual', true);
if (empty($classificacao0)) {
	if ($lingua === "en") { 
		$classificacao = "Rating free";
	} else {
		 $classificacao = "Classificação livre";
	}
	} else {
		if ($lingua === "en") { 
		$classificacao = "Rating $classificacao0 years";
	} else {
		 $classificacao = "Classificação $classificacao0 anos";
	}
}
?>
	<section class="row">
        
        <div class="col-12 header">
        <figure class="d-none d-md-block"><img src="<?php echo $src; ?>" /></figure>
        <figure class="d-block d-md-none d-lg-none d-xl-none"><img src="<?php echo $src2; ?>" /></figure>
        <h1><?php the_title(); ?></h1>
		<h2>Dir: <?php if ($direcao) { print_r(implode(', ', $direcao)); } ?></h2>
		<?php
		if (!empty($codiretor)) {
			echo "<h2>";
			if ($lingua === "en") {
				echo "Codirigido por: ";
			}
			else {
				echo "Codirigido por: ";
			}
			print_r(implode(', ', $codiretor));
			echo "</h2>";
		}
		else { } ?>
        <h2><?php echo $duracao; ?>' . <?php echo $ano; ?> . <?php print_r(implode('/', $pais)) ?></h2>
        <h2><?php the_terms( $post->ID, 'mostra', 'Mostra: ', ', ' ); ?></h2>
        </div>
        
	</section>
        
	<section class="row">
        
        <div class="col-12 col-md-8 col-lg-9 sinopse">
        <h3>Sinopse</h3>
        <?php the_content(); ?>
		
		<p style="font-size: 13px; text-transform: uppercase;"><?php echo $classificacao; ?>
		<?php 
			if (!empty(get_post_meta($post->ID, 'wpcf-data-2015', true))) {
				$data = get_post_custom_values( 'wpcf-data-2015' );
		?>
        <br /><br />
        <b>Exibição</b><br />
        	<?php print_r(implode('<br />', $data)); ?>
        <?php } ?><br />
<a href="/2018/programacao-por-dia" style="text-decoration: underline;">Confira a programação completa</a>
        </p>
        
        <?php
			if (!empty(get_post_meta($post->ID, 'wpcf-companhia-produtora', true))) {
				$companhia_produtora = get_post_custom_values( 'wpcf-companhia-produtora' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-producao-executiva', true))) {
				$producao_executiva = get_post_custom_values( 'wpcf-producao-executiva' );
			}
			else { }
			
			if (!empty(get_post_meta($post->ID, 'wpcf-producao', true))) {
				$producao = get_post_custom_values( 'wpcf-producao' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-co-producao', true))) {
				$coproducao = get_post_custom_values( 'wpcf-co-producao' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-produtora-associada', true))) {
				$associada = get_post_custom_values( 'wpcf-produtora-associada' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-roteiro', true))) {
				$roteiro = get_post_custom_values( 'wpcf-roteiro' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-fotografia', true))) {
				$fotografia = get_post_custom_values( 'wpcf-fotografia' );
			}
			else {
				$fotografia = false;
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-sd-e-foley', true))) {
				$sd_e_foley = get_post_custom_values( 'wpcf-sd-e-foley' );
			}
			else {
				$sd_e_foley = false;
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-execucao-de-video-audio', true))) {
				$execucao_audio_video = get_post_custom_values( 'wpcf-execucao-de-video-audio' );
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-implementacao-do-site', true))) {
				$implementacao_site = get_post_custom_values( 'wpcf-implementacao-do-site' );
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-som', true))) {
				$som = get_post_custom_values( 'wpcf-som' );
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-musicas', true))) {
				$musicas = get_post_custom_values( 'wpcf-musicas' );
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-voz', true))) {
				$voz = get_post_custom_values( 'wpcf-voz' );
			}
			else {
				$voz = false;
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-direcao-de-arte', true))) {
				$direcao_de_arte = get_post_custom_values( 'wpcf-direcao-de-arte' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-figurino', true))) {
				$figurino = get_post_custom_values( 'wpcf-figurino' );
			}
			
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-montagem', true))) {
				$montagem = get_post_custom_values( 'wpcf-montagem' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-edicao-de-som', true))) {
				$edicao_de_som = get_post_custom_values( 'wpcf-edicao-de-som' );
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-mixagem', true))) {
				$mixagem = get_post_custom_values( 'wpcf-mixagem' );
			}
			if (!empty(get_post_meta($post->ID, 'wpcf-design', true))) {
				$design = get_post_custom_values( 'wpcf-design' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-trilha-sonora', true))) {
				$trilha_sonora = get_post_custom_values( 'wpcf-trilha-sonora' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-concessao-do-uso-da-cancao', true))) {
				$concessao_cancao = get_post_custom_values( 'wpcf-concessao-do-uso-da-cancao' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-efeitos-especiais', true))) {
				$efeitos_especiais = get_post_custom_values( 'wpcf-efeitos_especiais' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-animador', true))) {
				$animador = get_post_custom_values( 'wpcf-animador' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-elenco', true))) {
				$elenco = get_post_custom_values( 'wpcf-elenco' );
			}
			else { }
			if (!empty(get_post_meta($post->ID, 'wpcf-exibicoes-premios', true))) {
				$premios_2015 = get_post_custom_values( 'wpcf-exibicoes-premios' );
			}
			else { }
			
			if (!empty(get_post_meta($post->ID, 'wpcf-contato', true))) {
				$contato = get_post_custom_values( 'wpcf-contato' );
			}
			else { }
			
			?>  
           	<?php
			if (!empty($companhia_produtora) or !empty($producao_executiva) or !empty($producao) or !empty($roteiro) or !empty($fotografia) or !empty($sd_e_foley) or !empty($som) or !empty($musicas) or !empty($execucao_audio_video) or !empty($implementacao_site) or !empty($direcao_de_arte) or !empty($figurino) or !empty($montagem) or !empty($edicao_de_som)  or !empty($mixagem) or !empty($trilha_sonora) or !empty($concessao_cancao) or !empty($elenco) or !empty($premios_2015)) { ?>
            <h3 style="padding: 20px 0 15px 0;">
			<?php if ($lingua === "en") { ?>
            	Credits
            <?php } else { ?>
            	Ficha técnica
            <?php } ?>
            </h3>
            <?php } ?>
            <p>           	
			<?php
				if (!empty($companhia_produtora)) {
					print_r(implode(', ', $companhia_produtora));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Production company";
					}
					else {
						echo "/ Companhia produtora";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else {
					// Nada
				}
			?>
            
            <?php
				if (!empty($producao_executiva)) {
					print_r(implode(', ', $producao_executiva));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Excutive producer";
					}
					else {
						echo "/ Produção executiva";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($producao)) {
					print_r(implode(', ', $producao));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Producer";
					}
					else {
						echo "/ Produção";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($coproducao)) {
					print_r(implode(', ', $coproducao));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Co-produção";
					}
					else {
						echo "/ Co-produção";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($associada)) {
					print_r(implode(', ', $associada));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Produtora Associada";
					}
					else {
						echo "/ Produtora Associada";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($roteiro)) {
					print_r(implode(', ', $roteiro));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Script";
					}
					else {
						echo "/ Roteiro";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($fotografia)) {
					print_r(implode(', ', $fotografia));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Cinematography";
					}
					else {
						echo "/ Fotografia";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($sd_e_foley)) {
					print_r(implode(', ', $sd_e_foley));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ SD e Foley";
					}
					else {
						echo "/ SD e Foley";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
                        
            <?php
				if (!empty($som)) {
					print_r(implode(', ', $som));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Sound";
					}
					else {
						echo "/ Som";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($musicas)) {
					print_r(implode(', ', $musicas));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Music";
					}
					else {
						echo "/ Músicas";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($execucao_audio_video)) {
					print_r(implode(', ', $execucao_audio_video));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Audio/video execution";
					}
					else {
						echo "/ Execução de vídeo/áudio";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($implementacao_site)) {
					print_r(implode(', ', $implementacao_site));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Website implementation";
					}
					else {
						echo "/ Implementação do site";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($voz)) {
					print_r(implode(', ', $voz));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Voz de";
					}
					else {
						echo "/ Voz de";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($direcao_de_arte)) {
					print_r(implode(', ', $direcao_de_arte));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Art direction";
					}
					else {
						echo "/ Direção de arte";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($figurino)) {
					print_r(implode(', ', $figurino));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Costume designer";
					}
					else {
						echo "/ Figurino";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if ($slug_filme == "soledad") {
					echo "<strong>Caracterização e Maquiagem: </strong>";
					echo "Tayce Vale";
					echo "<br />";
				}
				else {}
			?>
                        
            <?php
				if (!empty($montagem)) {
					print_r(implode(', ', $montagem));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Editor";
					}
					else {
						echo "/ Montagem";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($edicao_de_som)) {
					print_r(implode(', ', $edicao_de_som));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Sound designer";
					}
					else {
						echo "/ Edição de som";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>

            <?php
				if (!empty($mixagem)) {
					print_r(implode(', ', $mixagem));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Mixagem";
					}
					else {
						echo "/ Mixagem";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($design)) {
					print_r(implode(', ', $design));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Design";
					}
					else {
						echo "/ Design";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($trilha_sonora)) {
					print_r(implode(', ', $trilha_sonora));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Music";
					}
					else {
						echo "/ Trilha sonora";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($concessao_cancao)) {
					print_r(implode(', ', $concessao_cancao));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Copyright permission for the song";
					}
					else {
						echo "/ Concessão do uso da canção";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            
            <?php
				if (!empty($elenco)) {
					print_r(implode(', ', $elenco));
					echo "<br />";
					echo "<strong>";
					if ($lingua === "en") {
						echo "/ Cast";
					}
					else {
						echo "/ Elenco";
					}
					echo "</strong>";
					echo "<br /><br />";
				}
				else { // Nada
				}
			?>
            </p>
            <?php if (!empty($premios_2015)) { ?>
				<?php if ($lingua === "en") { ?>    
                  <h3>Festivals and Awards</h3>
                <?php } else { ?>
                  <h3>Festivais e Prêmios</h3>
                <?php } ?>
                <ul><li>
                <?php
				if (get_post_meta($post->ID, 'wpcf-exibicoes-premios', true) == "Estreia em festivais") {
					if ($lingua === "en") {
						echo "World Première";
					}
					else {
						echo "Estreia em festivais";
					}
				}
				else {
					print_r(implode('</li><li>', $premios_2015));
				}
				?>
                </li></ul>
                <?php } else { } ?>
                
                <?php
				if (!empty($contato)) {
					echo "<p style='margin-top: 30px;'>";
					print_r(implode('<br />', $contato));
					echo "<br />";
					if ($lingua === "en") {
						echo "/ CONTACT";
					}
					else {
						echo "/ CONTATO";
					}
					echo "</p>";
				}
				else { // Nada
				}
			?>
        </div>
        
        <div class="col-12 col-md-4 col-lg-3 diretor">
        <?php 
		if(has_term( "retrospectiva-andre-novais-oliveira", "mostra", $post->ID )) {
			$biofilmografia = '<p>André Novais de Oliveira nasceu em 1984 em Contagem, Minas Gerais. É diretor, produtor executivo, roteirista. Sócio-fundador da Filmes de Plástico, produtora audiovisual de Contagem (MG), criada em 2009, em parceria com Gabriel e Maurílio Martins e Thiago Macedo Correia. Graduado em história pela PUC-Minas e formado em cinema pela Escola Livre de Cinema, faz pesquisas sobre história do cinema desde 2006. É diretor de filmes como <em>Fantasmas</em> (2011), <em>Ela volta na quinta</em> (2014) e <em>Quintal</em> (2015). A 10a Semana de cinema tem o prazer de exibir uma retrospectiva de seu trabalho, incluindo seu mais novo longa, <em>Temporada</em>, vencedor do prêmio de melhor filme no último Festival de Brasília.</p>
<p style="text-align: left;"><strong>FILMOGRAFIA</strong></p>
<p style="text-align: left;"><strong>Uma homenagem a Aluízio Neto (2004)</strong></p>
<p style="text-align: left;"><strong><a href="/2018/filmes/fantasmas">Fantasmas (2011)</a><br />
  </strong>- Melhor filme experimental e menção honrosa do júri jovem l Curta Cinema 2011<br />
  - Melhor filme e melhor edição l Janela Internacional de Cinema do Recife 2011<br />
- Melhor filme l Panorama Internacional Coisa de Cinema 2011</p>
<p style="text-align: left;"><strong>Estado de sítio (2011) - </strong>Codirigido com Gabriel Martins, Flávio C. von Sperling, João Toledo, Leonardo Amaral, Leo Pyrata, Maurílio Martins e Samuel Marotta. </p>
<p style="text-align: left;"><strong><a href="/2018/filmes/pouco-mais-de-um-mes/">Pouco mais de um mês (2012)</a><br />
  </strong>- Menção Especial l Quinzena dos Realizadores do Festival de Cannes 2012<br />
- Menção Especial l IndieLisboa 2012</p>
<p style="text-align: left;"><strong><a href="/2018/filmes/domingo">Domingo (2013)</a></strong></p>
<p style="text-align: left;"><strong><a href="/2018/filmes/ela-volta-na-quinta">Ela volta na quinta (2014)</a><br />
  </strong>- Melhor filme na Semana dos Realizadores 2014<br />
  - Grande Prêmio l IndieLisboa 2014<br />
  - Prêmio Especial do Juri l BAFICI 2014<br />
- Melhor atriz coadjuvante e ator coadjuvante l Festival de Brasília 2014 </p>
<p style="text-align: left;"><strong><a href="/2018/filmes/quintal">Quintal (2015)</a><br />
  </strong>- Melhor curta, atriz e roteiro l Festival de Brasília 2015<br />
  - Filme de abertura l Semana dos Realizadores 2015<br />
- Quinzena dos Realizadores do Festival de Cannes 2015</p>
<p style="text-align: left;"><strong><a href="/2018/filmes/temporada">Temporada (2018)</a><br />
  </strong>- Melhor filme, atriz, ator coadjuvante, fotografia e direção de arte l Festival de Brasília 2018<br />
- Festival de Locarno &nbsp;2018</p>';
		}
		else {
			$biofilmografia = get_post_meta($post->ID, 'wpcf-biofilmografia', true);
		}
		$foto_diretor = get_post_meta($post->ID, 'wpcf-foto-do-diretor', true);
		$ext = ".".pathinfo($foto_diretor, PATHINFO_EXTENSION);
		if(has_term( "retrospectiva-andre-novais-oliveira", "mostra", $post->ID )) {
			$diretor_img_url = "http://www.semana.art.br/2018/wp-content/uploads/2018/11/andre-novais-oliveira-300x300";
			$ext= ".jpg";
			
		}
		else {
		$diretor_img_url = str_replace($ext."","-300x300",$foto_diretor);
		}
		?>
        <?php if (!empty($diretor_img_url)) {
		?>
        <figure class="foto-diretor">
        <img src="<?php echo $diretor_img_url; ?><?php echo $ext; ?>" />
        </figure>
        <?php } ?>
        <h3><?php if ($direcao) { print_r(implode(', ', $direcao)); } ?></h3>
		<?php echo $biofilmografia; ?>
        </div>
        
	</section>
<?php } } wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>