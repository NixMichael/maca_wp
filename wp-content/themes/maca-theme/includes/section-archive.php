<?php if (have_posts()): while(have_posts()): the_post(); ?>

    <div class="post-preview">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>

        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>

<?php endwhile; else: endif; ?>