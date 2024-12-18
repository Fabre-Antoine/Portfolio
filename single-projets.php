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
    <div class="card-page-contact">
        <!-- En-tête : Titre et Ligne -->
        <div class="card-apropos-header">
            <h1 class="card-apropos-title">Contact</h1>
            <hr class="ligne-apropos">
        </div>
<div class="project-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="project-header">
            <h1 class="project-title"><?php the_title(); ?></h1>
            <?php if (get_field('titre')) : ?>
                <h2 class="project-subtitle"><?php the_field('titre'); ?></h2>
            <?php endif; ?>
        </div>

        <div class="project-content">
            <div class="project-thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
            </div>

            <div class="project-description">
                <p><?php the_field('description'); ?></p>
            </div>

            <?php if (get_field('images')) : ?>
                <div class="project-gallery">
                    <?php
                    $images = get_field('images');
                    foreach ($images as $image) :
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    <?php endwhile; endif; ?>
</div>
    </div>
    </div>
<?php get_footer(); // Charge le footer du thème ?>
