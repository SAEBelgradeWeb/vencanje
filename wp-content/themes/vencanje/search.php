<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package vencanje
 */

get_header(); ?>
<!-- MAIN CONTENT -->
<div id="outermain">
	<div class="container">
        <div class="row">
			<section id="maincontent" class="nine columns positionleft">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'vencanje' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							$post = get_post();
							$month_name = convert_month_name($post);
							// echo $month_name;

						?>
					<article class="post">
						<div class="date-wrapper"> 
	                        <div class="line-date"></div>
	                        <div class="date-value"><?php the_date('d'); ?></div>
	                        <div class="month-value"><?php echo $month_name; ?></div>
	                    </div>
	                    <div class="postimg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/content/img2.jpg" alt="" class="frame" />
                        </div>

                        <div class="entry-content">
                            <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-utility">
                                Posted by <a href="#"><?php the_author( ); ?></a>
                            </div>
                           <p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
                        </div>
                       
                        <div class="clear"></div>
					</article>


					<?php endwhile; ?>

					<?php vencanje_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>



			</section>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
