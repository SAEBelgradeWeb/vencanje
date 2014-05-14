<?php
/*
Template Name: Contact page
*/
get_header( );
?>

<!-- BEFORE CONTENT -->
<div id="outerbeforecontent">
    <div class="container">
    	<div class="row">
        <div id="beforecontent" class="twelve columns">
            <div id="pagetitle-container">
            	<h1 class="pagetitle">Contacts</h1>
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
					<h2>Wedding Information</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/content/pic4.jpg" alt="" class="frame alignleft" />
                    <p>Nunc lacinia, lectus sed posuere laoreet, dui velit varius enim, id feugiat risus lacus posuere purus. Quisque vitae risus enim. Quisque in massa sodales, bibendum felis sed, egestas quam.</p>

					<p>Aliquam magna leo, venenatis quis sapien eget, <span class="colortext">feugiat aliquam leo</span>. Vivamus tellus justo, dapibus ac lectus non, pharetra molestie massa. Praesent ac justo quis nunc tempor tincidunt. Integer molestie malesuada nunc ut porta. Nullam ornare viverra nisi, ut sollicitudin urna dapibus nec.</p>
							
                    <div class="separator"></div>

                    <div id="contactform">
                    	<h2>Fill this form below</h2>
                    	<?php
	
							if (have_posts()) :
								while (have_posts()) : the_post();
									the_content();
								endwhile;
							endif;
						?>
                    </div>
                </section>
            </section>
        </div>
    </div>
</div>








<?php
get_footer( );
?>