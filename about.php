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
                Lorem ipsum dolor sit amet consectetur. Massa interdum ut rhoncus nisl commodo cras. Tempus eget vitae ut tellus ullamcorper eget. Dictum tortor non platea sagittis nisi quis semper volutpat elit. Tempor lacus et vitae risus. Volutpat quis ut mauris velit.
                Libero dapibus adipiscing dolor odio luctus quis ut donec in. Senectus eget maecenas ac aliquam eu praesent turpis vel. Felis purus ullamcorper nunc aenean pulvinar sed. Faucibus ultricies non netus nulla. Massa proin id ullamcorper viverra odio elementum. Justo consequat ac ullamcorper tempor lobortis.
                </p>
                <p class="card-apropos-text">
                Imperdiet gravida urna turpis mauris. Nec tempor risus urna dolor faucibus morbi pharetra. Cras sed cursus lorem aliquet fringilla. Netus nunc et proin egestas lacus. Auctor massa sapien at diam sed facilisis. Nec tincidunt tincidunt aliquet nunc. A viverra fusce integer erat egestas nunc nunc lacus non. Non nascetur cras viverra mauris massa accumsan tellus id erat. Nunc nunc tellus purus in blandit elit cras tristique felis. Non ultrices non ac ut dictum vitae magna vel. Volutpat dictum quisque sagittis faucibus egestas semper in. Ipsum eu urna lacus tellus in.
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
