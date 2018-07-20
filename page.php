<?php get_header(); ?>
<!-- Content Area -->
		<div class="column small-12 medium-9 main-feed">
				
    				<!-- slide goes here --><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
			<hr>
<ul class="single-item">
<li>
 <?php
	                $args = array(
	                    'post_type' => 'post',
	                    'post_status' => 'publish',
	                    // 'category_name' => 'carousel',
	                    'orderby' => 'date',
	                    'order' => 'DEC',
	                    'posts_per_page' => 5
	                );
	                $arr_posts = new WP_Query( $args );

	                if ( $arr_posts->have_posts() ) :
	                    while ( $arr_posts->have_posts() ) :
	                        $arr_posts->the_post();
	                        ?>
	                        <li><?php the_post_thumbnail(); ?><span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php the_excerpt(__('(more…)')); ?></span></li>
	           


	                       
	                        <?php
	                    endwhile;
	                endif;
                ?></li>
</ul>
					<!-- individual feed post goes here -->
				
<!-- // Define our WP Query Parameters -->
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
 
<!-- // Start our WP Query -->

 <ul id="news-feed">
 <?php
	                $args = array(
	                    'post_type' => 'post',
	                    'post_status' => 'publish',
	                    // 'category_name' => 'news',
	                    'orderby' => 'date',
	                    'order' => 'DEC',
	                    'posts_per_page' => 15
	                );
	                $arr_posts = new WP_Query( $args );

	                if ( $arr_posts->have_posts() ) :
	                    while ( $arr_posts->have_posts() ) :
	                        $arr_posts->the_post();
	                        ?>
	                        <li class="news-feed column small-12 medium-12">
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
			</li>



	                       
	                        <?php
	                    endwhile;
	                endif;
                ?>

				</ul>	
		</div>
			<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>