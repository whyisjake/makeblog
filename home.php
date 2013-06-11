<?php
/**
 * Home Page Template
 *
 * @package    makeblog
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Jake Spurlock <jspurlock@makermedia.com>
 * 
 */
make_get_header() ?>
		
	<div class="single">
	
		<div class="container">

			<div class="row">

				<div class="span8">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
					<div class="projects-masthead">
						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
					</div>
					
					<ul class="projects-meta">
						<li>
							By <?php 
							if( function_exists( 'coauthors_posts_links' ) ) {	
								coauthors_posts_links(); 
							} else { 
								the_author_posts_link(); 
							} ?>
						</li>
						<li>
							Posted <span class="blue"><?php the_time('Y/m/d \@ g:i a'); ?></span>
						</li>
						<li>
							Category <?php the_category(', '); ?>
						</li>
					</ul>
				
					<article <?php post_class(); ?>>
						
						<div class="media">
							
							<a href="<?php the_permalink(); ?>" class="pull-left">
								<?php the_post_thumbnail( 'archive-thumb', array( 'class' => 'media-object' ) ); ?>
							</a>
							
							<div class="media-body">
								<p><?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?> <a href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
							</div>
							
							
						</div>
					
					</article>

					<?php endwhile; ?>

					<?php if (function_exists('make_featured_products')) { make_featured_products(); } ?>

					<div class="comments">
						<?php comments_template(); ?>
					</div>
					
					<?php else: ?>
					
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					
					<?php endif; ?>
				</div>
				
				
				<?php get_sidebar(); ?>
					
					
			</div>

		</div>

	</div>

<?php get_footer(); ?>