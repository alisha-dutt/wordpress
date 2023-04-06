<?php
/**
 * Template name: homepage version two (Advanced Custom Fields)
 * Template post type: Page
 */
get_header();
?>
<!-- adding content using advanced custom fields -->
<main>
<section class="masthead" style="background-image:url('<?php the_field( selector: "masthead_image"); ?>')">
<div>
    <h1><?php the_field( selector: "tagline"); ?>
    </h1>
</div>
</section>
<section class="acf-row-one">
    <div>
        <h2>
        <?php the_field( selector: "row_one_title"); ?>
        </h2>
    </div>
    <div>
        <?php the_field( selector: "row_one_content"); ?>
    </div>
    <div>
        <img src ="" alt="">
    </div>
</section>
</main>
<?php
get_footer();
?>