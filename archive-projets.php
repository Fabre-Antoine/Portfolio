<?php 
/*
Template Name: archive-projets
*/
get_header(); // Charge le header du thème
?>
<div class="svg-container">
    <!-- SVG supérieur gauche -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Color diffuse-1.svg" 
         alt="SVG décoratif supérieur gauche" 
         class="svg-top-left">

    <!-- SVG inférieur droit -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Color diffuse.svg" 
         alt="SVG décoratif inférieur droit" 
         class="svg-bottom-right">

    <!-- Carte principale -->
    <div class="card-projets">
        <!-- En-tête : Titre et Ligne -->
        <div class="card-projets-header">
            <h1 class="card-projets-title"><?php the_title(); ?></h1>
            <hr class="ligne-projets">
        </div>
        <div class="archive-projets-grid">
        <!-- Card 1 -->
        <div class="archive-projets-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projet1.jpg" alt="Projet 1" class="archive-projets-image">
            <h2 class="archive-projets-card-title">Titre du Projet 1</h2>
            <a href="https://example.com/projet1" class="archive-projets-button">Voir le projet</a>
        </div>

        <!-- Card 2 -->
        <div class="archive-projets-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projet2.jpg" alt="Projet 2" class="archive-projets-image">
            <h2 class="archive-projets-card-title">Titre du Projet 2</h2>
            <a href="https://example.com/projet2" class="archive-projets-button">Voir le projet</a>
        </div>

        <!-- Card 3 -->
        <div class="archive-projets-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projet3.jpg" alt="Projet 3" class="archive-projets-image">
            <h2 class="archive-projets-card-title">Titre du Projet 3</h2>
            <a href="https://example.com/projet3" class="archive-projets-button">Voir le projet</a>
        </div>

        <!-- Card 4 -->
        <div class="archive-projets-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projet4.jpg" alt="Projet 4" class="archive-projets-image">
            <h2 class="archive-projets-card-title">Titre du Projet 4</h2>
            <a href="https://example.com/projet4" class="archive-projets-button">Voir le projet</a>
        </div>
    </div>
</div>
<?php get_footer(); // Charge le footer du thème ?>
