<?php 

/**
 * Template Name: Contact Page
 */

?>
<?php get_header();?>

<section class="contact__section">
            <div class="container">
                <div class="contact__wrap">
                    <div class="contact__text">
                            <h2><?php echo get_field('h2_text') ?></h2>
                                <p><?php echo get_field('paragraph') ?></p>
                                    <div class="contact__icons">
                                        <div> 
                                            <i class="fa-solid fa-phone-flip"></i>
                                            <span><?php echo get_field('span1') ?></span>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-envelope"></i>
                                                <span><?php echo get_field('span2') ?></span>
                                        </div>
                                            <div>
                                                <i class="fa-solid fa-map-pin"></i>
                                                <span><?php echo get_field('span3') ?></span>
                                            </div>
                                    </div>
                    </div>
                    <div class="contact__input">
                        <!-- <form action="">
                            <div class="inputgroup">
                            <input type="text"  placeholder="Name" id="">
                            <br>
                            <input type="email"  placeholder="Email" id="">
                            <br>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="send">
                            <input type="submit" value="Send Message">
                            </div>
                        </form> -->
                            <?php echo do_shortcode('[contact-form-7 id="209" title="Contact form 1"]'); ?>
                    </div>  
                </div>
            </div>
        </section>
        
<hr>

<?php get_footer();?>