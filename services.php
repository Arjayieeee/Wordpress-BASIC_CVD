<?php 

/**
 * Template Name: Services
 */

?>

<?php get_header();?>

            <?php
                $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1,  
                
                );
                $newQuery = new WP_Query($args)

                ?>

<?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

<section class="<?php echo get_field('classname') ?>">
    <div class="container">
        <div class="service__wrapper">
            <div class="web">


            
                <div class="service__text">
                    <h1><?php the_title()?></h1>
                    <p><?php the_content()?> </p>
                    <div class="price">
                        <h4><?php echo get_field('h4_text')?></h4>
                        <h2><?php echo get_field('price')?></h2>
                        <h5><i><?php echo get_field('paragraph')?></i></h5>
                    </div>
                </div>
                <?php echo get_the_post_thumbnail() ?>
            </div>
   
            
        </div>
    </div>
    <div class="down">
        <a href=""><i class="<?php echo get_field('chevron'); ?>"></i></a>
        </div>
</section>

         
<?php
            endwhile;
                else:
                echo"no available content";
                endif;
                wp_reset_postdata();
           ?>


<?php get_footer();?>   

