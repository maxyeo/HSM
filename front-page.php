<?php get_header();?>

<div id="light" class="out">
    <div id="light-content" class="testimonial">
        <div class="testimonial-border cf">
            <i id="light-exit" class="fa fa-times-circle"></i>
            <div class="col-1-3">
                <div id="light-image" style="background-image: url(<?php the_field('popup_image'); ?>);"></div>
            </div>
            <div class="col-2-3">
                <?php the_field('popup_content'); ?>
                <div id="light-cta">
                    <a href="<?php the_field('popup_link_1'); ?>"><?php the_field('popup_link_name_1'); ?></a>
                    <a href="<?php the_field('popup_link_2'); ?>"><?php the_field('popup_link_name_2'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-wrapper">
    <div class="grid">

        <div class="label">
            <div class="label-border cf">
                <div class="col-1-4">
                    <h3>TO:</h3>
                    <h5><?php the_field('to'); ?></h5>
                    <h3>FROM:</h3>
                    <h5><?php the_field('from'); ?></h5>
                </div>
                <div class="col-3-4">
                    <h3>SUBJECT:</h3>
                    <h2><?php the_field('subject'); ?></h2>
                </div>
            </div>
        </div>

        <div id="services">
            <div class="service cf">
                <div class="service-icon" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/icon_storage.png)"></div>
                <div class="service-text">
                    <h4>SUMMER STORAGE</h4>
                    <p>
                        Are you dreading the hassle of finding summer storage?  Don’t.  Hopkins Student Movers (HSM) provides a reliable and cost-effective storage solution for Johns Hopkins University students.  Not only will HSM store your stuff in a climate-controlled facility over the summer
                    </p>
                    <div class="service-links">
                        <a href="https://booknow.appointment-plus.com/419hy0x2/" class="book-now"></a>
                        <a href="storage/">
                            <div class="testimonial">
                                <div class="testimonial-border cf">
                                    <p>Learn More</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="service cf right">
                <div class="service-icon" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/icon_move_office.png)"></div>
                <div class="service-text">
                    <h4>FACULTY MOVES</h4>
                    <p>
                        Do you find yourself needing help reorganizing your office? E-mail us to schedule an appointment for a team of 2 or more Hopkins Movers to come to your office on Homewood campus at a time convenient for you. Our movers come with tools to help you move, reposition, and if needed, disassemble furniture around your office. Schedule your appointment today!
                    </p>
                    <div class="service-links">
                        <a href="/contact" class="book-now green"></a>
                        <a href="moving/">
                            <div class="testimonial">
                                <div class="testimonial-border cf">
                                    <p>Learn More</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="service cf">
                <div class="service-icon" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/icon_move_offcampus.png)"></div>
                <div class="service-text">
                    <h4>OFF-CAMPUS MOVING</h4>
                    <p>
                        Are you a student moving in or out of an apartment near campus? Our company is mobile and our teams of movers can deliver your stuff between buildings or help move your furniture into or out of an apartment. Just provide us with all of necessary information and well take care of the rest! Reach out to us for more information or to set up an appointment today
                    </p>
                    <div class="service-links">
                        <a href="/contact" class="book-now green"></a>
                        <a href="moving/">
                            <div class="testimonial">
                                <div class="testimonial-border cf">
                                    <p>Learn More</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hopkins">
            <h2><?php the_field('hopkins_title'); ?></h2>
            <div class="col-1-2">
                <img src="<?php the_field('hopkins_image'); ?>">
            </div>
            <div class="col-1-2">
                <div class="hopkins-commit">
                    <p><?php the_field('hopkins_description'); ?></p>
                    <a href="<?php the_field('hopkins_link'); ?>">
                        <div class="testimonial">
                            <div class="testimonial-border cf">
                                <p>Join the Team!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-1-1">
            <div id="hse">
                <h2>An <span></span> Company</h2>
            </div>
        </div>

    </div>
</div>
<? get_footer(); ?>