<?php
get_header();
?>
<div class="hero-section">
    <?php
    echo file_get_contents(get_template_directory() . '/assets/images/Grille.svg');
    ?>
    <div class="hero-content">
        <h1 class="titre">Antoine Fabre</h1>
        <h2>Web Designer</h2>
    </div>
</div>
<div class="skills-marquee">
    <div class="skills-marquee-content">
        <p class="skill-item">Illustrator</p>
        <p class="skill-item">Photoshop</p>
        <p class="skill-item">Indesign</p>
        <p class="skill-item">Figma</p>
        <p class="skill-item">HTML</p>
        <p class="skill-item">CSS</p>
        <p class="skill-item">JS</p>
        <p class="skill-item">Wordpress</p>
        <p class="skill-item">Illustrator</p>
        <p class="skill-item">Photoshop</p>
        <p class="skill-item">Indesign</p>
        <p class="skill-item">Figma</p>
        <p class="skill-item">HTML</p>
        <p class="skill-item">CSS</p>
        <p class="skill-item">JS</p>
        <p class="skill-item">Wordpress</p>
    </div>
</div>

<div>
<div class="projects-section">
    <div class="projects-header">
        <h3 class="projects-title">Quelques Projets</h3>
        <hr class="projects-divider">
    </div>
</div>

    <div class="project-card">
        <div class="project-image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" alt="Description de l'image" class="project-image">
        </div>
    <div class="project-content">
        <h4 class="project-title">Usebike</h4>
        <p class="project-description">Usebike est un site réalisé dans le but de promouvoir le vélotaf pour la région Nord Franche Comté, il a été réalisé en groupe dans le cadre d’une mis en situation professionnelle, il nous a été demandé de créer toute l’identité visuelle du site (logo, charte graphique, site) et pour cela nous avons utiliser Illustrator, Figma et Wordpress.</p>
        <a href="https://example.com" class="project-button">En savoir plus</a>
    </div>
    </div>

    <div class="project-card">
        <div class="project-image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" alt="Description de l'image" class="project-image">
    </div>
    <div class="project-content">
        <h4 class="project-title">Logo IJF</h4>
        <p class="project-description">Pour ce travail nous devions refaire l’identité visuelle complète de la fédération international de judo, il fallait que le logo renvoi l’idée de dynamisme et qu’il représente bien les valeurs du sport.</p>
        <a href="https://example.com" class="project-button">En savoir plus</a>
    </div>
    </div>
    
    <div class="project-card">
    <div class="project-image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/example.jpg" alt="Description de l'image" class="project-image">
    </div>
    <div class="project-content">
        <h4 class="project-title">Flick</h4>
        <p class="project-description">Maquette de plateforme VOD consacrée au cinéphile, ceci est un projet en cours, vous pouvez voir la page d’accueil, il a fallu revoir complètement quelle contenue mettre en avant et comment le proposer.</p>
        <a href="https://example.com" class="project-button">En savoir plus</a>
    </div>
    </div>
    <div class="card-contact">
    <div class="card-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project.jpg" alt="Image de projet">
    </div>
    <div class="card-contact-content">
        <h5 class="card-contact-title">Une idée de Projet ?</h5>
        <p class="card-contact-text">Contacter moi pour me parler de votre projet, et peux être travailler ensemble !</p>
        <a href="https://example.com" class="contact-button">Me contacter</a>
    </div>
</div>
</div>

<?php
get_footer();
?>




