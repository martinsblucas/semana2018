<?php
/*
Template Name: Página larga
*/
?>
<?php get_header(); ?>

	<main role="main" class="container">

      <section class="row">
		<?php
        global $query_string;
		$loop = new WP_Query ($query_string);
		// The Loop
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) {
			$loop->the_post();
        ?>
        <article class="col-12">
			<h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>
        <?php	}
        } else {
        // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
      </section>
    </main>
<?php get_footer(); ?>