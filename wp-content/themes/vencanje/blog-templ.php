<?php
/*
Template Name: Blog Template
*/

get_header();
?>

        <!-- BEFORE CONTENT -->
		<div id="outerbeforecontent">
            <div class="container">
            	<div class="row">
                <div id="beforecontent" class="twelve columns">
                    <div id="pagetitle-container">
                    	<h1 class="pagetitle"><?php the_title(); ?></h1>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->


        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                
                    <section id="maincontent" class="nine columns positionleft">

                            <section class="content">



			<?php 
			$args = array(
				'post_type' => 'svatovi',
				'category__not_in' => 10
				);

			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post();
				$datum = get_the_date();
				$datum_ts = strtotime($datum);
				  
				echo get_field('adresa');
				  ?>


					<article class="post">
	                    <div class="date-wrapper"> 
	                        <div class="line-date"></div>
	                        <div class="date-value"><?php echo date('d', $datum_ts); ?></div>
	                        <div class="month-value"><?php echo date('F', $datum_ts); ?></div>
	                    </div>
	                    <div class="postimg">
	                       <?php the_post_thumbnail('zablog', array(
	                       	'class' => 'frame',

	                       ) ); ?>
	                    </div>

	                    <div class="entry-content">
	                        <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                        <div class="entry-utility">
	                            Posted by <a href="#"><?php the_author( ); ?></a>
	                        </div>
	                       <?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
	                    </div>
	                   
	                    <div class="clear"></div>
	                </article>

				  <?php
				endwhile;
			endif;
			 
			// Reset Post Data
			wp_reset_postdata();

			 ?>

                                
								
                                
								<div class="wp-pagenavi">
                                	<div class="pages">Page 1 of 3</div><a class="page" href="#">1</a><span class="current"><span>2</span></span><a class="page" href="#">3</a>
                            	</div>
                            </section>
                         
                    </section>
                    
                    <?php get_sidebar() ; ?>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

<?php 

get_footer();

 ?>