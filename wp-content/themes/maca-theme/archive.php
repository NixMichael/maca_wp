<?php get_header(); ?>

<div class="container archive-container">
    <section>
        <?php get_template_part('includes/section', 'archive'); ?>
    </section>
    <section class="post_navigation">
        <div>
            <?php previous_posts_link(); ?>
        </div>
        <div>
            <?php next_posts_link(); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>