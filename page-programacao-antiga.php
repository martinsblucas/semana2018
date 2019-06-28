<?php
/*
Template Name: Programação por dia antiga
*/
?>
<?php get_header(); ?>
<?php
if(!empty($_GET["lang"])) { $lingua = $_GET["lang"]; } ?>
<main class="container">
	<section class="row">
    	<div class="col-0 col-lg-1"></div>
        <div class="col-12 col-lg-10">
        <h1 class="titulo"><?php the_title(); ?></h1>
		<?php
        $loop_lista_programacao = new WP_Query( "post_type=programacao&orderby=name&order=asc&showposts=99");
        if ( $loop_lista_programacao->have_posts() ) {
		while ( $loop_lista_programacao->have_posts() ) {
		$loop_lista_programacao->the_post();
		
		$link = get_post_custom_values( 'wpcf-link' );
		
		$classificacao0 = get_post_meta($post->ID, 'wpcf-classificacao-indicativa', true);
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
		
		$hora = get_post_meta($post->ID, 'wpcf-hora2', true);
		
		$dia_hora = $post->post_name;
		
		$dia21 = "21-11-01";
		$dia17 = "17-11-14";
		$dia18 = "18-11-14";
		$dia19 = "19-11-17";
		$dia20 = "20-11-14";
		$dia21 = "21-11-17";
		$dia22 = "22-11-17";
		
		if ($dia_hora == $dia21 or $dia_hora == $dia17 or $dia_hora == $dia18 or $dia_hora == $dia19 or $dia_hora == $dia20 or $dia_hora == $dia21 or $dia_hora == $dia22) {
		?>
        <div class="col-12 data">
        <h2><?php the_title(); ?></h2>
        <?php } ?>
        <!-- Bloco Data -->    
        <!-- Data -->
        <!-- Hora -->
        <div class="col-12 hora">
        <h3><?php echo $hora; ?></h3>
        <?php $post_id = get_the_ID(); ?> 
        <!-- Evento -->
        <?php
		foreach ($link as $link1)  {
			
		$slug = $link1;
		
		$loop_slug = array( 'post_type' => array('filmes', 'page'), 'name' => $slug );
	 	$loop_lista_slug = new WP_Query($loop_slug);
		if ( $loop_lista_slug->have_posts() ) {
			while ( $loop_lista_slug->have_posts() ) {
			$loop_lista_slug->the_post();
			
			$permalink= get_permalink();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
			$url = $thumb['0'];
			
			// Infos
			$direcao =  get_post_custom_values( 'wpcf-direcao' );
			$duracao = get_post_meta($post->ID, 'wpcf-duracao', true);
			$formato = get_post_meta($post->ID, 'wpcf-formato', true);
			$ano = get_post_meta($post->ID, 'wpcf-ano', true);
			$pais = get_post_custom_values( 'wpcf-pais' );
			$id = get_the_ID(); 								
		?>
            <article class="col-12 evento">
            <a href="<?php echo $permalink; ?><?php if ($lingua === "en") { echo "?lang=en"; } else {} ?>" target="_blank">
            <div class="row">
            <div class="col-12 col-md-4 thumb">
            <figure>
            <img src="<?php echo $url; ?>" />
            </figure>
            </div>
            <div class="col-12 col-md-8">
            <h4><?php the_title(); ?></h4>
            <?php if(get_post_type( get_the_ID() ) == "filmes") { ?>
            <h5>dir: <?php print_r(implode(', ', $direcao)); ?></h5>
			<?php
				$codiretor1 = get_post_meta($post->ID, 'wpcf-codiretor', true);
				$codiretor = get_post_custom_values( 'wpcf-codiretor' );
				if (!empty($codiretor1)) {
					echo "<h5>";
					if ($lingua === "en") {
						echo "codirigido por: ";
					}
					else {
						echo "codirigido por: ";
					}
					print_r(implode(', ', $codiretor));
					echo "</h5>";
				}
				else {
					// Nada
				}
			?>
			<h5><?php echo $duracao; ?>' . <?php echo $ano; ?> . <?php print_r(implode(', ', $pais)) ?></h5>
 					<?php if( '' !== get_post()->post_content ) { ?>
						<?php
                        $post = $loop_lista_slug->post;
                        $descrip = strip_tags($post->post_content);
                        $descrip_more = '';
                        if (strlen($descrip) > 270) {
                            $descrip = substr($descrip,0,270);
                        }
                        $descrip = str_replace('"', '', $descrip);
                        $descrip = str_replace("'", '', $descrip);
                        $descripwords = preg_split('/[\n\r\t ]+/', $descrip, -1, PREG_SPLIT_NO_EMPTY);
                        array_pop($descripwords);
                        $descrip = implode(' ', $descripwords);
						echo '<span class="resumo">';
                        echo "<p>".$descrip."...</p>";
						echo '</span>';
                        ?>
                        <?php } else { } ?>
            <?php } elseif(get_post_type( $post->ID ) !== "filmes") { ?>
			<p style="text-transform: none;">
            <?php the_excerpt(); ?>
			<?php } ?>
            </div>
            </div>
            </a>
            </article>
        <?php } } } ?>
        <!-- Classificação indicativa -->
        <?php if (get_post_type( $post->ID ) !== "filmes") { } else { ?>
        <h6><?php echo $classificacao; ?></h6>
        <?php } ?>
        </div>
        <?php
        $dia21_fim = "21-11-01";
		$dia17_fim = "17-11-21-30";
		$dia18_fim = "18-11-23-59";
		$dia19_fim = "19-11-21-15";
		$dia20_fim = "20-11-21-30";
		$dia21_fim = "21-11-21-30";
		$dia22_fim = "22-11-21";
		
		if ($dia_hora == $dia21_fim or $dia_hora == $dia17_fim or $dia_hora == $dia18_fim or $dia_hora == $dia19_fim or $dia_hora == $dia20_fim or $dia_hora == $dia21_fim or $dia_hora == $dia22_fim) {
		?>
        </div>
         <!-- Separador -->
        <?php } ?>
 		<?php } } ?>
        </div>
        <div class="col-0 col-lg-1"></div>
	</section>
</main>
 
<?php get_footer(); ?>