<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content='IE=9' http-equiv='X-UA-Compatible'/>
	<meta content='IE=EmulateIE7' http-equiv='X-UA-Compatible'/>
    
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index, follow" />
    <META NAME="description" CONTENT="<?php $page_id = $post->post_name; if(is_home() or $page_id == "sobre") { ?><?php bloginfo("description") ?><?php } elseif(is_single()) { ?><?php
    $post = $wp_query->post;
    $descrip = strip_tags($post->post_content);
    $descrip_more = '';
    if (strlen($descrip) > 155) {
        $descrip = substr($descrip,0,400);
        $descrip_more = ' ...';
    }
    $descrip = str_replace('"', '', $descrip);
    $descrip = str_replace("'", '', $descrip);
    $descripwords = preg_split('/[\n\r\t ]+/', $descrip, -1, PREG_SPLIT_NO_EMPTY);
    array_pop($descripwords);
    $descrip = implode(' ', $descripwords) . $descrip_more;
    echo $descrip;
    ?><?php } else { ?><?php bloginfo("description") ?><?php } ?>">
    <META NAME="keywords" CONTENT="Festival, Cinema, Produção independente, Curta-metragens, Longa-metragens<?php if(is_single()) { ?><?php $cats = get_the_category($post->ID); if ($cats) { foreach($cats as $cat) { $categoria = strtolower($cat->name); echo ", ".$categoria; } } ?><?php } ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" charset="<?php bloginfo('charset'); ?>" />
    
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>"/>
    <meta property="og:image" content="<?php if (is_home () or is_page()) { ?><?php bloginfo('template_directory'); ?>/img/facebook_share.png?v=2<?php } elseif (has_post_thumbnail()) { ?><?php $thumb_grande = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); $url_grande = $thumb_grande['0']; echo $url_grande; ?><?php } else { ?><?php bloginfo('template_directory'); ?>/img/facebook_share.png?v=2<?php } ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="<?php $page_id = $post->post_name; if(is_home() or $page_id == "sobre") { ?><?php bloginfo("description") ?><?php } elseif(is_single()) { ?><?php
    $post = $wp_query->post;
    $descrip = strip_tags($post->post_content);
    $descrip_more = '';
    if (strlen($descrip) > 155) {
        $descrip = substr($descrip,0,400);
        $descrip_more = ' ...';
    }
    $descrip = str_replace('"', '', $descrip);
    $descrip = str_replace("'", '', $descrip);
    $descripwords = preg_split('/[\n\r\t ]+/', $descrip, -1, PREG_SPLIT_NO_EMPTY);
    array_pop($descripwords);
    $descrip = implode(' ', $descripwords) . $descrip_more;
    echo $descrip;
    ?><?php } else { ?><?php bloginfo("description") ?><?php } ?>"/>
    <meta property="og:type" content="<?php if (is_single()) { ?>article<?php } else { ?>website<?php } ?>"/>
    <link rel="canonical" href="<?php bloginfo("url"); ?>" />
    <meta property="fb:app_id" content="353265085217538" />
    <!-- Metas do Face -->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Fonte Open Sans -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fontes/awesome/css/all.css?v=2">
    <!-- Fonte Awesome -->
    
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-16.png" sizes="16x16">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-32.png" sizes="32x32">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-48.png" sizes="48x48">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-64.png" sizes="64x64">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/fav/favicon-128.png" sizes="128x128">
    <link rel="image_src" type="image/jpeg" href="img_path" />
    <!-- Favicons -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/colorbox/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/colorbox/jquery.colorbox.js?v=2"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/colorbox/example1/colorbox.css">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66904613-4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-66904613-4');
    </script>
    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <?php wp_head(); ?>

  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  </head>
  
  <body <?php body_class(); ?>>

    <main class="container-fluid banner">
    	<div class="row">
            <section class="col-12">
                <figure class="d-none d-md-block"><a href="<?php bloginfo ('url'); ?>"><img src="<?php bloginfo ('template_directory') ?>/img/topo.png?v=3" /></a></figure>
                <figure class="d-block d-md-none d-lg-none d-xl-none"><a href="<?php bloginfo ('url'); ?>"><img src="<?php bloginfo ('template_directory') ?>/img/topo_m.png?v=2" /></a></figure>
            </section>
        </div>
    </main>
    <div class="container-fluid sticky-top menu">
        <main class="container" id="header">
        	<nav class="navbar navbar-expand-md" role="navigation">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"></button>
                <?php
                wp_nav_menu( array(
                'theme_location'    => 'primary',
                'menu' 				=> 'menu-temporario',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                            ?>
                <div class="redes">
                <a href="https://www.facebook.com/semanafestival/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:semana@semanadosrealizadores.com.br"><i class="fas fa-at"></i></a>
                </div>
        	</nav>
    	</main>
    </div>