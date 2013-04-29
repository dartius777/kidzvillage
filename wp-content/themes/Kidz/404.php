<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div class="section_wrapper">

                <section class="main_content border_right">
                    <div class="breadcrumbs_and_share_icons">
                        <ul class="breadcrumbs">
                            <li><a href="<?php echo get_option("home"); ?>">home</a></li>
                            <li><a href="#">404</a></li>
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
                    <h1>Oops, we can't find that page.</h1><br /><h2 style="margin-bottom: 25px;">Check the address again or select one of the pages below.</h2>
                    <img class="bottom_section_border" src="<?php echo get_template_directory_uri(); ?>/img/bottom_section_border.png" alt="" />
			
                    <div class="left-menu">
                        <ul>
                             <li><a href="<?php echo get_option("home"); ?>">Home</a></li>
                            <li><a href="<?php echo get_permalink(4); ?>">Visit Us</a>
                                <ul>
                                    <li><a href="<?php echo get_permalink(7); ?>">Prices</a></li>
                                    <li><a href="<?php echo get_permalink(9); ?>">Perky’s Pizza</a></li>
                                    <li><a href="<?php echo get_permalink(11); ?>">Kenilworth Location</a></li>
                                    <li><a href="<?php echo get_permalink(13); ?>">Woodbridge Location</a></li>
                                    <li><a href="<?php echo get_permalink(15); ?>">Jersey City Location</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo get_permalink(17); ?>">Attractions</a>
                                <ul>
                                    <li><a href="<?php echo get_permalink(65); ?>">Kidz Village Playground</a></li>
                                    <li><a href="<?php echo get_permalink(74); ?>">Kidz Kastle</a></li>
                                    <li><a href="<?php echo get_permalink(78); ?>">Alek’s Tool Shop</a></li>
                                    <li><a href="<?php echo get_permalink(82); ?>">Arcade Games</a></li>
                                    <li><a href="<?php echo get_permalink(86); ?>">Chris’ Comics</a></li>
                                    <li><a href="<?php echo get_permalink(90); ?>">Trinity’s Salon</a></li>
                                    <li><a href="<?php echo get_permalink(94); ?>">Guppies Toddler Town</a></li>
                                    <li><a href="<?php echo get_permalink(98); ?>">Friendly Foods</a></li>
                                    <li><a href="<?php echo get_permalink(102); ?>">Village Cinema</a></li>
                                    <li><a href="<?php echo get_permalink(108); ?>">The King’s Diner <sup>K</sup></a></li>
                                    <li><a href="<?php echo get_permalink(112); ?>">The House</a></li>
                                    <li><a href="<?php echo get_permalink(116); ?>">Lauren’s Music Room <sup>W</sup></a></li>
                                    <li><a href="<?php echo get_permalink(121); ?>">School Time <sup>W</sup></a></li>
                                    <li><a href="<?php echo get_permalink(125); ?>">Cars <sup>W</sup></a></li>
                                    <li><a href=<?php echo get_permalink(129); ?>">Chevy’s Diner <sup>W</sup></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo get_permalink(18); ?>">Birthday Parties</a></li>
                            <li><a href="<?php echo get_permalink(19); ?>">Group Sales</a></li>
                            <li><a href="<?php echo get_permalink(20); ?>">FAQs</a></li>
                            <li><a href="<?php echo get_permalink(21); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="right-menu">
                        <ul>

                        </ul>
                    </div>

                    <div class="clear"></div>
                </section>

            </div>

<?php get_footer(); ?>