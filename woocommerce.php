<?php
get_header();
?>
<?php
// at the very top of woocommerce.php, after get_header():
echo '<!-- WOOCOMMERCE.PHP IS RUNNING -->';?>
<main class="container mx-auto py-10" data-barba="container" data-barba-namespace="<?php echo esc_attr( sanitize_title( get_the_title() ) ); ?>">

<?php
      the_content();
?>

</main>

<?php
get_footer();