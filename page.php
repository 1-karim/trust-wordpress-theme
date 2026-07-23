<?php
get_header();
?>

<main data-barba="container" data-barba-namespace="<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>">

   <?php
   the_content();
   ?>

</main>

<?php
get_footer();