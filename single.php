<?php get_header(); ?>
<div class="column small-12 medium-9 main-feed">
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>

<?php endwhile; endif; ?>

</section>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>