<?php
/*
Template Name: Archive Page
*/
?>
<?php get_header(); ?>
<?php $section_id = $GLOBALS['wp_query']->post_id; ?>
<main class="container">
	<section class="row">
    	<div class="col-0 col-lg-1"></div>
        <?php
        $posts = get_posts($query_string . '&orderby=name&order=ASC&posts_per_page=99'); 
		$count = count($posts);
		?>
        <div class="col-12 col-lg-10">
			<h1 class="titulo">Programação por filme<?php if($count != 0) { ?> <span class="count">(<?php echo $count; ?>)</span><?php } else { } ?></h1>
			<?php
            global $query_string;
            $loop = new WP_Query ($query_string . '&orderby=name&order=ASC&posts_per_page=99');
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
						 $classificacao = "Classificação livre";
					} else {
						 $classificacao = "Classificação $classificacao0 anos";
					}
			$mostra = wp_get_post_terms($post->ID, 'mostra', array("fields" => "names"));
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
                        <h3>Mostra: <?php echo $mostra[0]; ?></h3>
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