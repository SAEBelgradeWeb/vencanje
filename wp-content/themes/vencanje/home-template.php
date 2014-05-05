<?php
/*
Template Name: HOmepage Template
*/

get_header();
?>


    <!-- MAIN CONTENT -->
        <div id="outermain">
        	<div class="container">
                <div class="row">
                	<section id="maincontent" class="twelve columns">
                    
                        <section class="content">
                        
                            <div class="highlight-content">
                               <h1> <?php echo bloginfo('description' ); ?></h1>
                            </div>
                        
							<div id="featured" class="row">
                            	
                            	<?php dynamic_sidebar( 'home-sidebar' ); ?>

                            </div>

                                
                           	<div class="separator"></div>
                            
                            <div class="row">

								<?php

								$args = array(
									'post_type' => 'post',
									'category_name' => 'about',
									'order' => 'ASC'
									);

								// The Query
								$the_query = new WP_Query( $args );

								// The Loop
								if ( $the_query->have_posts() ) {
						
									while ( $the_query->have_posts() ) {
										$the_query->the_post();

									?>

								<div class="one_half columns">
                                	<div class="frame10 circle">
                                	<?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="indentleft">
                                	<a href="<?php the_permalink(); ?>"> <h3 class="title"><?php the_title(); ?></h3></a>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
                                    </div>
                                </div>

									<?php
									}
								     
								} else {
									// no posts found
								}
								/* Restore original Post Data */
								wp_reset_postdata();

								?>




                                
                            </div> 
                             
                            
                        </section>
                    
                	</section>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

<?php 

get_footer();

 ?>