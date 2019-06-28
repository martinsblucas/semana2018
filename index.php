<?php get_header(); ?>

<main class="container">
	<section class="row">
        <?php
		$args = array(
		'orderby' => 'date',
		'order' => 'desc',
		'category__not_in' => '44',
		'posts_per_page' => 5
		);
        $loop_index = new WP_Query($args);
		// The Loop
		if ( $loop_index->have_posts() ) {
		while ( $loop_index->have_posts() ) {
		$loop_index->the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'foto_noticia');
		$src = $thumb['0']; 
		?>
		<article class="col-sm-12 col-md-6 col-lg-4">
        <a href="<?php the_permalink(); ?>">
        	<figure class="overlay"><img src="<?php echo $src; ?>" /><div class="transparencia"></div></figure>
        	<h1 class="titulo"><?php the_title(); ?></h1>
            <span class="resumo">
            <?php if(has_excerpt()) { ?>
            <?php the_excerpt(); ?>
            <?php } else { ?>
            <p>
				<?php
				$post_index2 = $loop_index->post;
				$descrip_index = strip_tags($post_index2->post_content);
				$descrip_index_more = '';
				if (strlen($descrip_index) > 155) {
				 $descrip_index = substr($descrip_index,0,220);
				 $descrip_index_more = '...';
				}
				$descrip_index = str_replace('"', '', $descrip_index);
				$descrip_index = str_replace("'", '', $descrip_index);
				$descrip_indexwords = preg_split('/[\n\r\t ]+/', $descrip_index, -1, PREG_SPLIT_NO_EMPTY);
				array_pop($descrip_indexwords);
				$descrip_index = implode(' ', $descrip_indexwords) . $descrip_index_more;
				echo $descrip_index;
				?>
            </p>    
            <?php } ?>
            </span>
        </a>
        </article>
       	<?php
        }
		} else {
		// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
    </section>
</main>

<?php get_footer(); ?>