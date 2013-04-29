<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Kidz Village 0.0.1
 */

get_header();
$this_page_id = "34";
$this_page = get_post_meta($this_page_id);

$slides= get_post_meta(238);
?>
<script type="text/javascript">
$(document).ready(function(){
            $('.flexslider').flexslider({
                animation: 'fade',
                controlsContainer: '.flexslider'
            });
});
</script>
<div class="section_wrapper">
                    <div class="flex-container">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider_img001.jpg" data-thumb="images/toystory.jpg" alt="" />				<?php echo $slides['slide_1'][0]; ?>
                            </li>

                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider_img002.jpg" data-thumb="images/toystory.jpg" alt="" />				<?php echo $slides['slide_2'][0]; ?>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider_img003.jpg" data-thumb="images/toystory.jpg" alt="" />				<?php echo $slides['slide_3'][0]; ?>
                            </li>

                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider_img004.jpg" data-thumb="images/toystory.jpg" alt="" />				<?php echo $slides['slide_4'][0]; ?>
                            </li>
                        </ul>
                    </div>
                    </div>
                <section class="main_content">
                    <img class="bottom_section_border" src="<?php echo get_template_directory_uri(); ?>/img/bottom_section_border.png" alt="" />
                    <div class="left_box_content">
                        <h1><?php echo $this_page['title'][0]; ?></h1>
			<?php echo $this_page['content'][0]; ?>    
		    </div>
                    <div class="right_box_content">
                        <div id="tabstabs">
                            <ul id="menutabs">
                                <li class="tab1 active"><a href="#tab1">Woodbridge video</a></li>
                                <li class="tab2"><a href="#tab2">Kenilworth Video</a></li>

                            </ul>
                            <div style="clear:both"></div>
                            <div class="tabcontent tab1bg" id="tab1">
                                <object id="videoplayer1" type="application/x-shockwave-flash" data=""><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="flashvars" value="" /></object>
                            </div>
                            <div class="tabcontent tab2bg" id="tab2">
                                <object id="videoplayer2" type="application/x-shockwave-flash" data=""><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="flashvars" value="" /></object>
                            </div><!--
                        <img src="<?php echo get_template_directory_uri(); ?>/img/video.png" width="431" height="207" alt="bunner1" />-->
                        </div>
                        <a href="<?php echo get_permalink(18); ?>"><img class="bunner1" src="<?php echo get_template_directory_uri(); ?>/img/bunner1.png" width="431" height="207" alt="" /></a>
                        <a href="<?php echo get_permalink(18); ?>"><img class="bunner1_768" src="<?php echo get_template_directory_uri(); ?>/img/bunner1_768.png" width="348" height="168" alt="" /></a>
                        <a href="<?php echo get_permalink(18); ?>"><img class="bunner1_320" src="<?php echo get_template_directory_uri(); ?>/img/bunner1_768.png" width="307" height="148" alt="" /></a>
                    </div>
                    <div class="clear"></div>
                    <img class="bottom_section_border" src="<?php echo get_template_directory_uri(); ?>/img/bottom_section_border.png" alt="" />
                </section>
                <?php include("visit_us_sidebar.php");?>
                <?php include("upcoming_events_sidebar.php");?>
            </div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>