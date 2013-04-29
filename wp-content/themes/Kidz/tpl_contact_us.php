<?php
/**

 * Template Name: Contact us

 * @package Dartius

 * @subpackage Kidz Village

 */
get_header();
$this_page_id = 21;
$this_page = get_post_meta($this_page_id);
require_once('recaptchalib.php');
?>
<style>
    .error{
        color: red;
        margin-left: 5px; 
        display: block;
    }
    .error.hidden{
        display: none;
    }
</style>
<script>
function contact_with_client() {
    name = $('#name').val();
    email = $('#email').val();
    phone = $('#phone').val();
    subject = $('#subject').val();
    message = $('#message').val();
    recaptcha_challenge_field = document.getElementById('recaptcha_challenge_field').value;
    recaptcha_response_field = document.getElementById('recaptcha_response_field').value;
    valid = true;
    if(name == ""){
        $(".error.name").removeClass("hidden");
        valid = false;
    }else{
        $(".error.name").addClass("hidden");
    }
    if (email == "") {
        $(".error.email").removeClass("hidden");
        valid = false;
    }else{
        $(".error.name").addClass("hidden");
    }
    
    if (valid) {
        $(".error").addClass("hidden");
        $.post("<?php echo get_option("home"); ?>/wp-content/themes/Kidz/sendmail.php", {contact_us: true, name: name, email: email, phone: phone, subject: subject, message: message, recaptcha_challenge_field: recaptcha_challenge_field, recaptcha_response_field: recaptcha_response_field}, function(data){
            if (data == "") {
                $("#status").animate({opacity: 0}, 500, function(){
                   $("#status").text(""); 
                });
                $(".result").animate({opacity: 1}, 500);
            }else{
                $("#status").text(data);     
                $(".result").animate({opacity: 0}, 500); 
                $("#status").animate({opacity: 1}, 500);  
            }
        }); 
    }

}
</script>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>
 <div class="section_wrapper">

                <section class="main_content">
                    <div class="left_content_wrapper">
                        <div class="breadcrumbs_and_share_icons">
                            <ul class="breadcrumbs">
                                <li><a href="<?php echo get_option('home'); ?>">home</a></li>
                                <li><a href="#">contact us</a></li>
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
                            <img class="bottom_section_border" src="<?php echo get_template_directory_uri(); ?>/img/bottom_section_border.png" alt="" />
                        <section class="main_content">
                            <h1><?php echo $this_page['title'][0]; ?></h1>
                            <?php echo $this_page['content'][0]; ?>
                            <form onsubmit="contact_with_client(); return false;" action="/kidz/contact-us/" method="post" class="contact_us_form">
                                <p class="label">Your Name (required)<br /><input type="text" name="name" id="name"  /><span class="error name hidden">This field are required</span></p>
                                <p class="label">Your Email (required)<br /><input type="email" name="email" id="email"  /><span class="error email hidden">This field are required</span></p>
                                <p class="label">Phone<br /><input type="tel" name="phone" id="phone" /></p>
                                <p class="label">Subject<br /><input type="text" name="subject" id="subject" /></p>
                                <p class="label">Your Message<br /><textarea name="message" id="message" ></textarea></p>
                                <div class="captcha">
                                     <?php
                                        $publickey = "6LcQCeASAAAAACvYtl2yORawAHnwPrp5XoLtdkst";
                                        echo recaptcha_get_html($publickey);
                                     ?>
                                </div>
                                <p id="status" style='opacity: 0; color: red; text-align: center;'></p>
                                <p class="label"><input type="submit" name='contact_us' class="submit" /><span class="bold result" style="opacity: 0;">Thank you for your submission!</span></p>
                            </form>
                        </section>
                    </div>
                    <div class="right_content_wrapper">
                        <div class="great_location">
                            <a href="<?php echo get_permalink(11); ?>">Kenilworth<br /> ››</a>
                            <a href="<?php echo get_permalink(13); ?>">Woodbridge<br /> ››</a>
                            <a href="<?php echo get_permalink(15); ?>">Jersey City<br /> ››</a>
                        </div>
                        <div class="girl_promo">
                            <a href="<?php echo get_permalink(7); ?>" class="learn_more"><img src="<?php echo get_template_directory_uri(); ?>/img/learn_more.png" alt="" /></a>
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