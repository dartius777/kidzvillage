<?php

/**

 * Template Name: Visit Us Posts

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
                    <li><a href="<?php echo get_option('home'); ?>">home</a></li>
                    <li><a href="<?php echo get_permalink(4); ?>">visit us</a></li>
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
            <?php if($this_page['map_url'][0] != ""): ?>
                <?php /*<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $this_page['map_url'][0]; ?>" style="color:#0000FF;text-align:left">View enlarged map</a></small> */?>
                  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=en"></script>
                  <script type="text/javascript">
                    var directionsDisplay;
                    var directionsService = new google.maps.DirectionsService();
                    var map;
                    
                    function initialize() {
                      directionsDisplay = new google.maps.DirectionsRenderer();
                      var chicago = new google.maps.LatLng(<?php echo $this_page['location'][0]; ?>);
                      var mapOptions = {
                        zoom:15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        center: chicago
                      }
                      map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                      directionsDisplay.setMap(map);
                        
                        var marker = new google.maps.Marker({  
                            position: new google.maps.LatLng(<?php echo $this_page['location'][0]; ?>),  
                            map: map  
                        });  
                    }
                    
                    function calcRoute() {
                        var start = $("#location").val();
                        var end = "<?php echo $this_page['location'][0]; ?>";
                        var request = {
                            origin:start,
                            destination:end,
                            travelMode: google.maps.TravelMode.DRIVING
                        };
                        directionsService.route(request, function(response, status) {
                          if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                          }
                        });
                    }
                    
                    $(document).ready(function(){
                        google.maps.event.addDomListener(window, 'load', initialize);
                    });
                  </script>
                  <div style="width: 100%; height: 350px; " id="map-canvas"></div>
                  <a target="_blankl" href="<?php echo $this_page['map_url'][0]; ?>">View enlarged map</a>
                  <div class="get_driving_location" style="margin-bottom: 15px;">
                        <p style="margin: 10px 0 0;">Get driving directions:</p>
                        <p class="loc"><input type="text" id="location" />
                        <input type="button" onclick="calcRoute()" id="loc" class="submit" value="" /></p>
                  </div>
            <?php endif; ?>
            <section class="main_content">
                <h1><?php echo $this_page['title'][1]; ?></h1>
		<?php echo $this_page['content'][1]; ?>
            </section>
        </div>
        <div class="right_content_wrapper">
            <h4><a href="<?php echo get_permalink(4); ?>">Visit Us</a></h4>
            <ul class="visit_us_category">
                <?php
                    $args = array( 'child_of' => 4, 'sort_column' => 'post_date' );
                    $menus = get_pages($args);
                    
                    foreach($menus as $page) {
                ?>
                    <li><a class="<?php if($page->ID ==  $this_page_id) echo "active_category"; ?>" href="<?php echo $page->guid; ?>"><?php echo $page->post_title; ?></a></li>
                <?php } ?>
            </ul>
            <img class="visit_us_category_bottom_border" src="<?php echo get_template_directory_uri(); ?>/img/visit_us_category_bottom_border.png" alt="" />
            <?php if(is_page(9)) {?>
                <div class="girl_promo">
                    <a href="<?php echo get_permalink(7); ?>" class="learn_more"><img src="<?php echo get_template_directory_uri(); ?>/img/learn_more.png" alt="" /></a>
                </div>
            <?php }else{ ?>
                <a href="<?php echo get_permalink(9); ?>" class="bunner"></a>
            <?php } ?>
            <div class="dirthday_parties">
                <a href="#" class="learn_more">learn more ››</a>
            </div>
        </div>
        <img class="bottom_section_border" src="<?php echo get_template_directory_uri(); ?>/img/bottom_section_border.png" alt="" />
        <div class="clear"></div>
    </section>
    
    
    <div class="site_bar">

    </div>

</div>

<?php get_footer(); ?>