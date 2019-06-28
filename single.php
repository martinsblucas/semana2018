<?php get_header(); ?>

<main class="container">
	<section class="row">
    	<div class="col-0 col-lg-1"></div>
		<?php
        global $query_string;
		$loop = new WP_Query ($query_string);
		// The Loop
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) {
			$loop->the_post();
		$tipo_post = get_post_meta($post->ID, 'wpcf-imagem-destaque', true);
		if ($tipo_post === 'media') { $tipo = "media"; $tamanho_img = "large"; }
		elseif($tipo_post === 'pequena') { $tipo = "pequena"; $tamanho_img = "medium"; }
		elseif($tipo_post === 'none') { $tipo = "none"; }
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $tamanho_img);
		$src = $thumb['0'];
		$post_id = get_the_id();
        ?>
        <article class="col-12 col-lg-10">
        	<h1><?php the_title(); ?></h1>
            <div class="row">
                <?php if ($tipo != "none") { ?><figure class="thumb <?php if($tipo==="media") { ?>col-12 <?php } elseif($tipo==="pequena") { ?> col-md-4 col-lg-3<?php } else { ?>col-0<?php } ?>"><img src="<?php echo $src; ?>" /></figure><?php } ?>
                <div class="texto col-12 <?php if($tipo==="pequena") { ?>col-md-8 col-lg-9<?php } ?>">
                <time><?php $data = get_the_date('l, j/F'); echo $data; ?></time>
                <?php the_content(); ?>
                </div>
            </div>
        </article>
        <?php } } wp_reset_postdata(); ?>
        <div class="col-0 col-lg-1"></div>
    </section>
</main>

<?php get_footer(); ?>