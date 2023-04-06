<?php
/**
 * Template name: alisha home assignment one (no plugin)
 * Template post type: Page
 */
get_header();
?>
<!-- now we add our content -->
<!-- if we are just using the default edigtor we need to create a loop to display all the pages content -->
<main>
    <?php
    if(have_posts()):
        while(have_posts()) :   the_post();
        the_content();
    endwhile;
    else:
        echo "<p>Sorry, no posts are found </p>";
endif;
    ?>
</main>
<?php
get_footer();
?>