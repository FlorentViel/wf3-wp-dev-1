<?php 
get_header();
?>

<div class="row">
    <div class="col-4">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-8">
        <?php get_template_part('partials/homepage/test'); ?>
    </div>
</div>

<?php
get_footer();
?>