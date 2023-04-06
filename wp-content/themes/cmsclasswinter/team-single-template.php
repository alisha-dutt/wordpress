<?php
/**
 * Template Name: Team Single Page Template
 * Template Post Type: post,team
 */
get_header();
?>

<main>
    <section>
        <div style="width:300px;">
         <!-- using the featured image  -->
        <?php the_post_thumbnail();  ?>
        </div>

        <div>
        <h1> <?php the_field('name');  ?></h1>
        <h2><?php the_field('title');  ?></h2>
        <p><?php the_field('bio');  ?></p>
        </div>
    </section>
    
</main>


<?php
get_footer();
?>
