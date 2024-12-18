<?php 
/*
Template Name: Page Contact
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
    <div class="card-page-contact">
        <!-- En-tête : Titre et Ligne -->
        <div class="card-apropos-header">
            <h1 class="card-apropos-title">Contact</h1>
            <hr class="ligne-apropos">
        </div>
        <div class="contact-container">
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" class="contact-form">
        <!-- Champ Nom -->
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control" required placeholder="Entrez votre nom">
        </div>

        <!-- Champ Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required placeholder="Entrez votre email">
        </div>

        <!-- Champ Sujet -->
        <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Entrez le sujet">
        </div>

        <!-- Champ Message -->
        <div class="form-group">
            <label for="message">Votre message</label>
            <textarea name="message" id="message" class="form-control" rows="6" required placeholder="Entrez votre message"></textarea>
        </div>

        <!-- Bouton Envoyer -->
        <div class="form-group">
            <button type="submit" name="submit" class="contact-submit">Envoyer</button>
        </div>
    </form>

    <?php
    // Traitement du formulaire
    if (isset($_POST['submit'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Adresse email d'envoi
        $to = get_option('admin_email'); // Envoie à l'email administrateur WordPress
        $headers = "From: $name <$email>";

        // Envoi de l'email
        if (wp_mail($to, $subject, $message, $headers)) {
            echo '<p class="contact-success">Merci pour votre message. Nous vous répondrons sous peu.</p>';
        } else {
            echo '<p class="contact-error">Une erreur est survenue. Veuillez réessayer.</p>';
        }
    }
    ?>
</div>
    </div>
    </div>
<?php get_footer(); ?>
