<?php
/*
Template Name: Terms and Conditions
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
                <h1><?php the_field('title'); ?></h1>
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>

        </div>
    </div>
</div>
<? get_footer(); ?>