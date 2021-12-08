<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pro
 */

get_header(); ?>
	

	<div id="page-title-pro">
		<div class="width-container-pro">
			<div id="progression-studios-page-title-container">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>'  ); ?>
				<?php the_archive_description( '<h4 class="progression-sub-title">', '</h4>' ); ?>
			</div><!-- #progression-studios-page-title-container -->
			<div class="clearfix-pro"></div>
		</div><!-- close .width-container-pro -->
	</div><!-- #page-title-pro -->
	
		<div id="content-pro" class="site-content">
			<div class="width-container-pro <?php if ( get_theme_mod( 'progression_studios_blog_cat_sidebar' ) == 'left-sidebar' ) : ?> left-sidebar-pro<?php endif; ?>">
				
					<?php if(get_theme_mod( 'progression_studios_blog_cat_sidebar' ) == 'left-sidebar' || get_theme_mod( 'progression_studios_blog_cat_sidebar', 'right-sidebar' ) == 'right-sidebar' ) : ?><div id="main-container-pro"><?php endif; ?>
				
				
					<?php if ( have_posts() ) : ?>
						<div class="progression-studios-blog-index">
						
									<?php while ( have_posts() ) : the_post(); ?>
										<?php if (get_theme_mod( 'progression_studios_blog_index_layout', 'default') == 'default') : ?>
											<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
										<?php else : ?>
											<?php get_template_part( 'template-parts/content', 'overlay' ); ?>
										<?php endif; ?>
									<?php endwhile; ?>
																
						</div><!-- close .progression-studios-blog-index -->
					
					<div class="clearfix-pro"></div>
					
						<?php progression_studios_show_pagination_links_pro(); ?>
					
						<div class="clearfix-pro"></div>
					
					<?php else : ?>
					
						<div class="progression-studios-blog-index">
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						</div><!-- close .progression-masonry-margins -->
					
					<?php endif; ?>
			
				
					<?php if(get_theme_mod( 'progression_studios_blog_cat_sidebar' ) == 'left-sidebar' || get_theme_mod( 'progression_studios_blog_cat_sidebar', 'right-sidebar' ) == 'right-sidebar' ) : ?></div><!-- close #main-container-pro --><?php get_sidebar(); ?><?php endif; ?>
				
			<div class="clearfix-pro"></div>
			</div><!-- close .width-container-pro -->
		</div><!-- #content-pro -->
<?php get_footer(); ?>