<!-- FOOTER -->
        <footer id="footer">

            <!-- FOOTER SIDEBAR -->
            <div id="outerfootersidebar">
                <div class="container">
                    <div id="footersidebar" class="row"> 

                        <div id="footcol1" class="four columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Get in touch</h2>
                                    <p>If you want to get in touch with us directly, please use the following contact details below: <br />
                                    Telp: +1 800 123 456<br />
                                    Email: <a href="mailto:mymail@domain.com">mymail@domain.com</a><br />
                                    Website: <a href="http://www.makeyoursitebetter.com">www.makeyoursitebetter.com</a></p>

                                    
                                    <ul class="sn">
                                        <li><a href="http://twitter.com" title="Twitter"><span class="icon-img twitter"></span></a></li>
                                        <li><a href="http://facebook.com" title="Facebook"><span class="icon-img facebook"></span></a></li> 
                                        <li><a href="http://pinterest.com" title="Pinterest"><span class="icon-img pinterest"></span></a></li>
                                        <li><a href="https://plus.google.com" title="Google+"><span class="icon-img google"></span></a></li>
                                        <li><a href="http://instagram.com" title="RSS"><span class="icon-img instagram"></span></a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </div>
                        <div id="footcol2" class="four columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">Popular Post</h2>
                                    <ul class="rp-widget">
                                        <li>
                                            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/content/small-img1.jpg" />
                                            <h3><a href="#">This is about our wedding event</a></h3>
                                            <span class="smalldate">June 24, 2013</span>
                                            <p>Nunc lacinia, lectus sed posuere laoreet, dui velit varius enim, id feugiat risus...</p>
                                            <span class="clear"></span>
                                        </li>
                                        <li class="last">
                                            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/content/small-img2.jpg" />
                                            <h3><a href="#">We are getting married part II</a></h3>
                                            <span class="smalldate">June 24, 2013</span>
                                            <p>Nunc lacinia, lectus sed posuere laoreet, dui velit varius enim, id feugiat risus...</p>
                                            <span class="clear"></span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="footcol3" class="four columns">
                            <ul>
                                <li class="widget-container">
                                    <h2 class="widget-title">About Us</h2>
                                    <p>Praesent luctus ligula gravida urna adipiscing rutrum. Aenean tempus fringilla nulla. Phasellus eu accumsan velit, ac mollis tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eget ipsum urna. </p>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                 
                    </div>
                </div>
            </div>
            <!-- END FOOTER SIDEBAR -->
            
        </footer>
        <!-- END FOOTER -->
        <div class="clear"></div><!-- clear float --> 
    </div><!-- end outercontainer -->
</div><!-- end bodychild -->

<!-- COPYRIGHT -->
<div id="outercopyright">
    <div class="container">
        <div id="copyright">
            Copyright © 2013 Michael&amp;Miranda. Designed by <a href="http://templatesquare.com">TemplateSquare.com</a>.
        </div>
    </div>
</div>
<!-- END COPYRIGHT -->


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js"></script>

<!-- jQuery Superfish -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/superfish.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/supersubs.js"></script>


<!-- jQuery Dropdown Mobile -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tinynav.min.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<!-- jQuery Flexslider -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
          animation: "fade",              //String: Select your animation type, "fade" or "slide"
          directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
          controlNav: false  //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        });
        
});
</script>

<?php wp_footer(); ?>
</body>
</html>
