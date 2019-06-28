<?php
/*
Template Name: Archive Page
*/
?>
<?php get_header(); ?>
<?php
if(!empty($_GET["lang"])) { $lingua = $_GET["lang"]; } ?>
<?php $section_id = $GLOBALS['wp_query']->post_id; ?>
<main class="container">
	<section class="row">
    	<div class="col-0 col-lg-1"></div>
        <?php
		$tax = $wp_query->get_queried_object();
		$name= $tax->name;
		if ($name == "Como Mito Desmontando, Amanhã Recomeço") {
			$orderby = "date";
		}
		else {
			$orderby = "title";	
		}
        $posts = get_posts($query_string . '&post_type=filmes&orderby='.$orderby.'&order=ASC&posts_per_page=99'); 
		$count = count($posts);
		?>
        <div class="col-12 col-lg-10">
			<h1 class="titulo"><?php $titulo= single_cat_title(); ?><?php if($count != 0) { ?> <span class="count">(<?php echo $count; ?>)</span><?php } else { } ?></h1>
            <?php
			if ($name == "Como Mito Desmontando, Amanhã Recomeço") { ?>
            <article class="col-12">
              <p>Foi entre lágrimas, noites mal dormidas, atualizações ininterruptas no feed de notícias e vícios alimentados por um terror que invadia a alma e os sonhos para esconder-se nos ossos e no inconsciente que essa programação foi finalizada. O &ldquo;mito&rdquo; no título do programa, claro, não se refere ao candidato que parte do eleitorado saudava pela &ldquo;coragem e autenticidade&rdquo; com que normalizava e propagandeava o inaceitável, mas à poesia e à arte. &ldquo;qual mito desmontado. / amanhã recomeço&rdquo; são os dois versos finais de um poema de 1945, de Carlos Drummond de Andrade: &nbsp;Elefante – reencontrado, por um feliz acaso, em um dos filmes que integra esse programa, Ventura, de Janaina Wagner. &nbsp;Um elefante fabricado com madeira, &ldquo;paina, amor e doçura&rdquo; sai às ruas em busca de amigos. Alegoria para o trabalho da arte e da poesia, disfarce necessário e desejado de um poeta em um mundo enfastiado que não crê mais em bichos nem em coisas, esse elefante volta, tarde de noite, fatigado, patas vacilantes e desfaz-se no tapete, &ldquo;qual mito desmontado&rdquo;. O poema termina com a promessa do poeta de reapresentar no dia seguinte seu mito ao mundo: &ldquo;amanhã recomeço&rdquo;.</p>
              <p>Essa disposição – possivelmente mais nonsese ou resiliente que utópica – &nbsp;para o recomeço e a ficção talvez seja uma das marcas da produção artística deste país, desde sempre sob dois humores e dois signos: o desespero e a esperança; o fim do mundo e o país do futuro.</p>
              <p>Ainda que seguindo pesquisas muito particulares, as artistas reunidas neste programa lidam com a ambiguidade e a contradição colocadas entre construção e destruição, fim e recomeço, ou começo e fim. Não por acaso, vários dos filmes abordam, em chave metafórica ou literal, o terremoto – possivelmente o fenômeno da natureza que melhor sintetiza a dobra entre destruição e refundação. Não importa sua dimensão, não importa quanto abale ou desmonte: a um terremoto sempre segue a reconstrução. Também há muitas maquetes, modelos, plantas baixas, esboços e formas esculpidas – alguns produzidos pelas artistas, outros encontrados em arquivos. Assim, em uma chave histórica, Clara Ianni toma plantas baixas da construção de Brasília e registros de obras de arte e empreende uma volta no tempo para desenterrar e encontrar as contradições ou violências silenciadas em momentos definidores da nossa modernidade e do otimismo do nosso projeto moderno; Letícia Ramos constrói maquetes para simular mundos perdidos ou nunca encontrados; Janaina Wagner é atraída pelo que há de absurdo, desperdício ou despropósito no nosso desejo construtivo; e Barbara Wagner e Benjamin de Burca, num registro talvez mais distante do trabalho das outras artistas, celebram e ostentam a dimensão artificial e construída de seus cenários e retratos.</p>
              <p>Seja construindo ou inventando mundos, seja olhando para momentos de fundação – e tão conscientes dos riscos de abalo, fissuras, ventania ou terremoto quanto da desproporção entre a energia dispendida e o resultado alcançado –, as artistas aqui reunidas fazem voto de fé na capacidade e necessidade humana de inventar, fabular, projetar e edificar. Se toda construção traz em si a marca de sua destruição, persistamos, continuemos. E a cada destruição, derrota ou terremoto, fabularemos mais uma vez, dia a dia, manhã a manhã um novo amanhã. Seguimos.</p>
            </article>
<?php } ?>
			<?php
            global $query_string;
            $loop = new WP_Query ($query_string . '&post_type=filmes&orderby='.$orderby.'&order=ASC&posts_per_page=99');
            // The Loop
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) {
                $loop->the_post();
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "thumbnail");
            $src = $thumb['0'];
            $post_id = get_the_id();
			// Infos
			$direcao =  get_post_custom_values( 'wpcf-direcao' );
			$duracao = get_post_meta($post->ID, 'wpcf-duracao', true);
			$formato = get_post_meta($post->ID, 'wpcf-formato', true);
			$ano = get_post_meta($post->ID, 'wpcf-ano', true);
			$classificacao0 = get_post_meta($post->ID, 'wpcf-classificacao-individual', true);
			$pais = get_post_custom_values( 'wpcf-pais' );
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
            <article class="col-12">
            <a href="<?php the_permalink(); ?>">
                <div class="row">
                    <figure class="thumb col-12 col-md-6">
                        <img src="<?php echo $src; ?>" />
                    </figure>
                    <div class="texto col-12 col-md-6">
                        <h2><?php the_title(); ?></h2>
                        <h3>dir: <?php print_r(implode(', ', $direcao)); ?></h3>
						<h3><?php echo $duracao; ?>' . <?php echo $ano; ?> . <?php print_r(implode(', ', $pais)) ?></h3>
                        <span class="resumo">
                        <p>
                            <?php
                            $post_loop2 = $loop->post;
                            $descrip_loop = strip_tags($post_loop2->post_content);
                            $descrip_loop_more = '';
                            if (strlen($descrip_loop) > 155) {
                             $descrip_loop = substr($descrip_loop,0,220);
                             $descrip_loop_more = '...';
                            }
                            $descrip_loop = str_replace('"', '', $descrip_loop);
                            $descrip_loop = str_replace("'", '', $descrip_loop);
                            $descrip_loopwords = preg_split('/[\n\r\t ]+/', $descrip_loop, -1, PREG_SPLIT_NO_EMPTY);
                            array_pop($descrip_loopwords);
                            $descrip_loop = implode(' ', $descrip_loopwords) . $descrip_loop_more;
                            echo $descrip_loop;
                            ?>
                        </p>    
                        </span>
                        <h3><?php if (!empty($classificacao)) { ?><?php echo $classificacao; ?><?php } else { } ?></h3>
                    </div>
                </div>
            </a>
            </article>
            <?php } } wp_reset_postdata(); ?>
        </div>
        <div class="col-0 col-lg-1"></div>
    </section>
</main>

<?php get_footer(); ?>