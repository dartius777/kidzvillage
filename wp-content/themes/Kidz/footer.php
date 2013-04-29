<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Kidz Village 0.0.1
 * @since Kidz Village 0.0.1
 */
?>

	<footer class="footer">
                <div class="left_footer_box">
                    <ul>
                        <li>© 2013 Kidz Village.<br />All Rights Reserved.</li>
                        <li>131 S 31st Street<br />Kenilworth, NJ 07033 <a href="<?php echo get_permalink(11); ?>">map»</a><br />908-445-7220</li>
                        <li>507 King Georges Rd.<br />Woodbridge, NJ 07095 <a href="<?php echo get_permalink(13); ?>">map»</a><br />732-826-8577</li>
                        <?php /*<li>123 Something Rd.<br />Jersey City, NJ 12345 <a href="<?php echo get_permalink(15); ?>">map»</a><br />732-826-8577</li> */?>
                    </ul>
                </div>
                <div class="right_footer_box">
                    <ul>
                        <li>Contact Us ››<br />
		            <a href="http://www.facebook.com/pages/Kidz-Village/133879133325400"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="" /></a>
                            <a href="https://twitter.com/kidzvillageNJ"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="" /></a>
                            <a href="http://www.youtube.com/user/KidzVillageNJ?feature=watch"><img src="<?php echo get_template_directory_uri(); ?>/img/yoetube.png" alt="" /></a>
                        </li>
                        <li><a href="http://www.premierecreative.com/">Website design and <br />SEO</a> by Premiere Creative</li>
                    </ul>
                </div>

            </footer>
        </div>


    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script> 
    <script type="text/javascript">
        $(document).ready(function() {
            $('#menutabs').tabify();
        });
    </script>

<?php //wp_footer(); ?>

</body>
</html>