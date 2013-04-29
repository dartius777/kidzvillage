<?php

/**

 * Template Name: Attractions Posts

 * @package Dartius

 * @subpackage Kidz Village

 */
get_header();
$this_page_id = get_the_ID();
$this_page_info = get_post($this_page_id);
$this_page = get_post_meta($this_page_id);
$main_banner = wp_get_attachment_image_src( $this_page['file'][0] );
?>

<div class="section_wrapper">

    <section class="main_content">
        <div class="left_content_wrapper">
            <div class="breadcrumbs_and_share_icons">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_option('home');?>">home</a></li>
                    <li><a href="<?php echo get_permalink(17); ?>">attractions</a></li>
                    <li><a href="#" style="text-transform: lowercase;"><?php echo $this_page_info->post_title; ?></a></li>
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
            <img class="main_banner" src="<?php echo str_replace("-150x150", "", $main_banner[0]); ?>" alt=""/>
            <section class="main_content">
                <h1><?php echo $this_page['title'][1]; ?></h1>
		<?php echo $this_page['content'][1]; ?>
            </section>
        </div>
        <div class="right_content_wrapper">
            <h4><a href="<?php echo get_permalink(17); ?>">Attractions</a></h4>
            <ul class="visit_us_category">
                <?php
                    $args = array( 'child_of' => 17, 'sort_column' => 'post_date' );
                    $menus = get_pages($args);
                    
                    foreach($menus as $page) {
                ?>
                    <li><a class="<?php if($page->ID ==  $this_page_id) echo "active_category"; ?>" href="<?php echo $page->guid; ?>"><?php echo $page->post_title; ?></a></li>
                <?php } ?>
            </ul>
            <img class="visit_us_category_bottom_border" src="<?php echo get_template_directory_uri(); ?>/img/visit_us_category_bottom_border.png" alt="" />
            <p class="footnote">K = Kenilworth only<br />W=Woodbridge only</p>
            <div class="great_location">
                <a href="<?php echo get_permalink(11); ?>">Kenilworth<br /> ››</a>
                <a href="<?php echo get_permalink(13); ?>">Woodbridge<br /> ››</a>
                <a href="<?php echo get_permalink(15); ?>">Jersey City<br /> ››</a>
            </div>
            <div class="dirthday_parties">
                <a href="<?php echo get_permalink(18); ?>" class="learn_more">learn more ››</a>
            </div>
        </div>
        <img class="bottom_section_border" src="<?php echo get_template_directory_uri(); ?>/img/bottom_section_border.png" alt="" />
        <div class="clear"></div>
    </section>
    
    
    <div class="site_bar">

    </div>

</div>

<?php get_footer(); ?>