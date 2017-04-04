<?php
/*
Template Name: Employment
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

            <div class="main-content cf">
                <div class="col-3-4 push-2">
                    <h1><?php the_field('title'); ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="col-1-2 push-4">
                    <div class="line-divider"></div>
                </div>
                <div class="col-7-16 push-2">
                    <div class="frame">
                        <div class="frame-pic" style="background-image: url(<?php the_field('image'); ?>);"></div>
                        <div class="caption">
                            <h4><?php the_field('caption'); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-7-16">
                    <div class="benefits">
                        <span>A+</span>
                        <h3><?php the_field('aside_title'); ?></h3>
                        <div class="line-divider"></div>
                        <p><?php the_field('aside_body'); ?></p>
                    </div>
                </div>
            </div>

        </div>

        <div id="priority-stamp"></div>

    </div>
</div>
<? get_footer(); ?>