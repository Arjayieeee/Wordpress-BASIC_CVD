<?php get_header(); ?>

<div class="thecontent">
    <div class="container">
        <div class="wrapper">
            <div class="branding">
                <h2>Designing Conccept</h2>
                <div class="updates__author">
                        <ul>
                            <li><i class="fa-solid fa-user"></i>Arjay B. Federio</li>
                            <li><i class="fa-solid fa-calendar-days"></i><?php echo get_the_time('M-d-Y'); ?></li>
                            <li><i class="fa-solid fa-tags"></i>Web Design | Wire Frame</li>
                        </ul>
                </div>
                <div class="image">
                <?php echo get_the_post_thumbnail()?>
                </div>
                <div class="updates__content">
                    
                    <p><?php echo get_field('single_content') ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>