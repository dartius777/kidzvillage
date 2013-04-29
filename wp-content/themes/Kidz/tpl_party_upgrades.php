<?php

/**

 * Template Name: Party Upgrades

 * @package Dartius

 * @subpackage Kidz Village

 */
get_header();
$this_page_id = 134;
$this_page = get_post_meta($this_page_id);
?>

<div class="section_wrapper">

                <section class="main_content">
                    <div class="left_content_wrapper">
                        <div class="breadcrumbs_and_share_icons">
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo get_option('home'); ?>">home</a></li>
                                <li><a href="<?php echo get_permalink(18); ?>">birthday parties</a></li>
                                <li><a href="#">party upgrades</a></li>
                            </ul>
                            <div class="share_icons">
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_preferred_1"></a>
                                    <a class="addthis_button_preferred_2"></a>
                                    <a class="addthis_button_preferred_3"></a>
                                    <a class="addthis_button_preferred_4"></a>
                                    <a class="addthis_button_compact"></a>
                                    <a class="addthis_counter addthis_bubble_style"></a>
                                </div>
                                <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515c23807d5c0372"></script>

                            </div>
                        </div>
                        <img class="main_banner" src="<?php echo get_template_directory_uri(); ?>/img/img022.jpg" alt=""/>
                        <section class="main_content">
                            <h1><?php echo $this_page['title'][0]; ?></h1>
                            <?php echo $this_page['content'][0]; ?>
                            </section>
                    </div>
                    <div class="right_content_wrapper">
                        <h4><a href="<?php echo get_permalink(18); ?>">Birthday Parties</a></h4>
                        <ul class="visit_us_category">
                            <li><a href="#">Party Menu (<img src="<?php echo get_template_directory_uri(); ?>/img/pdf.png" alt="" />)</a></li>
                            <li><a class="active_category" href="<?php echo get_permalink(134); ?>">Party Upgrades</a></li>
                        </ul>
                        <img class="visit_us_category_bottom_border" src="<?php echo get_template_directory_uri(); ?>/img/visit_us_category_bottom_border.png" alt="" />
                        <div class="girl_promo2">
                                <a href="<?php echo get_permalink(11); ?>">Kenilworth ››</a>
                                <a href="<?php echo get_permalink(13); ?>">Woodbridge ››</a>
                                <a href="<?php echo get_permalink(15); ?>">Jersey City ››</a>
                        </div>
                    </div>


                    <img class="bottom_section_border" src="<?php echo get_template_directory_uri(); ?>/img/bottom_section_border.png" alt="" />
                    <div class="clear"></div>
                </section>
                <?php include("visit_us_sidebar.php");?>
            </div>

<?php get_footer(); ?>