<?php
/*
Template Name: Moving
*/
?>
<?php get_header();?>
<div class="main">
    <div class="grid">
        <div class="main-border">

            <div class="label">
                <div class="label-border cf">
                    <div class="col-1-3">
                        <h3>TO:</h3>
                        <h5><?php the_field('to'); ?></h5>
                        <h3>FROM:</h3>
                        <h5><?php the_field('from'); ?></h5>
                    </div>
                    <div class="col-2-3">
                        <h3>SUBJECT:</h3>
                        <h2><?php the_field('subject'); ?></h2>
                    </div>
                </div>
            </div>

            <div class="main-content toc">
                <div class="grid cf">
                    <h1><?php the_field('title'); ?></h1>
                    <h2><?php the_field('subtitle'); ?></h2>
                    <div class="col-7-16 push-1">
                        <p>Hopkins Student Movers has successfully expanded its operations to include affordable and professional moving services for the University’s administrative and academic departments.</p>
                        <p>Should you have any questions about the services we offer do not hesitate to contact us at HopkinsMovers@gmail.com</p>
                    </div>
                    <div class="col-6-16 push-1">
                        <p>Our services include, but are not limited to:</p>
                        <ul>
                            <li>On-Campus Move In & Move-Out</li>
                            <li>Off-Campus Move In & Move-Out</li>
                            <li>Office Relocation</li>
                            <li>Furniture Pick Up and Delivery</li>
                            <li>Event Set-Up and Breakdown</li>
                        </ul>
                    </div>
                </div>
                <a href="http://hsm.jhu.edu/contact/" class="book-now"></a>
                <div class="grid cf">
                    <h2><?php the_field('pricing_title'); ?></h2>
                    <p class="col-10-16 push-3">We charge $30 per mover per hour. Customers will be charged for the full first hour of a move regardless of how long the move takes. Prices will be rounded up to the nearest quarter hour for moves greater than an hour. There is also a $45 flat rate if you need us to use a van. If a move is off campus, we charge an additional 15-30 minutes of travel time depending on how far it is. We require a van reservation for any move that is not located in the immediate area around Homewood campus. </p>
                </div>

                <div id="testimonials" class="grid">
                    <h2 class="col-1-1">Testimonials</h2>
                    <div class="col-6-16 priority-stamp">
                        <div></div>
                    </div>
                    <div class="col-10-16 testimonial">
                        <div class="testimonial-border cf">
                            <div class="testimonial-pic" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/matt.jpg);"></div>
                            <p>"HSM is extremely efficient and methodical like a good lover.  They came on a days notice right before winter storm Jonas.  I choose HSM every time."</p>
                            <h5>Matthew Tam</h5>
                            <h6>KSAS '17</h6>
                        </div>
                    </div>
                    <div class="col-10-16 testimonial">
                        <div class="testimonial-border cf">
                            <div class="testimonial-pic" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/mary.png);"></div>
                            <p>"We were extremely impressed by the students who were here for the job.  They were incredibly polite, efficient and super-easy to work with.  Thank you so much!  We were very happy customers."</p>
                            <h5>Mary Howard</h5>
                            <h6>Senior Institutional Research Coordinator, Johns Hopkins University Office of Institutional Research</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid cf">
            <div class="col-1-2 call-to-action">
                <h4><a href="moving-terms-and-conditions/">Terms and Conditions</h4>
            </div>
            <div class="col-1-2 call-to-action">
                <h4><a href="https://booknow.appointment-plus.com/419hy0x2/">Book Now</a></h4>
            </div>
        </div>

    </div>
</div>
<? get_footer(); ?>