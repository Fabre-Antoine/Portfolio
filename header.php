<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="logo-container">
    <?php echo file_get_contents(get_template_directory() . '/assets/images/Logo.svg'); ?>
    </div>

  <div class="site-wrap">
        <header class="menu-header">
            <nav class="menu-nav">
                <div class="nav-container">
                    <ul class="menu-principal">
                        <li class="menu-item"><a class="menu-link" href="<?php echo home_url(); ?>">Accueil</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/'); ?>">A propos</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/?page_id=4'); ?>">Projets</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/?page_id=5'); ?>">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
