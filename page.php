<?php get_header(); ?>
<!-- Content Area -->
		<div class="column small-12 medium-9 main-feed">
				
    				<!-- slide goes here --><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
			<hr>
					<!-- individual feed post goes here -->
				
<!-- // Define our WP Query Parameters -->
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
 
<!-- // Start our WP Query -->

 <?php
	                $args = array(
	                    'post_type' => 'post',
	                    'post_status' => 'publish',
	                    // 'category_name' => 'news',
	                    'orderby' => 'date',
	                    'order' => 'ASC',
	                    'posts_per_page' => 10
	                );
	                $arr_posts = new WP_Query( $args );

	                if ( $arr_posts->have_posts() ) :
	                    while ( $arr_posts->have_posts() ) :
	                        $arr_posts->the_post();
	                        ?>
	                        <div class="news-feed column small-12 medium-12">
				<div class="story-feed">
					<div class="image-feed column small-12 medium-3">
							<!-- post image goes here -->
									<?php the_post_thumbnail(); ?>
					</div>
					<div class="text-feed column small-12 medium-9">
						<div>		
							<h3 class="title-feed">
							<!-- title goes here -->
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h3>
								<p class="p-feed">
									<!-- paragraph goes here -->
									<?php the_excerpt(__('(more…)')); ?>
								</p>
						</div>
					</div>	
				</div>
			</div>


	                       
	                        <?php
	                    endwhile;
	                endif;
                ?>

					
		</div>
			<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>