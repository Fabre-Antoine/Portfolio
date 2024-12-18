<?php
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

        <!-- Contenu principal organisé en deux colonnes -->
        <div class="card-projets-content-wrapper">
            <!-- Colonne gauche -->
            <div class="card-projets-content">
                <?php if (get_field('description')) : ?>
                    <p><?php the_field('description'); ?></p>
                <?php endif; ?>
                <h2>Compétences</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos--figma 1.svg" alt="Description de l'image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos--wordpress-icon 1.svg" alt="Description de l'image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos--adobe-illustrator 1.svg" alt="Description de l'image">
            </div>

            <!-- Colonne droite -->
            <div class="liste-images">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/usebike1.webp" alt="Description de l'image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Usebike_2.webp" alt="Description de l'image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/UseBike3.webp" alt="Description de l'image">
            </div>
        </div>
    </div>
</div>
<?php get_footer(); // Charge le footer du thème ?>
