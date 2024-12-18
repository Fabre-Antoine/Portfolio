<?php
get_header(); // Charge le header du thème
?>

<div class="archive-projets-container">
    <h1 class="archive-projets-title">Nos Projets</h1>

    <?php if (have_posts()) : ?>
        <div class="projects-grid">
            <?php while (have_posts()) : the_post(); ?>
                <div class="project-card">
                    <!-- Image à la une -->
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'project-thumbnail']); ?>
                        </a>
                    <?php endif; ?>

                    <!-- Titre du projet -->
                    <h2 class="project-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <!-- Extrait ou description -->
                    <div class="project-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <!-- Lien vers le projet -->
                    <a href="<?php the_permalink(); ?>" class="project-link">Voir le projet</a>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
    <?php else : ?>
        <p>Aucun projet trouvé.</p>
    <?php endif; ?>
</div>

<?php get_footer(); // Charge le footer du thème ?>
