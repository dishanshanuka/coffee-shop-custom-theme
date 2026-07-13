<?php get_header(); ?>

<main class="py-20 px-12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="text-4xl font-bold mb-6"><?php the_title(); ?></h1>
        <div class="prose">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>