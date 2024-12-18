<footer>
<nav class="footer-nav">
                <div class="nav-footer-container">
                <ul class="footer-principal">
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url(); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home-icon.svg" alt="Accueil">
        </a>
    </li>
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url('/?page_id=2'); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/about-icon.svg" alt="À propos">
        </a>
    </li>
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url('/?page_id=4'); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/projects-icon.svg" alt="Projets">
        </a>
    </li>
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url('/?page_id=5'); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/contact-icon.svg" alt="Contact">
        </a>
    </li>
</ul>

                </div>
            </nav>
      </footer>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
