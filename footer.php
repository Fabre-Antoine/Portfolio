<footer>
<nav class="footer-nav">
                <div class="nav-footer-container">
                <ul class="footer-principal">
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url(); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/x_logo.svg" alt="Accueil">
        </a>
    </li>
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url('/?page_id=2'); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logos--linkedin-icon 1.svg" alt="À propos">
        </a>
    </li>
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url('/?page_id=4'); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/ri_instagram-line.svg" alt="Projets">
        </a>
    </li>
    <li class="footer-item">
        <a class="footer-link" href="<?php echo home_url('/?page_id=5'); ?>">
            <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/entypo-social--behance 1.svg" alt="Contact">
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
