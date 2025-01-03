<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Portflio Antoine Fabre</title>
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
                        <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/a-propos'); ?>">A propos</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/mes_projets'); ?>">Projets</a></li>
                        <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
