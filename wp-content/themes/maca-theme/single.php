<?php get_header(); ?>

<div class="container">
    <section>
        <h2><?php the_title(); ?></h2>
        
        <?php get_template_part('includes/section', 'content'); ?>
    </section>
</div>

<?php get_footer(); ?>