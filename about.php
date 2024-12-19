<?php 
/*
Template Name: Page a propos
*/

get_header(); ?>
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
    <div class="card-apropos">
        <!-- En-tête : Titre et Ligne -->
        <div class="card-apropos-header">
            <h1 class="card-apropos-title">À propos</h1>
            <hr class="ligne-apropos">
        </div>

        <!-- Contenu principal en deux colonnes -->
        <div class="card-apropos-content-wrapper">
            <div class="card-apropos-content">
                <p class="card-apropos-text">
                Bonjour et bienvenue sur mon portfolio ! Je m'appelle Antoine Fabre, étudiant en deuxième année de BUT Métiers du Multimédia et de l'Internet (MMI) à Montbéliard. Ce parcours me permet de développer des compétences variées dans les domaines du multimédia, du web et de la communication. Mon domaine de prédilection est le web design, une discipline où je peux exprimer ma créativité tout en m'appuyant sur des bases techniques solides. Concevoir des interfaces modernes, intuitives et adaptées aux besoins des utilisateurs est un défi que j'aborde avec passion et rigueur.

Mon goût pour la création ne s'arrête pas là. En dehors de mes études, je cultive deux passions qui me définissent pleinement : le sport mécanique et le dessin. Le sport mécanique m'inspire par ses valeurs de précision, de dépassement de soi et d’innovation technique, des qualités que j'essaie d'appliquer à mes projets professionnels. Le dessin, quant à lui, est une véritable échappatoire créative. C'est à travers cette pratique que je développe mon sens artistique, en explorant les formes, les couleurs et les émotions.
                </p>
                <p class="card-apropos-text">
                Ce mélange d’intérêt pour la technologie, le design et l’expression artistique me motive à toujours aller plus loin. J'aime relever de nouveaux défis, apprendre de nouvelles compétences et collaborer avec des personnes partageant la même passion pour le design et l'innovation.

Sur ce portfolio, vous découvrirez une sélection de mes projets qui reflètent mon parcours et ma vision. Que vous soyez à la recherche d’un collaborateur pour un projet ou simplement curieux de mon travail, n’hésitez pas à me contacter. Ce sera un plaisir d’échanger avec vous et, pourquoi pas, de contribuer ensemble à vos idées !
                </p>
            </div>
            <div class="card-apropos-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" 
                     alt="Description de l'image" 
                     class="project-image">
            </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>
